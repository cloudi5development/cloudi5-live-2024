<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] 		    = 'frontend';
$route['aboutus']					    = 'frontend/aboutus';
$route['privacy-policy']			    = 'frontend/privacy_policy';
$route['terms']			    			= 'frontend/terms';
$route['cancellation-policy']			= 'frontend/cancellation_policy';
$route['refund-policy']			    	= 'frontend/refund_policy';
$route['blog/([a-z0-9\-]+)-(\d+)']	    = "blog/info_by_slug_and_id/$1/$2";
$route['careers']					    = 'frontend/careers';
$route['portfolio']					    = 'frontend/portfolio';
$route['portfolio/([a-z0-9\-]+)-(\d+)']	= "frontend/portfolio_by_slug_and_id/$1/$2";
$route['careerform']				    = 'frontend/careerform';
$route['careers-details/([a-z0-9\-]+)/([a-z0-9\-]+)']	= "frontend/careers_details/$1/$2";
$route['clients']					    = 'frontend/clients';
$route['contactus']					    = 'frontend/contactus';
$route['contactform']				    = 'frontend/contactform';
$route['commonform']				    = 'frontend/commonform';
$route['digital-marketing-company-in-coimbatore']	    = 'frontend/digital_marketing_service';
$route['multi-vendor-ecommerce-website']	            = 'frontend/multi_vendor_ecommerce_website';
$route['ecommerce-website-development']	            = 'frontend/ecommerce_website_development';
$route['multi-vendor-ecommerce-website-in-coimbatore']  = 'frontend/multi_vendor_ecommerce_website_in_coimbatore';
$route['food']	                        = 'frontend/food';
$route['flutter-app-development-company-in-coimbatore']	= 'frontend/flutter_app_development';
$route['search-engine-optimization']	= 'frontend/search_engine_optimization';
$route['search-engine-marketing']	    = 'frontend/search_engine_marketing';
$route['social-media-optimization']	    = 'frontend/social_media_optimization';
$route['jewellery']	                    = 'frontend/jewellery';
$route['leads-management-software']	    = 'frontend/leads_management_software';
$route['erp-software-development']	    = 'frontend/erp_software_development';
$route['crm-development']	    = 'frontend/crm_development';
$route['ecommerce-enquiry-form']	            = 'frontend/ecommerce_enquiry_form';
$route['job-post']					    = 'frontend/job_post';
$route['mobile-app-development-company-in-coimbatore']	= 'frontend/mobile_application_development_android_app';
$route['newsletterform']			    				= 'frontend/newsletterform';
$route['school-management-software']    				= 'frontend/school_management_software';
$route['school-management-software-in-avinashi']    	= 'frontend/school_management_software_in_avinashi';
$route['school-management-software-in-erode']    		= 'frontend/school_management_software_in_erode';
$route['school-management-software-in-madurai']    		= 'frontend/school_management_software_in_madurai';
$route['school-management-software-in-mettupalayam']    = 'frontend/school_management_software_in_mettupalayam';
$route['school-management-software-in-pollachi']    	= 'frontend/school_management_software_in_pollachi';
$route['school-management-software-in-salem']    		= 'frontend/school_management_software_in_salem';
$route['school-management-software-in-thoothukudi']     = 'frontend/school_management_software_in_thoothukudi';
$route['school-management-software-in-tiruchengode']    = 'frontend/school_management_software_in_tiruchengode';
$route['school-management-software-in-tirupur']    		= 'frontend/school_management_software_in_tirupur';
$route['school-management-software-in-udumalaippettai'] = 'frontend/school_management_software_in_udumalaippettai';
$route['school-management-software-in-namakkal'] 		= 'frontend/school_management_software_in_namakkal';
$route['school-management-software-in-ooty'] 		    = 'frontend/school_management_software_in_ooty';
$route['subscribeform']				    = 'frontend/subscribeform';
$route['thank-you']					    = 'frontend/success';
$route['website-design-company-in-coimbatore']			    = 'frontend/website_design_company_in_coimbatore';
$route['website-design-company-in-avinashi'] 			= 'frontend/website_design_company_in_avinashi';
// $route['website-design-company-in-coimbatore']			= 'frontend/website_design_company_in_coimbatore';
$route['website-design-company-in-erode']				= 'frontend/website_design_company_in_erode';
$route['website-design-company-in-madurai']				= 'frontend/website_design_company_in_madurai';
$route['website-design-company-in-mettupalayam']		= 'frontend/website_design_company_in_mettupalayam';
$route['website-design-company-in-pollachi']			= 'frontend/website_design_company_in_pollachi';
$route['website-design-company-in-salem']				= 'frontend/website_design_company_in_salem';
$route['website-design-company-in-thoothukudi']			= 'frontend/website_design_company_in_thoothukudi';
$route['website-design-company-in-tiruchengode']		= 'frontend/website_design_company_in_tiruchengode';
$route['website-design-company-in-tirupur']				= 'frontend/website_design_company_in_tirupur';
$route['website-design-company-in-udumalaippettai']		= 'frontend/website_design_company_in_udumalaippettai';
$route['website-design-company-in-namakkal']			= 'frontend/website_design_company_in_namakkal';
$route['website-design-company-in-ooty']			    = 'frontend/website_design_company_in_ooty';
$route['web-development-company-in-coimbatore']	 = 'frontend/web_development_company_in_coimbatore';
$route['hire-developers']			                    = 'frontend/hire_developers';
$route['write-for-us']			                        = 'frontend/write_for_us';
$route['portfolio-new']			                        = 'frontend/portfolio_new';
$route['erp-software']			                        = 'frontend/erp_software';
$route['our-clientele']			                        = 'frontend/clients_logo';
$route['portfolio-new-details']			                = 'frontend/portfolio_new_details';
$route['smm']			                        = 'frontend/smm';
$route['home-new']			                        = 'frontend/home_new';
$route['ios-app-development-company-in-coimbatore']			                        = 'frontend/ios_app_development';
$route['crm']			    = 'frontend/crm';
$route['404_override']				    = 'custom404';
$route['translate_uri_dashes']		    = FALSE;
$route['write_for_us_enquiry_form']			= 'frontend/write_for_us_enquiry_form';