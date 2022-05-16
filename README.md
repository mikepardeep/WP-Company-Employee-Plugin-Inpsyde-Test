# Company Employee Plugin

This plugin display the list of employees profile based on user selection. The employees are registered via the custom post metadata field. This plugin mainly developed for Inpsyde Front-end Developer position test.

# Development

Company Employee Plugin developed with `Object Oriented Programming(OOP)` method following `Wordpress` and `Inpsyde` coding standard. The `index.php` file at plugin root directory initiates the main plugin configuration and hook. This plugin constructed with 2 primary folders which are `resources` and `src`.  The resources folder contains `front-end logic` files that serve html content, styling and scripting. Src folders contains `back-end admin logic` which are custom post, gutenberg block,metadata,api registration and configuration.The `provider` subfolder in src `compiled` the plugin logics and initiate with index.php file. It is the only file index.php depends to run plugin main logic.


The plugin file structure is as follow:

```

├── assets                                          Assets folder store document and images.
├── build                                           Javascript and CSS files build folder.
│   node_modules                                    NPM Javascript packages folder.
├── resources                                       Resources folder includes the files for front-end logic.
|   |── Js                                              Javascript files folder.
│   |   ├── EmployeeBlock.js                                Gutenberg Block Editor Javascript file.
|   |   └── EmployeePublic.js                               Front-end Public javascript file.
|   |── Public Frontend                                 Public front-end code rendering folder. 
│   |   ├── EmployeePostPublic.php                          Rendering HTML code for public front-end.
|   |── Scss                                            Gutenberg Block and Front-end styling folder
│   |   ├── EmployeeBlock.css                               Gutenberg Block Editor CSS file.
|   |   └── EmployeePublic.css                              Public Frontend CSS file.
├── src                                             Src folder includes the file for back-end logic.
│   |── Api                                             API folder for setting route.
│   |    ├── EmployeePostApi                                File that creating and sending post data to API route. 
│   |── Inc                                             Include folder for plugin hook.
│   |    ├── EmployeePluginActivation.php                   Plugin Activation hook.
│   |    └── EmployeePluginDeactivation.php                 Plugin Deactivation hook.
│   |── Model                                           Model folder to create main plugin function. 
│   |    ├── EmployeeBlockModel.php                         Gutenberg Block Model file that create plugin blocks registration and configuration.
│   |    |── EmployeeMetaboxModel.php                       Metabox Block Model logic file that create and configure metadata field.
│   |    └── EmployeePostModel.php                          Employee Post Model logic file that create and configure custom post.
│   |── Provider                                        Provider folder compiled all logic functions.
│   |    ├── EmployeeProvider.php                           Compiled all the logic functions and serve it to the main index.php for initiation.
│   └── Registration                                    Plugin script and Style registration folder.
│        └── EmployeeRegistration.php                       File that register front-end and gutenberg block javascript and CSS file.              
├── .gitignore                                      Git ignoring rules
├── vendor                                          Composer autoload and standards folder.
├── composer.json                                   PHP root dependencies and configuration.
├── composer.lock                                   PHP product packaging.
├── index.php                                       Main plugin code initation.
├── LICENSE                                         Plugin license. 
├── package-lock.json                               Javascript packages.
├── package.json                                    Javascrip root dependencies and configuration.
├── phpcs.xml.dist                                  Wordpress coding convention and standards execution .
├── README.md                                       Plugin definition and description.
└── uninstall.php                                   Plugin uninstall hook.
```


# Installation

### Minimum Requirements
* PHP 5.6 or greater
* MySQL 5.6 or greater
* WordPress 4.4+
* WP Memory limit of 64 MB or greater (128 MB or higher is preferred)

### Automatic Installation
This is the easiest way to install the Company Employee plugin.
1. Log into your WordPress installation.
2. Go to the menu item *Plugins* and then to *Install*.
3. Search for *Company Employee Plugin*. In case several plugins are listed, check if *Pardeep Mohan* is the plugin author.
4. Click *Install Now* and wait until WordPress reports the successful installation.

### Manual Installation
In case the automatic installation doesn’t work, download the plugin from here via the *Download*-button. Unpack the archive and load the folder via FTP into the directory `wp-content\plugins` of your WordPress installation. Go to *Plugins => Installed plugins* and click *Activate* on *Company Employee Plugin*.

# Usage
This is the procedure for Company Employee plugin usage.
1. Activate the *Company Employee Plugin*.
2. Once plugin activated,click employees post icon in admin menu.
3. Add new post by clicking *Add New* button.
4. Set the title for the post.
5. Click the setting icon at navbar and fill in the metadata fields.
6. Upload the profile picture via Employee Image section.
7. Click the Publish icon at the top end.
8. Once published, go to page post type and create a post.
9. Insert the Company Employee gutenberg block at post edit section.
10. Select an employee from the dropdown list and click publish.
11. The employee profile can be seen at website front end.
12. Click the down arrow to view the employee profile detail.
13. The theme use for this plugin development is wordpress default theme *Twenty Twenty*. 


# Contributing

All feedback / bug reports / pull requests are welcome.

# License

License: GLPv2+

License URI: https://www.gnu.org/licenses/gpl-2.0.txt