<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic
Product Version: 8.1.8
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    <base href="" />
    <title>Metronic - The World's #1 Selling Bootstrap Admin Template by Keenthemes</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.11.3/viewer.min.css" rel="stylesheet" type="text/css" />

    <style>
    @-webkit-keyframes scroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(calc(-250px * 7));
        }
    }

    @keyframes scroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(calc(-250px * 7));
        }
    }

    .sliderX {
        align-items: center;

        display: flex;
        justify-content: center;
        background: white;
        box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.125);
        height: auto;
        margin: auto;
        overflow: hidden;
        position: relative;
        width: 960px;
    }

    .sliderX::before,
    .sliderX::after {
        background: linear-gradient(to right, white 0%, rgba(255, 255, 255, 0) 100%);
        content: "";
        height: 100px;
        position: relative;
        width: 200px;
        z-index: 2;
    }

    .sliderX::after {
        right: 0;
        top: 0;
        transform: rotateZ(180deg);
    }

    .sliderX::before {
        left: 0;
        top: 0;
    }

    .sliderX .slide-track {
        -webkit-animation: scroll 40s linear infinite;
        animation: scroll 40s linear infinite;
        display: flex;
        width: calc(250px * 14);
    }

    .sliderX .slide {
        margin: 20px;
        height: 150px;
        width: auto;
    }






	.swal2-container {
		z-index: 100000;
	}
    </style>
    <!--end::Global Stylesheets Bundle-->
    <script>
    // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true"
    data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
    <!--begin::Theme mode setup on page load-->

    <!--end::Theme mode setup on page load-->
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <?php include_once 'header.php'; ?>
            <!--begin::Wrapper-->
            <div class="app-wrapper d-flex" id="kt_app_wrapper">
                <!--begin::Wrapper container-->
                <div class="app-container container-fluid">
                    <!--begin::Sidebar-->
                    <?php include_once 'slide.php'; ?>
                    <!--end::Sidebar-->
                    <!--begin::Main-->
                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        <!--begin::Content wrapper-->
                        <div class="d-flex flex-column flex-column-fluid">
                            <!--begin::Toolbar-->
                            <div id="kt_app_toolbar" class="app-toolbar">
                                <!--begin::Toolbar container-->
                                <div class="d-flex flex-stack flex-row-fluid">
                                    <!--begin::Toolbar container-->
                                    <div class="d-flex flex-column flex-row-fluid">
                                        <!--begin::Toolbar wrapper-->
                                        <!--begin::Breadcrumb-->
                                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold mb-3">
                                            <!--begin::Item-->
                                            <li class="breadcrumb-item text-gray-600 fw-bold lh-1">
                                                <a href="dist/index.html" class="text-white">
                                                    <i class="ki-duotone ki-home text-gray-500 fs-2"></i>
                                                </a>
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="breadcrumb-item">
                                                <i class="ki-duotone ki-right fs-3 text-gray-500 mx-n1"></i>
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="breadcrumb-item text-gray-600 fw-bold lh-1">Dashboards</li>
                                            <!--end::Item-->
                                        </ul>
                                        <!--end::Breadcrumb-->
                                        <!--begin::Page title-->
                                        <div class="page-title d-flex align-items-center me-3">
                                            <!--begin::Title-->
                                            <h1
                                                class="page-heading d-flex text-dark fw-bolder fs-1 flex-column justify-content-center my-0">
                                                eCommerce Dashboard</h1>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Page title-->
                                    </div>
                                    <!--end::Toolbar container-->
                                    <!--begin::Actions-->
                                    <div class="d-flex align-items-center gap-3 gap-lg-5">
                                        <!--begin::Secondary button-->
                                        <div class="m-0">
                                            <!--begin::Menu-->
                                            <a href="#"
                                                class="btn btn-flex btn-sm h-35px h-md-40px btn-light fw-bold px-6"
                                                data-kt-menu-trigger="click"
                                                data-kt-menu-placement="bottom-end">History</a>
                                            <!--begin::Menu 1-->
                                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px"
                                                data-kt-menu="true" id="kt_menu_642d03a754500">
                                                <!--begin::Header-->
                                                <div class="px-7 py-5">
                                                    <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Menu separator-->
                                                <div class="separator border-gray-200"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Form-->
                                                <div class="px-7 py-5">
                                                    <!--begin::Input group-->
                                                    <div class="mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label fw-semibold">Status:</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <div>
                                                            <select class="form-select form-select-solid"
                                                                data-kt-select2="true" data-placeholder="Select option"
                                                                data-dropdown-parent="#kt_menu_642d03a754500"
                                                                data-allow-clear="true">
                                                                <option></option>
                                                                <option value="1">Approved</option>
                                                                <option value="2">Pending</option>
                                                                <option value="2">In Process</option>
                                                                <option value="2">Rejected</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label fw-semibold">Member Type:</label>
                                                        <!--end::Label-->
                                                        <!--begin::Options-->
                                                        <div class="d-flex">
                                                            <!--begin::Options-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="1" />
                                                                <span class="form-check-label">Author</span>
                                                            </label>
                                                            <!--end::Options-->
                                                            <!--begin::Options-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="2" checked="checked" />
                                                                <span class="form-check-label">Customer</span>
                                                            </label>
                                                            <!--end::Options-->
                                                        </div>
                                                        <!--end::Options-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label fw-semibold">Notifications:</label>
                                                        <!--end::Label-->
                                                        <!--begin::Switch-->
                                                        <div
                                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                name="notifications" checked="checked" />
                                                            <label class="form-check-label">Enabled</label>
                                                        </div>
                                                        <!--end::Switch-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Actions-->
                                                    <div class="d-flex justify-content-end">
                                                        <button type="reset"
                                                            class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                            data-kt-menu-dismiss="true">Reset</button>
                                                        <button type="submit" class="btn btn-sm btn-primary"
                                                            data-kt-menu-dismiss="true">Apply</button>
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Form-->
                                            </div>
                                            <!--end::Menu 1-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Secondary button-->
                                        <!--begin::Primary button-->
                                        <a href="#"
                                            class="btn btn-flex btn-center bg-gray-600 btn-color-white h-35px h-md-40px btn-active-dark btn-sm px-6"
                                            data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                            <i class="ki-duotone ki-plus-square fs-2 p-0 m-0">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                            <span class="ms-2">Invite</span>
                                        </a>
                                        <!--end::Primary button-->
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Toolbar container-->
                            </div>
                            <!--end::Toolbar-->
                            <!--begin::Content-->
                            <div id="kt_app_content" class="app-content">
                                <!--begin::Row-->
                                <div class="row gx-5 gx-xl-10">
                                    <!--begin::Col-->
                                    <div class="col-xxl mb-5 mb-xl-10">
                                        <!--begin::Chart widget 27-->
                                        <div class="card card-flush h-xl-100">
                                            <!--begin::Header-->
                                            <div class="card-header py-7">
                                                <!--begin::Statistics-->
                                                <div class="m-0">
                                                    <!--begin::Heading-->
                                                    <div class="d-flex align-items-center mb-2">
                                                        <!--begin::Title-->
                                                        <span
                                                            class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">Airway Scan</span>
                                                        <!--end::Title-->
                                              
                                                    </div>
                                                    <!--end::Heading-->
                                                    <!--begin::Description-->
                                                    <span class="fs-6 fw-semibold text-gray-400">Organic Sessions</span>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Statistics-->
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="card-body pt-0 pb-1">

                                                <!-- <div class="container py-7">
                                                    <div class="sliderX" onmouseover="stopScroll()"
                                                        onmouseout="startScroll()">
                                                        <div class="slide-track">

                                                        </div>
                                                    </div>
                                                </div> -->

                        
					
			

                                                <div class="my-slider" id='my-slider'>
                                                    <!-- <div class="text-center px-5 py-5">
                                                        <img src="assets/media/stock/600x400/img-1.jpg"
                                                            class="card-rounded mw-100" alt="" />
                                                    </div>
                                                    <div class="text-center px-5 py-5">
                                                        <img src="assets/media/stock/600x400/img-1.jpg"
                                                            class="card-rounded mw-100" alt="" />
                                                    </div>
                                                    <div class="text-center px-5 py-5">
                                                        <img src="assets/media/stock/600x400/img-2.jpg"
                                                            class="card-rounded mw-100" alt="" />
                                                    </div>
                                                    <div class="text-center px-5 py-5">
                                                        <img src="assets/media/stock/600x400/img-3.jpg"
                                                            class="card-rounded mw-100" alt="" />
                                                    </div>
                                                    <div class="text-center px-5 py-5">
                                                        <img src="assets/media/stock/600x400/img-4.jpg"
                                                            class="card-rounded mw-100" alt="" />
                                                    </div>
                                                    <div class="text-center px-5 py-5">
                                                        <img src="assets/media/stock/600x400/img-5.jpg"
                                                            class="card-rounded mw-100" alt="" />
                                                    </div>
                                                    <div class="text-center px-5 py-5">
                                                        <img src="assets/media/stock/600x400/img-6.jpg"
                                                            class="card-rounded mw-100" alt="" />
                                                    </div>
                                                    <div class="text-center px-5 py-5">
                                                        <img src="assets/media/stock/600x400/img-7.jpg"
                                                            class="card-rounded mw-100" alt="" />
                                                    </div> -->
                                                </div>

                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Chart widget 27-->
                                    </div>
                                    <!--end::Col-->

                                </div>

                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Content wrapper-->
                        <!--begin::Footer-->
                        <div id="kt_app_footer"
                            class="app-footer d-flex flex-column flex-md-row align-items-center flex-center flex-md-stack">
                            <!--begin::Copyright-->
                            <div class="text-dark order-2 order-md-1">
                                <span class="text-gray-400 fw-semibold me-1">2023&copy;</span>
                                <a href="https://keenthemes.com" target="_blank"
                                    class="text-gray-400 text-hover-primary">Keenthemes</a>
                            </div>
                            <!--end::Copyright-->
                            <!--begin::Menu-->
                            <ul class="menu menu-gray-400 menu-hover-primary fw-semibold order-1">
                                <li class="menu-item">
                                    <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                                </li>
                                <li class="menu-item">
                                    <a href="https://devs.keenthemes.com" target="_blank"
                                        class="menu-link px-2">Support</a>
                                </li>
                                <li class="menu-item">
                                    <a href="https://1.envato.market/EA4JP" target="_blank"
                                        class="menu-link px-2">Purchase</a>
                                </li>
                            </ul>
                            <!--end::Menu-->
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end:::Main-->
                </div>
                <!--end::Wrapper container-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </div>
    <!--end::Scrolltop-->

    <!--end::Modals-->
    <!--begin::Javascript-->
    <script>
    var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->

    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>

    <!--end::Custom Javascript-->
    <!--end::Javascript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

	<script src="assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.11.3/viewer.min.js"></script>



    <script>
    var sliderXAnimation;
    var slideTrack = document.querySelector('.slide-track');

    var indexX = 1;
    for (let index = 1; index < 100; index++) {
        var dot = 'jpg';
        if (indexX == 2 || indexX == 5) {
            dot = 'png'
        }

        let slide = `<div class="slide">
				<a href="https://cctv.numedapp.com/image/scan_${indexX}.${dot}" target='_blank' data-toggle="lightbox">
					<img src="https://cctv.numedapp.com/image/scan_${indexX}.${dot}" height="auto" width="150" alt="" >
				</a>
			</div>`;


        let slide2 = `<div class="text-center px-5 py-5 image" id='xxxxxx'>
						<img src="https://cctv.numedapp.com/image/scan_${indexX}.${dot}"
							class="card-rounded mw-100" alt="" />
					</div>`;
        let slide3 = `
			<a class="d-block overlay" data-fslightbox="lightbox-basic" href="https://cctv.numedapp.com/image/scan_${indexX}.${dot}">

				<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
					style="background-image:url('https://cctv.numedapp.com/image/scan_${indexX}.${dot}')">
				</div>

				<div class="overlay-layer card-rounded bg-dark bg-opacity-25 shadow">
					<i class="bi bi-eye-fill text-white fs-3x"></i>
				</div>

			</a>`;

        // $('.slide-track').append(slide);
        $('.my-slider').append(slide2);

        if (indexX == 5) {
            indexX = 1;
        } else {
            indexX++;
        }

    }

    function stopScroll() {

        clearInterval(sliderXAnimation);
        slideTrack.style.animationPlayState = 'paused';
    }

    function startScroll() {
        var slideTrack = document.querySelector('.slide-track');
        slideTrack.style.animationPlayState = 'running';
        sliderXAnimation = setInterval(function() {
            slideTrack.style.animation = 'none';
            slideTrack.offsetHeight; // เรียกใช้ความสูงของสไลด์เพื่อรีเฟรชการ์เซล
            slideTrack.style.animation = null;
        }, 40000);
    }
    </script>

    <script type="module">
    // import {tns} from './src/tiny-slider.js';

    var slider = tns({
        'container': '.my-slider',
        'nav': false,
        'controls': false,
        'autoplayButtonOutput': false,
		"items": 3,
        "speed": 1000,
        "autoplay": true,
        "autoplayHoverPause": true,
        "autoplayTimeout": 1000,


		// "mouseDrag": true,
        "swipeAngle": false
		
    });


	let ViewX = document.getElementById('my-slider')
	ViewX.addEventListener('viewed', function () {
		
		slider.pause();


	});
	ViewX.addEventListener('hide', function () {
		
	

		slider.play();
	});

	const gallery = new Viewer(ViewX ,{
		ready() {
			// 2 methods are available here: "show" and "destroy".
			$('.viewer-approve').html('<span class="badge badge-circle badge-primary">✓</span>')
			$('.viewer-reject').html('<span class="badge badge-circle badge-danger">✘</span>')
		},
		inline: false,
		navbar: false,
		rotatable : true,
		play : false,
		toolbar: {
		
			rotateLeft: 4,
			rotateRight: 4,
			flipHorizontal: 4,
			flipVertical: 4,

          approve: function(x) {
			console.log(gallery)
            // const a = document.createElement('a');

            // a.href = viewer.image.src;
            // a.download = viewer.image.alt;
            // document.body.appendChild(a);
            // a.click();
            // document.body.removeChild(a);
			Swal.fire({
				title: "Approve !",
				icon: "success",
				timer: 1000,
				timerProgressBar: true,
				showConfirmButton: false,
			});
			setTimeout(() => {
				gallery.hide();
			}, 1000);
          },
          reject: function(x) {
			console.log('sss')
            // const a = document.createElement('a');
			Swal.fire({
				title: "Reject !",
				icon: "error",
				timer: 1000,
				timerProgressBar: true,
				showConfirmButton: false,
			});
			setTimeout(() => {
				gallery.hide();
			}, 1000);
            // a.href = viewer.image.src;
            // a.download = viewer.image.alt;
            // document.body.appendChild(a);
            // a.click();
            // document.body.removeChild(a);
          },
        },

	} )



	// Then, show one image by click it, or call `gallery.show()`.

    </script>
</body>
<!--end::Body-->

</html>