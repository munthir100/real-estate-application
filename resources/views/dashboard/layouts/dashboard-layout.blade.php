<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport" />

    <meta name="csrf-token" content="InV2ZDupHLTSQJ9Uf1yLl0zehFDUvw2Rkq9Dpax2">

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


    <title>Write a property</title>
    <meta name="description" content="Resido is a premium real estate related websites build on Laravel. With an advanced admin dashboard that will help you create a local or global real-estate directory site.">
    <meta property="og:site_name" content="Cicica Nekretnine">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Write a property">
    <meta property="og:image" content="/storage/general/screenshot.png">
    <meta name="twitter:title" content="Write a property">

    <link href="/storage/general/favicon.png" rel="shortcut icon">





    <link media="all" type="text/css" rel="stylesheet" href="/vendor/core/plugins/language/css/language-public.css?v=2.2.0">
    <link media="all" type="text/css" rel="stylesheet" href="/themes/resido/plugins/animation.css">
    <link media="all" type="text/css" rel="stylesheet" href="/themes/resido/plugins/bootstrap/bootstrap.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="/themes/resido/plugins/ion.rangeSlider.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="/themes/resido/plugins/dropzone.css">
    <link media="all" type="text/css" rel="stylesheet" href="/themes/resido/plugins/select2.css">
    <link media="all" type="text/css" rel="stylesheet" href="/themes/resido/plugins/slick.css">
    <link media="all" type="text/css" rel="stylesheet" href="/themes/resido/plugins/slick-theme.css">
    <link media="all" type="text/css" rel="stylesheet" href="/themes/resido/plugins/fontawesome/css/fontawesome.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="/themes/resido/plugins/icofont.css">
    <link media="all" type="text/css" rel="stylesheet" href="/themes/resido/plugins/light-box.css">
    <link media="all" type="text/css" rel="stylesheet" href="/themes/resido/plugins/line-icon.css">
    <link media="all" type="text/css" rel="stylesheet" href="/themes/resido/plugins/themify.css">
    <link media="all" type="text/css" rel="stylesheet" href="/themes/resido/css/style.css?v=2.22.0">
    <link media="all" type="text/css" rel="stylesheet" href="/vendor/core/plugins/real-estate/css/app_custom.css">


    <script src="/themes/resido/plugins/jquery.min.js"></script>
    <script src="/themes/resido/plugins/vue.global.min.js?v=2.22.0"></script>
    <script src="/vendor/core/core/base/js/vue-app.js"></script>
    <!-- Put translation key to translate in VueJS -->


    <link media="all" type="text/css" rel="stylesheet" href="/themes/resido/css/style.integration.css?v=1698022316">
    <link type="application/atom+xml" rel="alternate" title="Properties feed" href="/en/feed/properties">
    <link type="application/atom+xml" rel="alternate" title="Properties feed" href="/vi/feed/properties">
    <link href="https://www.google.com" rel="preconnect">
    <link href="https://www.gstatic.com" rel="preconnect" crossorigin>



</head>

<body class="yellow-skin">
    <div id="alert-container"></div>


    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

        <!-- ============================================================== -->
        <!-- Top header  -->

        @include('layouts.top-header')
        <!-- ============================================================== -->
        <!-- Start Navigation -->
        @include('layouts.navigation')
        <!-- End Navigation -->
        <div class="clearfix"></div>









        @yield('content')











        <!-- ============================ Footer Start ================================== -->
        @include('layouts.footer')
        <!-- ============================ Footer End ================================== -->

        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
    </div>

    <script src="/themes/resido/plugins/bootstrap/popper.min.js"></script>
    <script src="/themes/resido/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="/themes/resido/plugins/rangeslider.js"></script>
    <script src="/themes/resido/plugins/select2.min.js"></script>
    <script src="/themes/resido/plugins/jquery.magnific-popup.min.js"></script>
    <script src="/themes/resido/plugins/slick.js"></script>
    <script src="/themes/resido/plugins/slider-bg.js"></script>
    <script src="/themes/resido/plugins/lightbox.js"></script>
    <script src="/themes/resido/plugins/imagesloaded.js"></script>
    <script src="/themes/resido/plugins/lazyload.min.js"></script>
    <script src="/themes/resido/js/wishlist.js?v=2.22.0"></script>
    <script src="/themes/resido/js/app.js?v=2.22.0"></script>
    <script src="/vendor/core/core/media/libraries/lodash/lodash.min.js"></script>
    <script>
        'use strict';
        $(document).ready(function() {
            $('#preloader').remove();
        })
    </script>
    <script src="/vendor/core/core/base/libraries/select2/js/select2.min.js?v=2.22.0"></script>
    <script src="/vendor/core/core/base/libraries/bootstrap-datepicker/js/bootstrap-datepicker.min.js?v=2.22.0"></script>
    <script src="/vendor/core/core/base/js/core.js?v=2.22.0"></script>
    <script src="/vendor/core/core/base/libraries/toastr/toastr.min.js?v=2.22.0"></script>
    <script src="/vendor/core/core/base/libraries/mcustom-scrollbar/jquery.mCustomScrollbar.js?v=2.22.0"></script>
    <script src="/vendor/core/core/base/libraries/stickytableheaders/jquery.stickytableheaders.js?v=2.22.0"></script>
    <script src="/vendor/core/core/base/libraries/fancybox/jquery.fancybox.min.js?v=2.22.0"></script>
    <script src="/vendor/core/core/base/libraries/jquery-inputmask/jquery.inputmask.bundle.min.js?v=2.22.0"></script>
    <script src="/vendor/core/core/base/libraries/jquery-ui/jquery-ui.min.js?v=2.22.0"></script>
    <script src="/vendor/core/core/js-validation/js/js-validation.js?v=2.22.0"></script>
    <script src="/vendor/core/core/base/libraries/jquery.are-you-sure/jquery.are-you-sure.js?v=2.22.0"></script>
    <script src="/vendor/core/plugins/language/js/language-global.js?v=2.22.0"></script>
    <script src="/vendor/core/plugins/real-estate/js/real-estate.js?v=2.22.0"></script>
    <script src="/vendor/core/plugins/real-estate/js/components.js?v=2.22.0"></script>
    <script src="/vendor/core/core/base/libraries/tinymce/tinymce.min.js?v=2.22.0"></script>
    <script src="/vendor/core/core/media/libraries/dropzone/dropzone.js?v=2.22.0"></script>
    <script src="/vendor/core/packages/slug/js/slug.js?v=2.22.0"></script>
    <script src="/vendor/core/core/base/libraries/ckeditor/ckeditor.js?v=2.22.0"></script>
    <script src="/vendor/core/core/base/js/editor.js?v=2.22.0"></script>
    <script src="/vendor/core/packages/seo-helper/js/seo-helper.js?v=2.22.0"></script>

    <style>
        .dropzone {
            border-radius: 5px;
            border: 1px dashed rgb(0, 135, 247);
        }

        .dropzone .dz-preview:not(.dz-processing) .dz-progress {
            display: none;
        }

        .dropzone .dz-message {
            margin: 50px 0;
        }
    </style>
    <script>
        'use strict';
        Dropzone.autoDiscover = false;

        $(document).ready(function() {
            var uploadedImages = [];

            var dropzone = new Dropzone('#multiple-upload', {
                previewTemplate: document.querySelector('#preview-template').innerHTML,
                parallelUploads: 1,
                thumbnailHeight: 120,
                thumbnailWidth: 120,
                addRemoveLinks: true,
                filesizeBase: 1000,
                uploadMultiple: true,
                chunking: false,
                forceChunking: true, // forces chunking when file.size < chunkSize
                parallelChunkUploads: false, // allows chunks to be uploaded in parallel (this is independent of the parallelUploads option)
                chunkSize: 1048576, // chunk size 1,000,000 bytes (~1MB)
                retryChunks: true, // retry chunks on failure
                retryChunksLimit: 3, // retry maximum of 3 times (default is 3)
                timeout: 0, // MB,
                maxFilesize: 2, // MB
                maxFiles: null, // max files upload,
                paramName: 'file',
                acceptedFiles: 'image/*',
                url: '/en/account/ajax/upload',
                sending: function(file, xhr, formData) {
                    formData.append('_token', 'InV2ZDupHLTSQJ9Uf1yLl0zehFDUvw2Rkq9Dpax2');
                },
                thumbnail: function(file, dataUrl) {
                    if (file.previewElement) {
                        file.previewElement.classList.remove('dz-file-preview');
                        var images = file.previewElement.querySelectorAll('[data-dz-thumbnail]');
                        for (var i = 0; i < images.length; i++) {
                            var thumbnailElement = images[i];
                            thumbnailElement.alt = file.name;
                            thumbnailElement.src = dataUrl;
                        }
                        setTimeout(function() {
                            file.previewElement.classList.add('dz-image-preview');
                        }, 1);
                    }
                },
                success: function(file, response) {
                    if (response.error) {
                        Botble.showError(response.message);
                    } else {
                        if (false) {
                            response = JSON.parse(file.xhr.response);
                        }
                        uploadedImages.push(response.data.url);
                        $('input[name=images]').val(JSON.stringify(uploadedImages));
                    }
                },
                removedfile: function(file) {
                    var x = confirm('Do you want to delete this image?');
                    if (!x) {
                        return false;
                    }
                    var i = $(file.previewElement).index() - 1;
                    dropzone.options.maxFiles = dropzone.options.maxFiles + 1;
                    uploadedImages.splice(i, 1);
                    $('input[name=images]').val(JSON.stringify(uploadedImages));
                    $('.dz-message.needsclick').hide();
                    if (uploadedImages.length === 0) {
                        $('.dz-message.needsclick').show();
                    }

                    var _ref;
                    return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
                }
            });

            var files = [];

            $.each(files, function(key, file) {
                dropzone.options.addedfile.call(dropzone, file);
                dropzone.options.thumbnail.call(dropzone, file, file.full_url);
            });
        });
    </script>
    <link media="all" type="text/css" rel="stylesheet" href="/vendor/core/core/base/libraries/font-awesome/css/fontawesome.min.css?v=2.22.0">
    <link media="all" type="text/css" rel="stylesheet" href="/vendor/core/core/base/libraries/select2/css/select2.min.css?v=2.22.0">
    <link media="all" type="text/css" rel="stylesheet" href="/vendor/core/core/base/libraries/select2/css/select2-bootstrap.min.css?v=2.22.0">
    <link media="all" type="text/css" rel="stylesheet" href="/vendor/core/core/base/libraries/toastr/toastr.min.css?v=2.22.0">
    <link media="all" type="text/css" rel="stylesheet" href="/vendor/core/core/base/libraries/mcustom-scrollbar/jquery.mCustomScrollbar.css?v=2.22.0">
    <link media="all" type="text/css" rel="stylesheet" href="/vendor/core/core/base/libraries/bootstrap-datepicker/css/bootstrap-datepicker3.min.css?v=2.22.0">
    <link media="all" type="text/css" rel="stylesheet" href="/vendor/core/core/base/css/core.css?v=2.22.0">
    <link media="all" type="text/css" rel="stylesheet" href="/vendor/core/plugins/language/css/language.css?v=2.22.0">
    <link media="all" type="text/css" rel="stylesheet" href="/vendor/core/plugins/real-estate/css/real-estate.css?v=2.22.0">
    <link media="all" type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css?v=2.22.0">

    <script src="/vendor/core/core/base/libraries/bootstrap.bundle.min.js?v=2.22.0"></script>

    <link media="all" type="text/css" rel="stylesheet" href="/vendor/core/core/base/css/themes/default.css">
    <script src="/vendor/core/plugins/real-estate/js/form.js"></script>
    <link href="/vendor/core/plugins/real-estate/css/app_custom.css" rel="stylesheet">
    <script>
        jQuery(document).ready(function() {
            'use strict';
            $("#botble-real-estate-forms-account-property-form").each(function() {
                $(this).validate({
                    errorElement: 'span',
                    errorClass: 'invalid-feedback',

                    errorPlacement: function(error, element) {
                        if (element.parent('.input-group').length ||
                            element.prop('type') === 'checkbox' || element.prop('type') ===
                            'radio') {
                            error.insertAfter(element.parent());
                        } else {
                            error.insertAfter(element);
                        }
                    },
                    highlight: function(element) {
                        $(element).closest('.form-control').removeClass('is-valid').addClass(
                            'is-invalid');
                    },



                    unhighlight: function(element) {
                        $(element).closest('.form-control').removeClass('is-invalid').addClass(
                            'is-valid');
                    },

                    success: function(element) {
                        $(element).closest('.form-control').removeClass('is-invalid').addClass(
                            'is-valid');
                    },

                    focusInvalid: false,

                    rules: {
                        "name": {
                            "laravelValidation": [
                                ["Required", [], "The name field is required.", true]
                            ]
                        },
                        "description": {
                            "laravelValidation": [
                                ["Max", ["350"], "The description must not be greater than 350 characters.", false]
                            ]
                        },
                        "content": {
                            "laravelValidation": [
                                ["Required", [], "The content field is required.", true]
                            ]
                        },
                        "number_bedroom": {
                            "laravelValidation": [
                                ["Numeric", [], "The number bedroom must be a number.", false],
                                ["Min", ["0"], "The number bedroom must be at least 0.", false],
                                ["Max", ["10000"], "The number bedroom must not be greater than 10000.", false],
                                ["Nullable", [], "validation.nullable", false]
                            ]
                        },
                        "number_bathroom": {
                            "laravelValidation": [
                                ["Numeric", [], "The number bathroom must be a number.", false],
                                ["Min", ["0"], "The number bathroom must be at least 0.", false],
                                ["Max", ["10000"], "The number bathroom must not be greater than 10000.", false],
                                ["Nullable", [], "validation.nullable", false]
                            ]
                        },
                        "number_floor": {
                            "laravelValidation": [
                                ["Numeric", [], "The number floor must be a number.", false],
                                ["Min", ["0"], "The number floor must be at least 0.", false],
                                ["Max", ["10000"], "The number floor must not be greater than 10000.", false],
                                ["Nullable", [], "validation.nullable", false]
                            ]
                        },
                        "price": {
                            "laravelValidation": [
                                ["Numeric", [], "The price must be a number.", false],
                                ["Min", ["0"], "The price must be at least 0.", false],
                                ["Nullable", [], "validation.nullable", false]
                            ]
                        }
                    }
                });
            });
        });
    </script>

    <script src="/vendor/core/plugins/language/js/language-public.js?v=2.2.0"></script>







</body>

</html>