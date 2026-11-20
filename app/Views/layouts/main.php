<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title><?= esc($title ?? 'Windows - The Art and Craft Corner') ?></title>
    
    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('assets/uploads/2025/03/cropped-Windows-Favicon-32x32.png') ?>" sizes="32x32" />
    <link rel="icon" href="<?= base_url('assets/uploads/2025/03/cropped-Windows-Favicon-192x192.png') ?>" sizes="192x192" />
    <link rel="apple-touch-icon" href="<?= base_url('assets/uploads/2025/03/cropped-Windows-Favicon-180x180.png') ?>" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap" rel="stylesheet">

    <!-- Core Stylesheets -->
    <link rel="stylesheet" href="<?= base_url('assets/css/frontend.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/post-109.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/post-113.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/post-111.css') ?>" />

    <!-- Widget Stylesheets -->
    <link rel="stylesheet" href="<?= base_url('assets/css/widget-nav-menu.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/widget-heading.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/widget-image.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/widget-icon-list.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/widget-social-icons.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/widget-video.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/widget-google_maps.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/widget-carousel-module-base.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/widget-testimonial-carousel.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/swiper.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/e-swiper.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/widget-call-to-action.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/widget-posts.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/widget-form.min.css') ?>" />

    <!-- Page Specific CSS -->
    <?= $this->renderSection('styles') ?>

    <style>
        /* Essential base fixes & smooth interactions */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            color: #222;
            background-color: #ffffff;
            overflow-x: hidden;
        }
        .elementor-menu-toggle {
            cursor: pointer;
            background: none;
            border: none;
            padding: 8px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        .elementor-nav-menu--dropdown {
            display: none;
        }
        .elementor-nav-menu--dropdown.elementor-active {
            display: block !important;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background: #ffffff;
            box-shadow: 0 10px 20px rgba(0,0,0,0.08);
            z-index: 9999;
            padding: 15px 0;
        }
        .elementor-nav-menu--dropdown ul {
            list-style: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .elementor-nav-menu--dropdown ul li {
            padding: 10px 20px;
        }
        .elementor-nav-menu--dropdown ul li a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            font-size: 16px;
        }
        .elementor-menu-toggle__icon--close {
            display: none;
        }
        .elementor-menu-toggle.elementor-active .elementor-menu-toggle__icon--open {
            display: none;
        }
        .elementor-menu-toggle.elementor-active .elementor-menu-toggle__icon--close {
            display: block;
        }
        /* Flash messages */
        .ci-alert {
            padding: 15px 20px;
            margin: 20px auto;
            max-width: 1140px;
            border-radius: 6px;
            font-weight: 500;
        }
        .ci-alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        /* Swiper Testimonial Carousel & Navigation Button Fixes */
        .elementor-swiper {
            position: relative !important;
            width: 100% !important;
            padding: 0 10px;
            box-sizing: border-box;
        }

        .elementor-arrows-yes .elementor-main-swiper {
            width: calc(100% - 100px) !important;
            max-width: 1100px;
            margin: 0 auto !important;
            position: relative !important;
            overflow: hidden !important;
        }

        .elementor-swiper-button {
            position: absolute !important;
            top: 45% !important;
            transform: translateY(-50%) !important;
            width: 44px !important;
            height: 44px !important;
            border-radius: 50% !important;
            background: rgba(255, 255, 255, 0.18) !important;
            border: 1px solid rgba(255, 255, 255, 0.4) !important;
            color: #ffffff !important;
            cursor: pointer !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            z-index: 25 !important;
            transition: all 0.25s ease !important;
            outline: none !important;
            user-select: none !important;
            -webkit-user-select: none !important;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15) !important;
        }

        .elementor-swiper-button:hover {
            background: #ffffff !important;
            border-color: #ffffff !important;
            color: #1e293b !important;
            transform: translateY(-50%) scale(1.1) !important;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.25) !important;
        }

        .elementor-swiper-button:hover svg {
            fill: #1e293b !important;
        }

        .elementor-swiper-button:active {
            transform: translateY(-50%) scale(0.95) !important;
        }

        .elementor-swiper-button-prev {
            left: 5px !important;
            right: auto !important;
        }

        .elementor-swiper-button-next {
            right: 5px !important;
            left: auto !important;
        }

        .elementor-swiper-button svg {
            width: 22px !important;
            height: 22px !important;
            display: block !important;
            fill: #ffffff !important;
            pointer-events: none !important;
            flex-shrink: 0 !important;
            transition: fill 0.2s ease !important;
        }

        .elementor-swiper-button.swiper-button-disabled {
            opacity: 0.35 !important;
            cursor: not-allowed !important;
            pointer-events: none !important;
        }

        /* Testimonial pagination bullets */
        .elementor-widget-testimonial-carousel .swiper-pagination {
            position: relative !important;
            margin-top: 26px !important;
            bottom: auto !important;
            left: 0 !important;
            width: 100% !important;
            text-align: center !important;
            display: block !important;
            z-index: 10 !important;
        }

        .elementor-widget-testimonial-carousel .swiper-pagination-bullet {
            width: 10px !important;
            height: 10px !important;
            background: rgba(255, 255, 255, 0.4) !important;
            opacity: 1 !important;
            margin: 0 5px !important;
            transition: all 0.3s ease !important;
            display: inline-block !important;
            border-radius: 50% !important;
            cursor: pointer !important;
        }

        .elementor-widget-testimonial-carousel .swiper-pagination-bullet-active {
            background: #f39c12 !important;
            width: 24px !important;
            border-radius: 6px !important;
        }

        @media (max-width: 767px) {
            .elementor-arrows-yes .elementor-main-swiper {
                width: calc(100% - 50px) !important;
            }
            .elementor-swiper-button {
                width: 34px !important;
                height: 34px !important;
            }
            .elementor-swiper-button svg {
                width: 16px !important;
                height: 16px !important;
            }
        }

        /* Mobile Image Display Fixes (Renuka Ma'am & Portrait Images) */
        .elementor-119 .elementor-element.elementor-element-3c5cb27b img {
            object-position: top center !important;
        }

        @media (max-width: 767px) {
            .elementor-119 .elementor-element.elementor-element-3c5cb27b img {
                width: 100% !important;
                height: auto !important;
                max-height: 520px !important;
                object-fit: cover !important;
                object-position: top center !important;
                border-radius: 16px !important;
                display: block !important;
                margin: 0 auto !important;
            }
        }
    </style>
</head>
<body class="elementor-default elementor-kit-109">

    <!-- Flash message -->
    <?php if (session()->getFlashdata('success')): ?>
        <div class="ci-alert ci-alert-success">
            <?= esc(session()->getFlashdata('success')) ?>
        </div>
    <?php endif; ?>

    <!-- Site Header -->
    <header id="site-header">
        <div data-elementor-type="header" data-elementor-id="113" class="elementor elementor-113 elementor-location-header" data-elementor-post-type="elementor_library">
			<div class="elementor-element elementor-element-30bfc364 e-flex e-con-boxed e-con e-parent" data-id="30bfc364" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0,&quot;sticky_anchor_link_offset&quot;:0}">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-6f687bbc elementor-widget elementor-widget-theme-site-logo elementor-widget-image" data-id="6f687bbc" data-element_type="widget" data-widget_type="theme-site-logo.default">
				<div class="elementor-widget-container">
											<a href="<?= base_url('/') ?>">
			<img fetchpriority="high" width="768" height="1195" src="<?= base_url('assets/uploads/') ?>/2025/03/WinArtCraftLogo-768x1195.png" class="attachment-medium_large size-medium_large wp-image-19" alt="WinArtCraft" srcset="<?= base_url('assets/uploads/') ?>/2025/03/WinArtCraftLogo-768x1195.png 768w, <?= base_url('assets/uploads/') ?>/2025/03/WinArtCraftLogo-193x300.png 193w, <?= base_url('assets/uploads/') ?>/2025/03/WinArtCraftLogo-658x1024.png 658w, <?= base_url('assets/uploads/') ?>/2025/03/WinArtCraftLogo-987x1536.png 987w, <?= base_url('assets/uploads/') ?>/2025/03/WinArtCraftLogo.png 1071w" sizes="(max-width: 768px) 100vw, 768px" />				</a>
											</div>
				</div>
				<div class="elementor-element elementor-element-1899d78d elementor-nav-menu--dropdown-mobile elementor-nav-menu--stretch elementor-nav-menu__text-align-center elementor-widget__width-auto elementor-nav-menu__align-center elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu" data-id="1899d78d" data-element_type="widget" data-settings="{&quot;full_width&quot;:&quot;stretch&quot;,&quot;layout&quot;:&quot;horizontal&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;svg class=\&quot;e-font-icon-svg e-fas-caret-down\&quot; viewBox=\&quot;0 0 320 512\&quot; xmlns=\&quot;http:\/\/www.w3.org\/2000\/svg\&quot;&gt;&lt;path d=\&quot;M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z\&quot;&gt;&lt;\/path&gt;&lt;\/svg&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;toggle&quot;:&quot;burger&quot;}" data-widget_type="nav-menu.default">
				<div class="elementor-widget-container">
								<nav aria-label="Our Menu" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-underline e--animation-fade">
				<ul id="menu-1-1899d78d" class="elementor-nav-menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-119 current_page_item menu-item-138"><a href="<?= base_url('/') ?>" class="elementor-item <?= uri_string() === '' ? 'elementor-item-active' : '' ?>">home</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-136"><a href="<?= base_url('about-us') ?>" class="elementor-item <?= uri_string() === 'about-us' ? 'elementor-item-active' : '' ?>">About Us</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-137"><a href="<?= base_url('stories') ?>" class="elementor-item <?= str_starts_with(uri_string(), 'stories') ? 'elementor-item-active' : '' ?>">Stories</a></li>
</ul>			</nav>
					<div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false">
			<svg aria-hidden="true" role="presentation" class="elementor-menu-toggle__icon--open e-font-icon-svg e-eicon-menu-bar" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M104 333H896C929 333 958 304 958 271S929 208 896 208H104C71 208 42 237 42 271S71 333 104 333ZM104 583H896C929 583 958 554 958 521S929 458 896 458H104C71 458 42 487 42 521S71 583 104 583ZM104 833H896C929 833 958 804 958 771S929 708 896 708H104C71 708 42 737 42 771S71 833 104 833Z"></path></svg><svg aria-hidden="true" role="presentation" class="elementor-menu-toggle__icon--close e-font-icon-svg e-eicon-close" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M742 167L500 408 258 167C246 154 233 150 217 150 196 150 179 158 167 167 154 179 150 196 150 212 150 229 154 242 171 254L408 500 167 742C138 771 138 800 167 829 196 858 225 858 254 829L496 587 738 829C750 842 767 846 783 846 800 846 817 842 829 829 842 817 846 804 846 783 846 767 842 750 829 737L588 500 833 258C863 229 863 200 833 171 804 137 775 137 742 167Z"></path></svg>		</div>
					<nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" aria-hidden="true">
				<ul id="menu-2-1899d78d" class="elementor-nav-menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-119 current_page_item menu-item-138"><a href="<?= base_url('/') ?>" class="elementor-item <?= uri_string() === '' ? 'elementor-item-active' : '' ?>" tabindex="-1">home</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-136"><a href="<?= base_url('about-us') ?>" class="elementor-item <?= uri_string() === 'about-us' ? 'elementor-item-active' : '' ?>" tabindex="-1">About Us</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-137"><a href="<?= base_url('stories') ?>" class="elementor-item <?= str_starts_with(uri_string(), 'stories') ? 'elementor-item-active' : '' ?>" tabindex="-1">Stories</a></li>
</ul>			</nav>
						</div>
				</div>
					</div>
				</div>
				</div>
    </header>

    <!-- Main Content -->
    <main id="content" role="main">
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Site Footer -->
    <footer id="site-footer">
        <div data-elementor-type="footer" data-elementor-id="111" class="elementor elementor-111 elementor-location-footer" data-elementor-post-type="elementor_library">
			<div class="elementor-element elementor-element-7f73903d e-flex e-con-boxed e-con e-parent" data-id="7f73903d" data-element_type="container">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-1906f88 e-con-full e-flex e-con e-child" data-id="1906f88" data-element_type="container">
		<div class="elementor-element elementor-element-4a53171b e-con-full e-flex e-con e-child" data-id="4a53171b" data-element_type="container">
				<div class="elementor-element elementor-element-5b9496a0 elementor-widget elementor-widget-theme-site-logo elementor-widget-image" data-id="5b9496a0" data-element_type="widget" data-widget_type="theme-site-logo.default">
				<div class="elementor-widget-container">
											<a href="<?= base_url('/') ?>">
			<img width="1071" height="1667" src="<?= base_url('assets/uploads/') ?>/2025/03/WinArtCraftLogo.png" class="attachment-full size-full wp-image-19" alt="WinArtCraft" srcset="<?= base_url('assets/uploads/') ?>/2025/03/WinArtCraftLogo.png 1071w, <?= base_url('assets/uploads/') ?>/2025/03/WinArtCraftLogo-193x300.png 193w, <?= base_url('assets/uploads/') ?>/2025/03/WinArtCraftLogo-658x1024.png 658w, <?= base_url('assets/uploads/') ?>/2025/03/WinArtCraftLogo-768x1195.png 768w, <?= base_url('assets/uploads/') ?>/2025/03/WinArtCraftLogo-987x1536.png 987w" sizes="(max-width: 1071px) 100vw, 1071px" />				</a>
											</div>
				</div>
				<div class="elementor-element elementor-element-1ca79190 elementor-widget elementor-widget-text-editor" data-id="1ca79190" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p>We focus on sparking creativity and character in kids through the wonderful world of art and crafts. Join us in nurturing their talent and expression.</p>								</div>
				</div>
				<div class="elementor-element elementor-element-5c89a853 elementor-grid-mobile-3 elementor-widget__width-initial elementor-shape-rounded elementor-grid-0 elementor-widget elementor-widget-social-icons" data-id="5c89a853" data-element_type="widget" data-widget_type="social-icons.default">
				<div class="elementor-widget-container">
							<div class="elementor-social-icons-wrapper elementor-grid" role="list">
							<span class="elementor-grid-item" role="listitem">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-f elementor-repeater-item-0267196" target="_blank">
						<span class="elementor-screen-only">Facebook-f</span>
						<svg aria-hidden="true" class="e-font-icon-svg e-fab-facebook-f" viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg>					</a>
				</span>
							<span class="elementor-grid-item" role="listitem">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-dbaeb71" target="_blank">
						<span class="elementor-screen-only">Youtube</span>
						<svg aria-hidden="true" class="e-font-icon-svg e-fab-youtube" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg>					</a>
				</span>
							<span class="elementor-grid-item" role="listitem">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-dc10550" target="_blank">
						<span class="elementor-screen-only">Twitter</span>
						<svg aria-hidden="true" class="e-font-icon-svg e-fab-twitter" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>					</a>
				</span>
							<span class="elementor-grid-item" role="listitem">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-0afc575" target="_blank">
						<span class="elementor-screen-only">Instagram</span>
						<svg aria-hidden="true" class="e-font-icon-svg e-fab-instagram" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>					</a>
				</span>
					</div>
						</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-4c578887 e-con-full e-flex e-con e-child" data-id="4c578887" data-element_type="container">
				<div class="elementor-element elementor-element-31c5380a elementor-widget elementor-widget-heading" data-id="31c5380a" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Get In Touch</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-1089f2dc elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="1089f2dc" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<a href="javascript:void(0)">

											<span class="elementor-icon-list-text">About Us</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="javascript:void(0)">

											<span class="elementor-icon-list-text">Our Services</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="javascript:void(0)">

											<span class="elementor-icon-list-text">Our Stories</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="javascript:void(0)">

											<span class="elementor-icon-list-text">Testimonials</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="javascript:void(0)">

											<span class="elementor-icon-list-text">Contact Us</span>
											</a>
									</li>
						</ul>
						</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-2ec78c1e e-con-full e-flex e-con e-child" data-id="2ec78c1e" data-element_type="container">
				<div class="elementor-element elementor-element-4fda0089 elementor-widget elementor-widget-heading" data-id="4fda0089" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Stay Connected</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-10be71b1 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="10be71b1" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<a href="javascript:void(0)">

											<span class="elementor-icon-list-text">Facebook</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="javascript:void(0)">

											<span class="elementor-icon-list-text">YouTube</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="javascript:void(0)">

											<span class="elementor-icon-list-text">Twitter</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
										<span class="elementor-icon-list-text">Instagram</span>
									</li>
						</ul>
						</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-1834467d e-con-full e-flex e-con e-child" data-id="1834467d" data-element_type="container">
				<div class="elementor-element elementor-element-7bc4ce62 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="7bc4ce62" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">© WinArtCraft. All rights reserved.</p>				</div>
				</div>
				<div class="elementor-element elementor-element-7572b6e2 elementor-icon-list--layout-inline elementor-widget__width-auto elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="7572b6e2" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items elementor-inline-items">
							<li class="elementor-icon-list-item elementor-inline-item">
											<a href="javascript:void(0)">

											<span class="elementor-icon-list-text">Privacy Policy</span>
											</a>
									</li>
								<li class="elementor-icon-list-item elementor-inline-item">
											<a href="javascript:void(0)">

											<span class="elementor-icon-list-text">Terms of Use</span>
											</a>
									</li>
								<li class="elementor-icon-list-item elementor-inline-item">
											<a href="javascript:void(0)">

											<span class="elementor-icon-list-text">Cookie Preferences</span>
											</a>
									</li>
						</ul>
						</div>
				</div>
				</div>
					</div>
				</div>
				</div>
		
<script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"/*"},{"not":{"href_matches":["/wp-*.php","/wp-admin/*","/wp-content/uploads/*","/wp-content/*","/wp-content/plugins/*","/wp-content/themes/hello-elementor/*","/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
			<script>
				const lazyloadRunObserver = () => {
					const lazyloadBackgrounds = document.querySelectorAll( `.e-con.e-parent:not(.e-lazyloaded)` );
					const lazyloadBackgroundObserver = new IntersectionObserver( ( entries ) => {
						entries.forEach( ( entry ) => {
							if ( entry.isIntersecting ) {
								let lazyloadBackground = entry.target;
								if( lazyloadBackground ) {
									lazyloadBackground.classList.add( 'e-lazyloaded' );
								}
								lazyloadBackgroundObserver.unobserve( entry.target );
							}
						});
					}, { rootMargin: '200px 0px 200px 0px' } );
					lazyloadBackgrounds.forEach( ( lazyloadBackground ) => {
						lazyloadBackgroundObserver.observe( lazyloadBackground );
					} );
				};
				const events = [
					'DOMContentLoaded',
					'elementor/lazyload/observe',
				];
				events.forEach( ( event ) => {
					document.addEventListener( event, lazyloadRunObserver );
				} );
			</script>
			<script id="elementor-webpack-runtime-js" src="https://winartcraft.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.33.4"></script>
<script id="elementor-frontend-modules-js" src="https://winartcraft.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.33.4"></script>
<script id="jquery-ui-core-js-before">
jQuery.uiBackCompat = true;
//# sourceURL=jquery-ui-core-js-before
</script>
<script id="jquery-ui-core-js" src="https://winartcraft.com/wp-includes/js/jquery/ui/core.min.js?ver=1.14.2"></script>
<script id="elementor-frontend-js-before">
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}},"hasCustomBreakpoints":false},"version":"3.33.4","is_static":false,"experimentalFeatures":{"e_font_icon_svg":true,"additional_custom_breakpoints":true,"container":true,"theme_builder_v2":true,"nested-elements":true,"home_screen":true,"global_classes_should_enforce_capabilities":true,"e_variables":true,"cloud-library":true,"e_opt_in_v4_page":true,"import-export-customization":true},"urls":{"assets":"https:\/\/winartcraft.com\/wp-content\/plugins\/elementor\/assets\/","ajaxurl":"https:\/\/winartcraft.com\/wp-admin\/admin-ajax.php","uploadUrl":"https:\/\/winartcraft.com\/wp-content\/uploads"},"nonces":{"floatingButtonsClickTracking":"bb797a617b"},"swiperClass":"swiper","settings":{"page":[],"editorPreferences":[]},"kit":{"body_background_background":"classic","active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":119,"title":"WINDOWS%20%E2%80%93%20the%20art%20and%20craft%20corner","excerpt":"","featuredImage":false}};
//# sourceURL=elementor-frontend-js-before
</script>
<script id="elementor-frontend-js" src="https://winartcraft.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.33.4"></script>
<script id="smartmenus-js" src="https://winartcraft.com/wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.min.js?ver=1.2.1"></script>
<script id="e-sticky-js" src="https://winartcraft.com/wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min.js?ver=3.29.1"></script>
<script id="swiper-js" src="https://winartcraft.com/wp-content/plugins/elementor/assets/lib/swiper/v8/swiper.min.js?ver=8.4.5"></script>
<script id="elementor-gallery-js" src="https://winartcraft.com/wp-content/plugins/elementor/assets/lib/e-gallery/js/e-gallery.min.js?ver=1.2.0"></script>
<script id="elementor-pro-webpack-runtime-js" src="https://winartcraft.com/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.29.1"></script>
<script id="wp-hooks-js" src="https://winartcraft.com/wp-includes/js/dist/hooks.min.js?ver=f0f188028580e8dc1255"></script>
<script id="wp-i18n-js" src="https://winartcraft.com/wp-includes/js/dist/i18n.min.js?ver=1dfe7db3940c23ea9216"></script>
<script id="wp-i18n-js-after">
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
//# sourceURL=wp-i18n-js-after
</script>
<script id="elementor-pro-frontend-js-before">
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/winartcraft.com\/wp-admin\/admin-ajax.php","nonce":"54543a2a24","urls":{"assets":"https:\/\/winartcraft.com\/wp-content\/plugins\/elementor-pro\/assets\/","rest":"https:\/\/winartcraft.com\/wp-json\/"},"settings":{"lazy_load_background_images":true},"popup":{"hasPopUps":false},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"},"x-twitter":{"title":"X"},"threads":{"title":"Threads"}},"facebook_sdk":{"lang":"en_US","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/winartcraft.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
//# sourceURL=elementor-pro-frontend-js-before
</script>
<script id="elementor-pro-frontend-js" src="https://winartcraft.com/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.29.1"></script>
<script id="pro-elements-handlers-js" src="https://winartcraft.com/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=3.29.1"></script>
<script id="wp-emoji-settings" type="application/json">
{"baseUrl":"https://s.w.org/images/core/emoji/17.0.2/72x72/","ext":".png","svgUrl":"https://s.w.org/images/core/emoji/17.0.2/svg/","svgExt":".svg","source":{"concatemoji":"https://winartcraft.com/wp-includes/js/wp-emoji-release.min.js?ver=7.1.4"}}
</script>
    </footer>

    <!-- Scripts -->
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/swiper.min.js') ?>"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile navigation toggle
            const toggleBtn = document.querySelector('.elementor-menu-toggle');
            const dropdown = document.querySelector('.elementor-nav-menu--dropdown');
            if (toggleBtn && dropdown) {
                toggleBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    this.classList.toggle('elementor-active');
                    dropdown.classList.toggle('elementor-active');
                    const isExpanded = this.classList.contains('elementor-active');
                    this.setAttribute('aria-expanded', isExpanded);
                    dropdown.setAttribute('aria-hidden', !isExpanded);
                });
            }

            // Initialize Swiper carousel if present
            const swiperContainer = document.querySelector('.elementor-main-swiper');
            if (swiperContainer) {
                new Swiper(swiperContainer, {
                    slidesPerView: 1,
                    spaceBetween: 25,
                    loop: true,
                    grabCursor: true,
                    speed: 600,
                    autoplay: {
                        delay: 4500,
                        disableOnInteraction: false,
                        pauseOnMouseEnter: true,
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.elementor-swiper-button-next',
                        prevEl: '.elementor-swiper-button-prev',
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 1,
                            spaceBetween: 20,
                        },
                        768: {
                            slidesPerView: 2,
                            spaceBetween: 24,
                        },
                        1024: {
                            slidesPerView: 3,
                            spaceBetween: 30,
                        }
                    }
                });
            }
        });
    </script>
    <?= $this->renderSection('scripts') ?>
</body>
</html>
