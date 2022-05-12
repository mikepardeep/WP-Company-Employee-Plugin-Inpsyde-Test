import {registerBlockType} from '@wordpress/blocks';


registerBlockType('ourplugin/company-employee',{
    title: "Company Employees",
    description:"List of Employee Profile",
    icon:"welcome-learn-more",
    attributes:{
        employeeID: {type: "string"}
    },
    edit: CompanyEmployeePostEditComponent,
    save: function(){
        return null
    }
  
})

function CompanyEmployeePostEditComponent(){


    return (
        <h1>Hello world guys</h1>
    )
}