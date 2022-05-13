import {registerBlockType} from '@wordpress/blocks';
import {useState, useEffect} from "react";
import apiFetch from "@wordpress/api-fetch";
import DOMPurify from 'dompurify';
import { useSelect } from '@wordpress/data';
import "../Scss/EmployeeBlock.scss";


registerBlockType('ourplugin/company-employee',{
    title: "Company Employees",
    description:"List of Employee Profile",
    icon:"welcome-learn-more",
    attributes:{
        employeeID: {type: "string"}
    },
    edit: CompanyEmployeeEditComponent,
    save: function(){
        return null
    }
  
})


function CompanyEmployeeEditComponent(props){
    const [thePreview, setThePreview] = useState("")


    useEffect(() => {

        if(props.attributes.employeeID == "Select an Employee"){
            setThePreview("");
            return;
        } 

        console.log(props.attributes.employeeID);

        if (props.attributes.employeeID === undefined) return '';

        async function employeeFetch()
        {
            const response = await apiFetch({
                path: `companyEmployee/v1/getHTML?employeeID=${props.attributes.employeeID}`,
                method: "GET"
            })

            setThePreview(response);
        }

        employeeFetch();

    }, [props.attributes.employeeID])
   


    const allCompanyEmployees = useSelect(select =>{
        return select("core").getEntityRecords("postType", "company_employee", {per_page: -1});
    })




    if (allCompanyEmployees == undefined) return <p>Loading...</p>
    


    return (
        <div className='company-employee-featured-wrapper'>
            <div className='company-employee-select-container'>
                <select onChange={event => props.setAttributes({employeeID: event.target.value})}>
                    <option>Select an Employee</option>
                    {
                        allCompanyEmployees.map(employee=>{
                            return (
                                <option value={employee.id} selected={props.attributes.employeeID == employee.id}>
                                    {employee.title.rendered}
                                </option>
                            )
                        })
                    }
                </select>
            </div>
            <div dangerouslySetInnerHTML={{__html: DOMPurify.sanitize(thePreview)}}>

            </div>
        </div>
    )
}