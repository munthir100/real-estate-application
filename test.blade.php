<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport" />

    <meta name="csrf-token" content="yUGKN6Oky3yHfTlHMmOb5qFOcFtJUB2Uu5iNAJRH">

    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet" type="text/css">
    <!-- CSS Library-->

    <style>
        :root {
            --primary-color: #2B4DB9;
            --font-body: Muli, sans-serif;
            --font-heading: Play, sans-serif;
        }
    </style>

    <script>
        "use strict";
        window.trans = {
            "Price": "Price",
            "Number of rooms": "Number of rooms",
            "Number of rest rooms": "Number of rest rooms",
            "Square": "Square",
            "No property found": "No property found",
            "million": "million",
            "billion": "billion",
            "in": "in",
            "Added to wishlist successfully!": "Added to wishlist successfully!",
            "Removed from wishlist successfully!": "Removed from wishlist successfully!",
            "I care about this property!!!": "I care about this property!!!",
            "See More Reviews": "See More Reviews",
            "Reviews": "Reviews",
            "out of 5.0": "out of 5.0",
            "service": "Service",
            "value": "Value for Money",
            "location": "Location",
            "cleanliness": "Cleanliness",
            "please_enter_address": "Please enter address",
            "address_invalid": "Address invalid"
        }
        window.themeUrl = 'https://resido.thesky9.com/themes/resido';
        window.siteUrl = 'https://resido.thesky9.com';
        window.currentLanguage = 'en';
    </script>

    <title>Properties</title>
    <meta name="description" content="Resido is a premium real estate related websites build on Laravel. With an advanced admin dashboard that will help you create a local or global real-estate directory site.">
    <meta property="og:site_name" content="Cicica Nekretnine">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Properties">
    <meta property="og:image" content="https://resido.thesky9.com/storage/general/screenshot.png">
    <meta name="twitter:title" content="Properties">

    <link href="https://resido.thesky9.com/storage/general/favicon.png" rel="shortcut icon">




    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": "Cicica Nekretnine",
            "url": "https://resido.thesky9.com"
        }
    </script>

    <link media="all" type="text/css" rel="stylesheet" href="https://resido.thesky9.com/vendor/core/plugins/language/css/language-public.css?v=2.2.0">
    <link media="all" type="text/css" rel="stylesheet" href="https://resido.thesky9.com/themes/resido/plugins/animation.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://resido.thesky9.com/themes/resido/plugins/bootstrap/bootstrap.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://resido.thesky9.com/themes/resido/plugins/ion.rangeSlider.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://resido.thesky9.com/themes/resido/plugins/dropzone.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://resido.thesky9.com/themes/resido/plugins/select2.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://resido.thesky9.com/themes/resido/plugins/slick.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://resido.thesky9.com/themes/resido/plugins/slick-theme.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://resido.thesky9.com/themes/resido/plugins/fontawesome/css/fontawesome.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://resido.thesky9.com/themes/resido/plugins/icofont.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://resido.thesky9.com/themes/resido/plugins/light-box.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://resido.thesky9.com/themes/resido/plugins/line-icon.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://resido.thesky9.com/themes/resido/plugins/themify.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://resido.thesky9.com/themes/resido/css/style.css?v=2.22.0">
    <link media="all" type="text/css" rel="stylesheet" href="https://resido.thesky9.com/vendor/core/core/table/css/table.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://resido.thesky9.com/vendor/core/core/base/libraries/datatables/media/css/dataTables.bootstrap.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://resido.thesky9.com/vendor/core/core/base/libraries/datatables/extensions/Buttons/css/buttons.bootstrap.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://resido.thesky9.com/vendor/core/core/base/libraries/datatables/extensions/Responsive/css/responsive.bootstrap.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://resido.thesky9.com/themes/resido/css/account.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://resido.thesky9.com/vendor/core/plugins/real-estate/css/app_custom.css">


    <script src="https://resido.thesky9.com/themes/resido/plugins/jquery.min.js"></script>
    <script src="https://resido.thesky9.com/themes/resido/plugins/vue.global.min.js?v=2.22.0"></script>
    <script src="https://resido.thesky9.com/vendor/core/core/base/js/vue-app.js"></script>
    <!-- Put translation key to translate in VueJS -->
    <script type="text/javascript">
        "use strict";
        window.trans = JSON.parse('{\"joined_on\":\"Joined :date\",\"dob\":\"Born :date\",\"email\":\"Email\",\"username\":\"Username\",\"email_or_username\":\"Email\\/Username\",\"password\":\"Password\",\"password-confirmation\":\"Confirm Password\",\"remember-me\":\"Remember Me\",\"login-title\":\"Login\",\"login-cta\":\"Login\",\"register-title\":\"Register\",\"register-cta\":\"Register\",\"forgot-password-cta\":\"Forgot Your Password?\",\"name\":\"Name\",\"reset-password-title\":\"Reset Password\",\"reset-password-cta\":\"Reset Password\",\"cancel-link\":\"Cancel\",\"logout-cta\":\"Logout\",\"header_profile_link\":\"Profile\",\"header_settings_link\":\"Settings\",\"header_logout_link\":\"Logout\",\"unknown_state\":\"Unknown\",\"close\":\"Close\",\"save\":\"Save\",\"loading\":\"Loading...\",\"new_image\":\"New image\",\"change_profile_image\":\"Change avatar\",\"save_cropped_image_failed\":\"Save cropped image failed!\",\"failed_to_crop_image\":\"Failed to crop image\",\"failed_to_load_data\":\"Failed to load data\",\"read_image_failed\":\"Read image failed\",\"update_avatar_success\":\"Update avatar successfully!\",\"change_avatar_description\":\"Click on image to change avatar\",\"notices\":{\"error\":\"Error!\",\"success\":\"Success!\"},\"sidebar_title\":\"Personal settings\",\"sidebar_information\":\"Account Information\",\"sidebar_security\":\"Security\",\"sidebar_packages\":\"Packages\",\"sidebar_transactions\":\"Transactions\",\"account_field_title\":\"Account Information\",\"profile-picture\":\"Profile picture\",\"uploading\":\"Uploading...\",\"phone\":\"Phone\",\"first_name\":\"First name\",\"last_name\":\"Last name\",\"description\":\"Short description\",\"description_placeholder\":\"Tell something about yourself...\",\"verified\":\"Verified\",\"verify_require_desc\":\"Please verify email by link we sent to you.\",\"birthday\":\"Birthday\",\"year_lc\":\"year\",\"month_lc\":\"month\",\"day_lc\":\"day\",\"gender\":\"Gender\",\"gender_male\":\"Male\",\"gender_female\":\"Female\",\"gender_other\":\"Other\",\"security_title\":\"Security\",\"packages_title\":\"Packages\",\"transactions_title\":\"Transactions\",\"current_password\":\"Current password\",\"password_new\":\"New password\",\"password_new_confirmation\":\"Confirmation password\",\"password_update_btn\":\"Update password\",\"activity_logs\":\"Activity Logs\",\"oops\":\"Oops!\",\"no_activity_logs\":\"You have no activity logs yet\",\"actions\":{\"create_property\":\"You have created property \\\":name\\\"\",\"update_property\":\"You have updated property \\\":name\\\"\",\"delete_property\":\"You have deleted property \\\":name\\\"\",\"update_setting\":\"You have updated your settings\",\"update_security\":\"You have updated your security settings\",\"your_property_updated_by_admin\":\"Your property \\\":name\\\" is updated by administrator\",\"changed_avatar\":\"You have changed your avatar\"},\"load_more\":\"Load more\",\"loading_more\":\"Loading...\",\"back-to-login\":\"Back to login page\",\"no_transactions\":\"No transactions\",\"approved_properties\":\"Approved properties\",\"pending_approve_properties\":\"Pending approve properties\",\"rejected_properties\":\"Rejected properties\",\"your_credits\":\"Your Credits\",\"credits\":\"credits\",\"per_post\":\"per post\",\"free\":\"Free\",\"posts\":\"post(s)\",\"total\":\"Total\",\"purchase\":\"Purchase\",\"select_facility\":\"Select facility\",\"distance\":\"Distance (Km)\",\"add_new\":\"Add new\",\"resend\":\"Resend\"}');
        var BotbleVariables = BotbleVariables || {};
        BotbleVariables.languages = {
            tables: {
                "id": "ID",
                "name": "Name",
                "slug": "Slug",
                "title": "Title",
                "order_by": "Order By",
                "order": "Order",
                "status": "Status",
                "created_at": "Created At",
                "updated_at": "Updated At",
                "description": "Description",
                "operations": "Operations",
                "url": "URL",
                "author": "Author",
                "notes": "Notes",
                "column": "Column",
                "origin": "Origin",
                "after_change": "After changes",
                "views": "Views",
                "browser": "Browser",
                "session": "Session",
                "activated": "activated",
                "deactivated": "deactivated",
                "is_featured": "Is featured",
                "edit": "Edit",
                "delete": "Delete",
                "restore": "Restore",
                "activate": "Activate",
                "deactivate": "Deactivate",
                "excel": "Excel",
                "export": "Export",
                "csv": "CSV",
                "pdf": "PDF",
                "print": "Print",
                "reset": "Reset",
                "reload": "Reload",
                "display": "Display",
                "all": "All",
                "add_new": "Add New",
                "action": "Actions",
                "delete_entry": "Delete",
                "view": "View Detail",
                "save": "Save",
                "show_from": "Show from",
                "to": "to",
                "in": "in",
                "records": "records",
                "no_data": "No data to display",
                "no_record": "No record",
                "confirm_delete": "Confirm delete",
                "confirm_delete_msg": "Do you really want to delete this record?",
                "confirm_delete_many_msg": "Do you really want to delete selected record(s)?",
                "cancel": "Cancel",
                "template": "Template",
                "email": "Email",
                "last_login": "Last login",
                "shortcode": "Shortcode",
                "image": "Image",
                "bulk_changes": "Bulk changes",
                "submit": "Submit",
                "please_select_record": "Please select at least one record to perform this action!",
                "checkbox": "Checkbox"
            },
            notices_msg: {
                "create_success_message": "Created successfully",
                "update_success_message": "Updated successfully",
                "delete_success_message": "Deleted successfully",
                "success_header": "Success!",
                "error_header": "Error!",
                "no_select": "Please select at least one record to perform this action!",
                "processing_request": "We are processing your request.",
                "error": "Error!",
                "success": "Success!",
                "info": "Info!",
                "enum": {
                    "validate_message": "The :attribute value you have entered is invalid."
                }
            },
            pagination: {
                "previous": "&laquo; Previous",
                "next": "Next &raquo;"
            },
            system: {
                'character_remain': 'character(s) remain'
            }
        };
        var RV_MEDIA_URL = {
            'media_upload_from_editor': 'https://resido.thesky9.com/en/account/ajax/upload-from-editor'
        };
    </script>
    <script type="application/ld+json">
        {
            "@context": "https:\/\/schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": []
        }
    </script>


    <link media="all" type="text/css" rel="stylesheet" href="https://resido.thesky9.com/themes/resido/css/style.integration.css?v=1698022316">
    <link type="application/atom+xml" rel="alternate" title="Properties feed" href="https://resido.thesky9.com/en/feed/properties">
    <link type="application/atom+xml" rel="alternate" title="Properties feed" href="https://resido.thesky9.com/vi/feed/properties">
    <link href="https://www.google.com" rel="preconnect">
    <link href="https://www.gstatic.com" rel="preconnect" crossorigin>


    <script>
        window.siteUrl = "https://resido.thesky9.com/en";
    </script>

</head>

<body class="yellow-skin">
    <div id="alert-container"></div>


    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

        <!-- ============================================================== -->
        <!-- Top header  -->

        <div class="topbar bg-brand p-2 d-none d-sm-block">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="currency-wrapper">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">
                                <img src="https://resido.thesky9.com/vendor/core/core/base/images/flags/us.svg" title="English" width="16" alt="English">
                                English
                            </button>
                            <ul class="dropdown-menu language_bar_chooser ">
                                <li>
                                    <a href="https://resido.thesky9.com/vi/account/properties">
                                        <img src="https://resido.thesky9.com/vendor/core/core/base/images/flags/vn.svg" title="Tiếng Việt" width="16" alt="Tiếng Việt">
                                        <span>Tiếng Việt</span>
                                    </a>
                                </li>
                            </ul>
                        </div>


                    </div>

                    <div class="topbar-right d-flex align-items-center">
                        <div class="topbar-wishlist">
                            <a class="text-white" href="https://resido.thesky9.com/en/wishlist"><i class="fas fa-heart"></i> Wishlist(<span class="wishlist-count">0</span>)</a>
                        </div>
                        <div class="ms-3 text-white currency-wrapper">
                            <div class="dropdown">
                                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    USD
                                    <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li>
                                        <a class="dropdown-item" href="https://resido.thesky9.com/en/currency/switch/USD" class="active"><span>USD</span></a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="https://resido.thesky9.com/en/currency/switch/VND"><span>VND</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Start Navigation -->
        <div class="header header-light head-shadow">
            <div class="container">
                <nav id="navigation" class="navigation navigation-landscape">
                    <div class="nav-header">
                        <a class="nav-brand" href="https://resido.thesky9.com/en"><img class="logo" src="https://resido.thesky9.com/storage/general/logo.png" alt=""></a>
                        <div class="nav-toggle"></div>
                    </div>
                    <div class="nav-menus-wrapper" style="transition-property: none;">
                        <ul class="nav-menu">
                            <li class=" menu-item-has-children   ">
                                <a href="https://resido.thesky9.com">
                                    Home
                                </a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li class="  ">
                                        <a href="https://resido.thesky9.com">
                                            Home layout 1
                                        </a>
                                    </li>
                                    <li class="  ">
                                        <a href="https://resido.thesky9.com/home-layout-2">
                                            Home layout 2
                                        </a>
                                    </li>
                                    <li class="  ">
                                        <a href="https://resido.thesky9.com/home-layout-3">
                                            Home layout 3
                                        </a>
                                    </li>
                                    <li class="  ">
                                        <a href="https://resido.thesky9.com/home-layout-4">
                                            Home layout 4
                                        </a>
                                    </li>
                                    <li class="  ">
                                        <a href="https://resido.thesky9.com/home-layout-5">
                                            Home layout 5
                                        </a>
                                    </li>
                                    <li class="  ">
                                        <a href="https://resido.thesky9.com/home-layout-6">
                                            Home layout 6
                                        </a>
                                    </li>
                                    <li class="  ">
                                        <a href="https://resido.thesky9.com/home-layout-7">
                                            Home layout 7
                                        </a>
                                    </li>
                                    <li class="  ">
                                        <a href="https://resido.thesky9.com/home-layout-8">
                                            Home layout 8
                                        </a>
                                    </li>
                                    <li class="  ">
                                        <a href="https://resido.thesky9.com/home-layout-9">
                                            Home layout 9
                                        </a>
                                    </li>
                                    <li class="  ">
                                        <a href="https://resido.thesky9.com/map-home-layout">
                                            Map home layout
                                        </a>
                                    </li>
                                </ul>

                            </li>
                            <li class=" menu-item-has-children   ">
                                <a href="https://resido.thesky9.com/properties">
                                    Listings
                                </a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li class=" menu-item-has-children   ">
                                        <a href="https://resido.thesky9.com/properties?layout=sidebar">
                                            List Layout
                                        </a>
                                        <ul class="nav-dropdown nav-submenu">
                                            <li class="  ">
                                                <a href="https://resido.thesky9.com/properties?layout=sidebar">
                                                    With Sidebar
                                                </a>
                                            </li>
                                            <li class="  ">
                                                <a href="https://resido.thesky9.com/properties?layout=map">
                                                    With Map
                                                </a>
                                            </li>
                                            <li class="  ">
                                                <a href="https://resido.thesky9.com/properties?layout=full">
                                                    Full width
                                                </a>
                                            </li>
                                        </ul>

                                    </li>
                                    <li class=" menu-item-has-children   ">
                                        <a href="https://resido.thesky9.com/properties?layout=grid_sidebar">
                                            Grid Layout
                                        </a>
                                        <ul class="nav-dropdown nav-submenu">
                                            <li class="  ">
                                                <a href="https://resido.thesky9.com/properties?layout=grid_sidebar">
                                                    With Sidebar
                                                </a>
                                            </li>
                                            <li class="  ">
                                                <a href="https://resido.thesky9.com/properties?layout=grid_map">
                                                    With Map
                                                </a>
                                            </li>
                                            <li class="  ">
                                                <a href="https://resido.thesky9.com/properties?layout=grid_full">
                                                    Full width
                                                </a>
                                            </li>
                                        </ul>

                                    </li>
                                    <li class="  ">
                                        <a href="https://resido.thesky9.com/properties?layout=half_map">
                                            Half Map Search
                                        </a>
                                    </li>
                                </ul>

                            </li>
                            <li class="  ">
                                <a href="https://resido.thesky9.com/projects">
                                    Projects
                                </a>
                            </li>
                            <li class=" menu-item-has-children   ">
                                <a href="https://resido.thesky9.com">
                                    Features
                                </a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li class=" menu-item-has-children   ">
                                        <a href="https://resido.thesky9.com">
                                            Single Property
                                        </a>
                                        <ul class="nav-dropdown nav-submenu">
                                            <li class="  ">
                                                <a href="https://resido.thesky9.com/properties/6007-applegate-lane">
                                                    Single Property 1
                                                </a>
                                            </li>
                                            <li class="  ">
                                                <a href="https://resido.thesky9.com/properties/2721-lindsay-avenue">
                                                    Single Property 2
                                                </a>
                                            </li>
                                            <li class="  ">
                                                <a href="https://resido.thesky9.com/properties/2203-7th-street-road">
                                                    Single Property 3
                                                </a>
                                            </li>
                                        </ul>

                                    </li>
                                    <li class=" menu-item-has-children   ">
                                        <a href="https://resido.thesky9.com">
                                            Agents
                                        </a>
                                        <ul class="nav-dropdown nav-submenu">
                                            <li class="  ">
                                                <a href="https://resido.thesky9.com/agents">
                                                    Agents List
                                                </a>
                                            </li>
                                            <li class="  ">
                                                <a href="https://resido.thesky9.com/agents/thesky9">
                                                    Agents Detail Page
                                                </a>
                                            </li>
                                        </ul>

                                    </li>
                                    <li class=" menu-item-has-children   ">
                                        <a href="https://resido.thesky9.com">
                                            My Account
                                        </a>
                                        <ul class="nav-dropdown nav-submenu">
                                            <li class="  ">
                                                <a href="https://resido.thesky9.com/account/dashboard">
                                                    User Dashboard
                                                </a>
                                            </li>
                                            <li class="  ">
                                                <a href="https://resido.thesky9.com/account/properties">
                                                    Properties
                                                </a>
                                            </li>
                                            <li class="  ">
                                                <a href="https://resido.thesky9.com/account/settings">
                                                    My Profile
                                                </a>
                                            </li>
                                            <li class="  ">
                                                <a href="https://resido.thesky9.com/account/packages">
                                                    Packages
                                                </a>
                                            </li>
                                            <li class="  ">
                                                <a href="https://resido.thesky9.com/account/security">
                                                    Change Password
                                                </a>
                                            </li>
                                        </ul>

                                    </li>
                                    <li class="  ">
                                        <a href="https://resido.thesky9.com/account/properties/create">
                                            Submit Property
                                        </a>
                                    </li>
                                </ul>

                            </li>
                            <li class=" menu-item-has-children   ">
                                <a href="https://resido.thesky9.com">
                                    Pages
                                </a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li class="  ">
                                        <a href="https://resido.thesky9.com/news">
                                            Blogs Page
                                        </a>
                                    </li>
                                    <li class="  ">
                                        <a href="https://resido.thesky9.com/news/why-people-choose-listio-for-own-properties">
                                            Blog Detail
                                        </a>
                                    </li>
                                    <li class="  ">
                                        <a href="https://resido.thesky9.com/home#pricing-section">
                                            Pricing
                                        </a>
                                    </li>
                                    <li class="  ">
                                        <a href="https://resido.thesky9.com/error-page">
                                            Error Page
                                        </a>
                                    </li>
                                    <li class="  ">
                                        <a href="https://resido.thesky9.com/contact">
                                            Contact
                                        </a>
                                    </li>
                                </ul>

                            </li>
                            <li class="  ">
                                <a href="https://resido.thesky9.com/register">
                                    Sign Up
                                </a>
                            </li>
                        </ul>


                        <ul class="nav-menu nav-menu-social align-to-right">
                            <li>
                                <a href="https://resido.thesky9.com/en/account/properties/create" class="text-success"><img src="https://resido.thesky9.com/themes/resido/img/submit.svg" width="20" alt="" class="mr-2" /> Add Property</a>
                            </li>
                            <li class="login-item"><a href="https://resido.thesky9.com/en/account/dashboard" rel="nofollow"><i class="fas fa-user"></i> <span>Lonny Swift</span></a></li>
                            <li class="login-item"><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" rel="nofollow"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                        </ul>

                        <form id="logout-form" action="https://resido.thesky9.com/en/account/logout" method="POST" style="display: none;">
                            <input type="hidden" name="_token" value="yUGKN6Oky3yHfTlHMmOb5qFOcFtJUB2Uu5iNAJRH">
                        </form>

                        <div class="clearfix"></div>
                        <div class="d-sm-none mobile-menu">
                            <div class="mobile-menu-item mobile-wishlist">
                                <a href="https://resido.thesky9.com/en/wishlist"><i class="fas fa-heart"></i> Wishlist(<span class="wishlist-count">0</span>)</a>
                            </div>
                            <div class="mobile-menu-item currency-wrapper">
                                <div class="dropdown">
                                    <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLinkMobile" data-bs-toggle="dropdown" aria-expanded="false">
                                        USD
                                        <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLinkMobile">
                                        <li>
                                            <a class="dropdown-item" href="https://resido.thesky9.com/en/currency/switch/USD" class="active"><span>USD</span></a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="https://resido.thesky9.com/en/currency/switch/VND"><span>VND</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mobile-menu-item currency-wrapper">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">
                                        <img src="https://resido.thesky9.com/vendor/core/core/base/images/flags/us.svg" title="English" width="16" alt="English">
                                        English
                                    </button>
                                    <ul class="dropdown-menu language_bar_chooser ">
                                        <li>
                                            <a href="https://resido.thesky9.com/vi/account/properties">
                                                <img src="https://resido.thesky9.com/vendor/core/core/base/images/flags/vn.svg" title="Tiếng Việt" width="16" alt="Tiếng Việt">
                                                <span>Tiếng Việt</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>


                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- End Navigation -->
        <div class="clearfix"></div>


        <section class="bg-light">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="filter_search_opt">
                            <a href="javascript:void(0);" class="open_search_menu">
                                Dashboard Navigation
                                <i class="ml-2 ti-menu"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <div class="simple-sidebar sm-sidebar" id="filter_search">

                            <div class="search-sidebar_header">
                                <h4 class="ssh_heading">Close Filter</h4>
                                <button class="w3-bar-item w3-button w3-large close_search_menu"><i class="ti-close"></i></button>
                            </div>

                            <div class="sidebar-widgets">
                                <div class="dashboard-navbar">
                                    <div class="d-user-avater">
                                        <img src="https://resido.thesky9.com/storage/accounts/1-150x150.jpg" alt="Lonny Swift" class="img-fluid avater" style="width: 150px;">
                                        <h4>Lonny Swift</h4>
                                        <span>+16233952530</span>
                                    </div>

                                    <div class="d-navigation">
                                        <ul>
                                            <li class="">
                                                <a href="https://resido.thesky9.com/en/account/dashboard" title="Profile">
                                                    <i class="ti-dashboard"></i>Dashboard
                                                </a>
                                            </li>

                                            <li class="">
                                                <a href="https://resido.thesky9.com/en/account/settings" title="Settings">
                                                    <i class="fas fa-cogs mr1"></i>Settings
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="https://resido.thesky9.com/en/account/packages" title="credits">
                                                    <i class="far fa-credit-card mr1"></i>Buy credits
                                                    <span class="badge badge-info">9 credits</span>
                                                </a>
                                            </li>


                                            <li class="active">
                                                <a href="https://resido.thesky9.com/en/account/properties" title="Properties">
                                                    <i class="far fa-newspaper mr1"></i>Properties
                                                </a>
                                            </li>

                                            <li class="">
                                                <a href="https://resido.thesky9.com/en/account/properties/create" title="Write a property">
                                                    <i class="far fa-edit mr1"></i>Write a property
                                                </a>
                                            </li>

                                            <li class="">
                                                <a href="https://resido.thesky9.com/en/account/security">
                                                    <i class="ti-unlock"></i>
                                                    Security
                                                </a>
                                            </li>

                                            <li>
                                                <a class="no-underline mr2 black-50 hover-black-70 pv1 ph2 db" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" title="Logout">
                                                    <i class="fas fa-sign-out-alt mr1"></i>
                                                    <span>Logout</span>
                                                </a>
                                                <form id="logout-form" action="https://resido.thesky9.com/en/account/logout" method="POST" style="display: none;">
                                                    <input type="hidden" name="_token" value="yUGKN6Oky3yHfTlHMmOb5qFOcFtJUB2Uu5iNAJRH">
                                                </form>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-9 col-md-12">
                        <div id="app">
                            <div class="dashboard-wraper">
                                <div class="page-content">
                                    <div class="table-wrapper">
                                        <div class="table-configuration-wrap">
                                            <span class="configuration-close-btn btn-show-table-options"><i class="fa fa-times"></i></span>
                                            <div class="wrapper-filter">
                                                <p>Filters</p>

                                                <input class="filter-data-url" type="hidden" value="https://resido.thesky9.com/admin/tables/get-filter-input">

                                                <div class="sample-filter-item-wrap hidden">
                                                    <div class="filter-item form-filter">
                                                        <div class="ui-select-wrapper form-group mb-0">
                                                            <select class="filter-column-key ui-select" wrapper_class="mb-0" name="filter_columns[]">
                                                                <option value="name">Name</option>
                                                                <option value="moderation_status">Moderation status</option>
                                                                <option value="created_at">Created At</option>
                                                            </select>
                                                            <svg class="svg-next-icon svg-next-icon-size-16">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                    <path d="M10 16l-4-4h8l-4 4zm0-12L6 8h8l-4-4z"></path>
                                                                </svg>
                                                            </svg>
                                                        </div>


                                                        <div class="ui-select-wrapper form-group mb-0">
                                                            <select class="filter-operator filter-column-operator ui-select" wrapper_class="mb-0" name="filter_operators[]">
                                                                <option value="like">Contains</option>
                                                                <option value="=">Is equal to</option>
                                                                <option value="&gt;">Greater than</option>
                                                                <option value="&lt;">Less than</option>
                                                            </select>
                                                            <svg class="svg-next-icon svg-next-icon-size-16">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                    <path d="M10 16l-4-4h8l-4 4zm0-12L6 8h8l-4-4z"></path>
                                                                </svg>
                                                            </svg>
                                                        </div>

                                                        <span class="filter-column-value-wrap">
                                                            <input class="form-control filter-column-value" name="filter_values[]" type="text" placeholder="Value">
                                                        </span>
                                                        <span class="btn-remove-filter-item" title="Delete">
                                                            <i class="fa fa-trash text-danger"></i>
                                                        </span>
                                                    </div>
                                                </div>

                                                <form method="GET" action="https://resido.thesky9.com/en/account/properties" accept-charset="UTF-8" class="filter-form">
                                                    <input class="filter-data-table-id" name="filter_table_id" type="hidden" value="botble-real-estate-tables-account-property-table">
                                                    <input class="filter-data-class" name="class" type="hidden" value="Botble\RealEstate\Tables\AccountPropertyTable">
                                                    <div class="filter_list inline-block filter-items-wrap">
                                                        <div class="filter-item form-filter  filter-item-default ">
                                                            <div class="ui-select-wrapper form-group mb-0">
                                                                <select class="filter-column-key ui-select" wrapper_class="mb-0" name="filter_columns[]">
                                                                    <option value="" selected="selected">Select field</option>
                                                                    <option value="name">Name</option>
                                                                    <option value="moderation_status">Moderation status</option>
                                                                    <option value="created_at">Created At</option>
                                                                </select>
                                                                <svg class="svg-next-icon svg-next-icon-size-16">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                        <path d="M10 16l-4-4h8l-4 4zm0-12L6 8h8l-4-4z"></path>
                                                                    </svg>
                                                                </svg>
                                                            </div>


                                                            <div class="ui-select-wrapper form-group mb-0">
                                                                <select class="filter-operator filter-column-operator ui-select" wrapper_class="mb-0" name="filter_operators[]">
                                                                    <option value="like">Contains</option>
                                                                    <option value="=" selected="selected">Is equal to</option>
                                                                    <option value="&gt;">Greater than</option>
                                                                    <option value="&lt;">Less than</option>
                                                                </select>
                                                                <svg class="svg-next-icon svg-next-icon-size-16">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                        <path d="M10 16l-4-4h8l-4 4zm0-12L6 8h8l-4-4z"></path>
                                                                    </svg>
                                                                </svg>
                                                            </div>

                                                            <span class="filter-column-value-wrap">
                                                                <input class="form-control filter-column-value" name="filter_values[]" type="text" value="" placeholder="Value">
                                                            </span>
                                                            <span class="btn-reset-filter-item" title="Reset">
                                                                <i class="fa fa-eraser text-info" style="font-size: 13px;"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div style="margin-top: 10px;">
                                                        <a class="btn btn-secondary add-more-filter" href="javascript:;">Add additional filter</a>
                                                        <a class="btn btn-info  hidden " href="https://resido.thesky9.com/en/account/properties">Reset</a>
                                                        <button class="btn btn-primary btn-apply" type="submit">Apply</button>
                                                    </div>

                                                </form>
                                            </div>

                                        </div>
                                        <div class="portlet light portlet-no-padding">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <div class="wrapper-action">
                                                        <div class="btn-group">
                                                            <a class="btn btn-secondary dropdown-toggle" href="#" data-bs-toggle="dropdown">Bulk Actions
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <div class="dropdown dropdown-hover">
                                                                        <a href="javascript:;">Bulk changes
                                                                            <i class="fa fa-angle-right"></i>
                                                                        </a>
                                                                        <div class="dropdown-content">
                                                                            <a class="bulk-change-item" data-key="name" data-class-item="Botble\RealEstate\Tables\AccountPropertyTable" data-save-url="https://resido.thesky9.com/admin/tables/bulk-change/save" href="#">Name</a>
                                                                            <a class="bulk-change-item" data-key="moderation_status" data-class-item="Botble\RealEstate\Tables\AccountPropertyTable" data-save-url="https://resido.thesky9.com/admin/tables/bulk-change/save" href="#">Moderation status</a>
                                                                            <a class="bulk-change-item" data-key="created_at" data-class-item="Botble\RealEstate\Tables\AccountPropertyTable" data-save-url="https://resido.thesky9.com/admin/tables/bulk-change/save" href="#">Created At</a>
                                                                        </div>
                                                                    </div>

                                                                </li>
                                                                <li>
                                                                    <a data-trigger-bulk-action data-method="DELETE" data-table-target="Botble\RealEstate\Tables\AccountPropertyTable" data-target="Botble\Table\BulkActions\DeleteBulkAction" data-confirmation-modal-title="Confirm to perform this action" data-confirmation-modal-message="Are you sure you want to do this action? This cannot be undone." data-confirmation-modal-button="Delete" data-confirmation-modal-cancel-button="Cancel" href="https://resido.thesky9.com/admin/real-estate/properties/items/destroy">
                                                                        Delete
                                                                    </a>

                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <button class="btn btn-primary btn-show-table-options">Filters</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="table-responsive  table-has-actions   table-has-filter " style="overflow-x: inherit">
                                                    <table class="table table-striped table-hover vertical-middle" id="botble-real-estate-tables-account-property-table">
                                                        <thead>
                                                            <tr>
                                                                <th title="Checkbox" width="20"><input class="table-check-all" data-set=".dataTable .checkboxes" name="" type="checkbox"></th>
                                                                <th title="ID" width="20px" class=" column-key-id">ID</th>
                                                                <th title="Image" width="50px" class="no-sort  column-key-image">Image</th>
                                                                <th title="Name" class="text-start  column-key-name">Name</th>
                                                                <th title="Created At" width="100px" class="text-start  column-key-created_at">Created At</th>
                                                                <th title="Moderation status" width="150px" class=" column-key-moderation_status">Moderation status</th>
                                                                <th title="Expire date" width="150px" class=" column-key-expire_date">Expire date</th>
                                                                <th title="Languages" class="text-center language-header no-sort" width="80px"><img src="https://resido.thesky9.com/vendor/core/core/base/images/flags/us.svg" title="English" width="16" alt="English"><img src="https://resido.thesky9.com/vendor/core/core/base/images/flags/vn.svg" title="Tiếng Việt" width="16" alt="Tiếng Việt"></th>
                                                                <th title="Operations" width="134">Operations</th>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade modal-confirm-delete" role="dialog" tabindex="-1">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger">
                                            <h4 class="modal-title"><i class="til_img"></i><strong>Confirm delete</strong></h4>
                                            <button class="btn-close" data-bs-dismiss="modal" type="button" aria-hidden="true"></button>
                                        </div>

                                        <div class="modal-body with-padding" data-select2-dropdown-parent>
                                            <div>Do you really want to delete this record?</div>
                                        </div>

                                        <div class="modal-footer">
                                            <button class="float-start btn btn-warning" data-bs-dismiss="modal" type="button">Cancel</button>
                                            <button class="float-end btn btn-danger delete-crud-entry">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end Modal -->

                            <div class="modal fade delete-many-modal" role="dialog" tabindex="-1">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger">
                                            <h4 class="modal-title"><i class="til_img"></i><strong>Confirm delete</strong></h4>
                                            <button class="btn-close" data-bs-dismiss="modal" type="button" aria-hidden="true"></button>
                                        </div>

                                        <div class="modal-body with-padding" data-select2-dropdown-parent>
                                            <div>Do you really want to delete selected record(s)?</div>
                                        </div>

                                        <div class="modal-footer">
                                            <button class="float-start btn btn-warning" data-bs-dismiss="modal" type="button">Cancel</button>
                                            <button class="float-end btn btn-danger delete-many-entry-button">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end Modal -->

                            <div class="modal fade modal-bulk-change-items" role="dialog" tabindex="-1">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header bg-info">
                                            <h4 class="modal-title"><i class="til_img"></i><strong>Bulk changes</strong></h4>
                                            <button class="btn-close" data-bs-dismiss="modal" type="button" aria-hidden="true"></button>
                                        </div>

                                        <div class="modal-body with-padding" data-select2-dropdown-parent>
                                            <div>
                                                <div class="modal-bulk-change-content"></div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button class="float-start btn btn-warning" data-bs-dismiss="modal" type="button">Cancel</button>
                                            <button class="float-end btn btn-info confirm-bulk-change-button" data-load-url="https://resido.thesky9.com/admin/tables/bulk-change/data">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end Modal -->

                            <div class="modal fade bulk-action-confirm-modal" role="dialog" tabindex="-1">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger">
                                            <h4 class="modal-title"><i class="til_img"></i><strong></strong></h4>
                                            <button class="btn-close" data-bs-dismiss="modal" type="button" aria-hidden="true"></button>
                                        </div>

                                        <div class="modal-body with-padding" data-select2-dropdown-parent>
                                            <div></div>
                                        </div>

                                        <div class="modal-footer">
                                            <button class="float-start btn btn-warning" data-bs-dismiss="modal" type="button">Cancel</button>
                                            <button class="float-end btn btn-danger confirm-trigger-bulk-actions-button"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end Modal -->

                            <div class="modal fade single-action-confirm-modal" role="dialog" tabindex="-1">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger">
                                            <h4 class="modal-title"><i class="til_img"></i><strong></strong></h4>
                                            <button class="btn-close" data-bs-dismiss="modal" type="button" aria-hidden="true"></button>
                                        </div>

                                        <div class="modal-body with-padding" data-select2-dropdown-parent>
                                            <div></div>
                                        </div>

                                        <div class="modal-footer">
                                            <button class="float-start btn btn-warning" data-bs-dismiss="modal" type="button">Cancel</button>
                                            <button class="float-end btn btn-danger confirm-trigger-single-action-button"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end Modal -->
                            <div class="modal fade modal-confirm-renew" role="dialog" tabindex="-1">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header bg-info">
                                            <h4 class="modal-title"><i class="til_img"></i><strong>Renew confirmation</strong></h4>
                                            <button class="btn-close" data-bs-dismiss="modal" type="button" aria-hidden="true"></button>
                                        </div>

                                        <div class="modal-body with-padding" data-select2-dropdown-parent>
                                            <div>Are you sure you want to renew this property, it will takes 1 credit from your credits</div>
                                        </div>

                                        <div class="modal-footer">
                                            <button class="float-start btn btn-warning" data-bs-dismiss="modal" type="button">Cancel</button>
                                            <button class="float-end btn btn-info button-confirm-renew">Yes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end Modal -->



                        </div>
                    </div>

                </div>
            </div>
        </section>





        <div class="widget_shortcode">

            <div class="raw-html-embed">
                <section class="theme-bg call-to-act-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="call-to-act">
                                    <div class="call-to-act-head">
                                        <h3>Want to Become a Real Estate Agent?</h3>
                                        <span>We'll help you to grow your career and growth.</span>
                                    </div>
                                    <a href="/register" class="btn btn-call-to-act">Sign Up Today</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>

        <!-- ============================ Footer Start ================================== -->
        <footer class="dark-footer skin-dark-footer">
            <div class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <div class="footer-widget">
                                <img src="https://resido.thesky9.com/storage/general/logo-light.png" class="img-footer" style="max-height: 38px" alt="">
                                <div class="footer-add">
                                    <p><i class="fas fa-map-marker-alt"></i> Collins Street West, Victoria 8007, Australia.</p>
                                    <p><i class="fas fa-phone-square"></i> +1 246-345-0695</p>
                                    <p><i class="fas fa-envelope"></i> info@example.com</p>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="footer-widget">
                                        <h4 class="widget-title">About</h4>
                                        <ul>
                                            <li>
                                                <a href="https://resido.thesky9.com/about-us" title="About us">
                                                    <span>About us</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://resido.thesky9.com/contact" title="Contact us">
                                                    <span>Contact us</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://resido.thesky9.com/terms-conditions" title="Terms &amp; Conditions">
                                                    <span>Terms &amp; Conditions</span>
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="footer-widget">
                                        <h4 class="widget-title">MORE INFORMATION</h4>
                                        <ul>
                                            <li>
                                                <a href="https://resido.thesky9.com/properties" title="All properties">
                                                    <span>All properties</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://resido.thesky9.com/properties?type=sale" title="Houses for sale">
                                                    <span>Houses for sale</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://resido.thesky9.com/properties?type=rent" title="Houses for rent">
                                                    <span>Houses for rent</span>
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="footer-widget">
                                        <h4 class="widget-title">NEWS</h4>
                                        <ul>
                                            <li>
                                                <a href="https://resido.thesky9.com/news" title="Latest news">
                                                    <span>Latest news</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://resido.thesky9.com/house-architecture" title="House architecture">
                                                    <span>House architecture</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://resido.thesky9.com/house-design" title="House design">
                                                    <span>House design</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://resido.thesky9.com/building-materials" title="Building materials">
                                                    <span>Building materials</span>
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="widget_shortcode">

                                <div class="raw-html-embed">
                                    <div class="footer-widget">
                                        <h4 class="widget-title">Download Apps</h4>
                                        <a href="#" class="other-store-link">
                                        </a>
                                        <div class="other-store-app"><a href="#" class="other-store-link">
                                            </a>
                                            <div class="os-app-icon"><a href="#" class="other-store-link">
                                                    <i class="lni-playstore theme-cl"></i>
                                                </a></div><a href="#" class="other-store-link">
                                            </a>
                                            <div class="os-app-caps"><a href="#" class="other-store-link">
                                                    Google Play
                                                    <span>Get It Now</span>
                                                </a></div><a href="#" class="other-store-link">
                                            </a>
                                        </div><a href="#" class="other-store-link">
                                        </a>
                                        <a href="#" class="other-store-link">
                                        </a>
                                        <div class="other-store-app"><a href="#" class="other-store-link">
                                            </a>
                                            <div class="os-app-icon"><a href="#" class="other-store-link">
                                                    <i class="lni-apple theme-cl"></i>
                                                </a></div><a href="#" class="other-store-link">
                                            </a>
                                            <div class="os-app-caps"><a href="#" class="other-store-link">
                                                    App Store
                                                    <span>Now it Available</span>
                                                </a></div><a href="#" class="other-store-link">
                                            </a>
                                        </div><a href="#" class="other-store-link">
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="footer-widget newsletter widget_newsletter">
                                <div class="header-title-2">
                                    <h4 class="widget-title">
                                        <span>Subscribe</span>
                                    </h4>
                                </div>
                                <form class="form-subcriber newsletter-form mt-30" action="https://resido.thesky9.com/en/newsletter/subscribe" method="post">
                                    <input type="hidden" name="_token" value="yUGKN6Oky3yHfTlHMmOb5qFOcFtJUB2Uu5iNAJRH">
                                    <div class="form-group d-flex">
                                        <input type="email" name="email" class="form-control bg-white font-small" placeholder="Enter your email">
                                        <button class="btn bg-dark text-white" type="submit">Subscribe</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <p class="mb-0">©2023 Resido. All rights reserved by HoodVision</p>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <ul class="footer-bottom-social">
                                <li><a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="ti-facebook"></i></a></li>
                                <li><a href="https://www.twitter.com/" target="_blank" title="Twitter"><i class="ti-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/" target="_blank" title="Instagram"><i class="ti-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/" target="_blank" title="Linkedin"><i class="ti-linkedin"></i></a></li>
                                <li><a href="https://www.pinterest.com/" target="_blank" title="Pinterest"><i class="ti-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ============================ Footer End ================================== -->

        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
    </div>

    <script src="https://resido.thesky9.com/themes/resido/plugins/bootstrap/popper.min.js"></script>
    <script src="https://resido.thesky9.com/themes/resido/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="https://resido.thesky9.com/themes/resido/plugins/rangeslider.js"></script>
    <script src="https://resido.thesky9.com/themes/resido/plugins/select2.min.js"></script>
    <script src="https://resido.thesky9.com/themes/resido/plugins/jquery.magnific-popup.min.js"></script>
    <script src="https://resido.thesky9.com/themes/resido/plugins/slick.js"></script>
    <script src="https://resido.thesky9.com/themes/resido/plugins/slider-bg.js"></script>
    <script src="https://resido.thesky9.com/themes/resido/plugins/lightbox.js"></script>
    <script src="https://resido.thesky9.com/themes/resido/plugins/imagesloaded.js"></script>
    <script src="https://resido.thesky9.com/themes/resido/plugins/lazyload.min.js"></script>
    <script src="https://resido.thesky9.com/themes/resido/js/wishlist.js?v=2.22.0"></script>
    <script src="https://resido.thesky9.com/themes/resido/js/app.js?v=2.22.0"></script>
    <script src="https://resido.thesky9.com/vendor/core/core/media/libraries/lodash/lodash.min.js"></script>
    <script>
        'use strict';
        $(document).ready(function() {
            $('#preloader').remove();
        })
    </script>
    <script src="https://resido.thesky9.com/vendor/core/core/base/libraries/select2/js/select2.min.js?v=2.22.0"></script>
    <script src="https://resido.thesky9.com/vendor/core/core/base/libraries/bootstrap-datepicker/js/bootstrap-datepicker.min.js?v=2.22.0"></script>
    <script src="https://resido.thesky9.com/vendor/core/core/base/js/core.js?v=2.22.0"></script>
    <script src="https://resido.thesky9.com/vendor/core/core/base/libraries/toastr/toastr.min.js?v=2.22.0"></script>
    <script src="https://resido.thesky9.com/vendor/core/core/base/libraries/mcustom-scrollbar/jquery.mCustomScrollbar.js?v=2.22.0"></script>
    <script src="https://resido.thesky9.com/vendor/core/core/base/libraries/stickytableheaders/jquery.stickytableheaders.js?v=2.22.0"></script>
    <script src="https://resido.thesky9.com/vendor/core/core/base/libraries/fancybox/jquery.fancybox.min.js?v=2.22.0"></script>
    <script src="https://resido.thesky9.com/vendor/core/core/base/libraries/datatables/media/js/jquery.dataTables.min.js?v=2.22.0"></script>
    <script src="https://resido.thesky9.com/vendor/core/core/base/libraries/datatables/media/js/dataTables.bootstrap.min.js?v=2.22.0"></script>
    <script src="https://resido.thesky9.com/vendor/core/core/base/libraries/datatables/extensions/Buttons/js/dataTables.buttons.min.js?v=2.22.0"></script>
    <script src="https://resido.thesky9.com/vendor/core/core/base/libraries/datatables/extensions/Buttons/js/buttons.bootstrap.min.js?v=2.22.0"></script>
    <script src="https://resido.thesky9.com/vendor/core/core/base/libraries/datatables/extensions/Responsive/js/dataTables.responsive.min.js?v=2.22.0"></script>
    <script src="https://resido.thesky9.com/vendor/core/core/base/libraries/moment-with-locales.min.js?v=2.22.0"></script>
    <script src="https://resido.thesky9.com/vendor/core/plugins/language/js/language-global.js?v=2.22.0"></script>
    <script src="https://resido.thesky9.com/vendor/core/core/base/libraries/bootstrap3-typeahead.min.js?v=2.22.0"></script>
    <script src="https://resido.thesky9.com/vendor/core/core/table/js/table.js?v=2.22.0"></script>
    <script src="https://resido.thesky9.com/vendor/core/core/table/js/filter.js?v=2.22.0"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(function() {
                window.LaravelDataTables = window.LaravelDataTables || {};
                window.LaravelDataTables["botble-real-estate-tables-account-property-table"] = $("#botble-real-estate-tables-account-property-table").DataTable({
                    "serverSide": true,
                    "processing": true,
                    "ajax": {
                        "url": "https:\/\/resido.thesky9.com\/en\/account\/properties?",
                        "method": "POST"
                    },
                    "columns": [{
                        "data": "checkbox",
                        "name": "checkbox",
                        "title": "<input class=\"table-check-all\" data-set=\".dataTable .checkboxes\" name=\"\" type=\"checkbox\">",
                        "orderable": false,
                        "searchable": false,
                        "defaultContent": "",
                        "width": 20,
                        "className": "text-start no-column-visibility",
                        "titleAttr": "Checkbox"
                    }, {
                        "title": "ID",
                        "width": "20px",
                        "class": " column-key-id",
                        "className": " column-key-id",
                        "name": "id",
                        "data": "id",
                        "orderable": true,
                        "searchable": true
                    }, {
                        "title": "Image",
                        "width": "50px",
                        "class": "no-sort  column-key-image",
                        "orderable": false,
                        "searchable": false,
                        "className": "no-sort  column-key-image",
                        "name": "image",
                        "data": "image"
                    }, {
                        "title": "Name",
                        "class": "text-start  column-key-name",
                        "className": "text-start  column-key-name",
                        "name": "name",
                        "data": "name",
                        "orderable": true,
                        "searchable": true
                    }, {
                        "title": "Created At",
                        "width": "100px",
                        "class": "text-start  column-key-created_at",
                        "className": "text-start  column-key-created_at",
                        "name": "created_at",
                        "data": "created_at",
                        "orderable": true,
                        "searchable": true
                    }, {
                        "title": "Moderation status",
                        "width": "150px",
                        "class": " column-key-moderation_status",
                        "className": " column-key-moderation_status",
                        "name": "moderation_status",
                        "data": "moderation_status",
                        "orderable": true,
                        "searchable": true
                    }, {
                        "name": "expire_date",
                        "title": "Expire date",
                        "width": "150px",
                        "class": " column-key-expire_date",
                        "className": " column-key-expire_date",
                        "data": "expire_date",
                        "orderable": true,
                        "searchable": true
                    }, {
                        "name": "language_meta.lang_meta_id",
                        "title": "<img src=\"https:\/\/resido.thesky9.com\/vendor\/core\/core\/base\/images\/flags\/us.svg\" title=\"English\" width=\"16\" alt=\"English\"><img src=\"https:\/\/resido.thesky9.com\/vendor\/core\/core\/base\/images\/flags\/vn.svg\" title=\"Ti\u1ebfng Vi\u1ec7t\" width=\"16\" alt=\"Ti\u1ebfng Vi\u1ec7t\">",
                        "class": "text-center language-header no-sort",
                        "width": "80px",
                        "orderable": false,
                        "searchable": false,
                        "titleAttr": "Languages",
                        "data": "language"
                    }, {
                        "data": "operations",
                        "name": "operations",
                        "title": "Operations",
                        "orderable": false,
                        "searchable": false,
                        "width": 134,
                        "className": "text-center",
                        "responsivePriority": 99
                    }],
                    "dom": "fBrt<'datatables__info_wrap'pli<'clearfix'>>",
                    "buttons": {
                        "stateSave": true,
                        "buttons": [{
                            "className": "action-item btn-primary",
                            "text": "<span data-action=\"create\" data-href=\"https:\/\/resido.thesky9.com\/en\/account\/properties\/create\"><i class=\"fa fa-plus\"><\/i> Create\n<\/span>"
                        }, "reload"]
                    },
                    "initComplete": function() {
                        Botble.initResources();

                        document.dispatchEvent(new CustomEvent("core-table-init-completed", {
                            detail: {
                                table: this
                            }
                        }));
                    },
                    "drawCallback": function() {
                        var $tableWrapper = $(this).closest(".dataTables_wrapper");
                        var dtDataCount = this.api().data().count();

                        $tableWrapper.find(".dataTables_paginate").toggle(this.api().page.info().pages > 1);

                        $tableWrapper.find(".dataTables_length").toggle(dtDataCount >= 10);
                        $tableWrapper.find(".dataTables_info").toggle(dtDataCount > 0);

                        Botble.initResources();

                        document.dispatchEvent(new CustomEvent("core-table-init-completed", {
                            detail: {
                                table: this
                            }
                        }));
                    },
                    "paging": true,
                    "searching": true,
                    "info": true,
                    "searchDelay": 350,
                    "bStateSave": true,
                    "lengthMenu": [
                        [10, 30, 50, 100, 500, -1],
                        [10, 30, 50, 100, 500, "All"]
                    ],
                    "pageLength": 10,
                    "bServerSide": true,
                    "bDeferRender": true,
                    "bProcessing": true,
                    "language": {
                        "aria": {
                            "sortAscending": "orderby asc",
                            "sortDescending": "orderby desc",
                            "paginate": {
                                "next": "Next &raquo;",
                                "previous": "&laquo; Previous"
                            }
                        },
                        "emptyTable": "No data to display",
                        "info": "<span class=\"dt-length-records\">\n    <i class=\"fa fa-globe\"><\/i> <span class=\"d-none d-sm-inline\">Show from<\/span> _START_\n    to _END_ in <span\n        class=\"badge bg-secondary bold badge-dt\"\n    >_TOTAL_<\/span> <span class=\"hidden-xs\">records<\/span>\n<\/span>\n",
                        "infoEmpty": "No record",
                        "lengthMenu": "<span class=\"dt-length-style\">_MENU_<\/span>",
                        "search": "",
                        "searchPlaceholder": "Search...",
                        "zeroRecords": "No record",
                        "processing": {},
                        "paginate": {
                            "next": "Next &raquo;",
                            "previous": "&laquo; Previous"
                        },
                        "infoFiltered": "(filtered from _MAX_ total records)"
                    },
                    "aaSorting": [
                        [1, "desc"]
                    ],
                    "responsive": true,
                    "autoWidth": false
                });
            });
        });
    </script>

    <script src="https://resido.thesky9.com/vendor/core/plugins/language/js/language-public.js?v=2.2.0"></script>







</body>

</html>