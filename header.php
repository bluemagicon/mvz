<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="default">
	<meta name="apple-mobile-web-app-title" content="<?= bloginfo('name') ?>">

	<link rel="profile" href="http://gmpg.org/xfn/11">

    <link rel="preload" href="<?= get_bloginfo('template_url') ?>/dist/fonts/asap-condensed-v8-latin-regular.woff2" as="font" crossorigin="anonymous" />
	<link rel="preload" href="<?= get_bloginfo('template_url') ?>/dist/fonts/asap-condensed-v8-latin-500.woff2" as="font" crossorigin="anonymous" />
	<link rel="preload" href="<?= get_bloginfo('template_url') ?>/dist/fonts/asap-condensed-v8-latin-600.woff2" as="font" crossorigin="anonymous" />
	<link rel="preload" href="<?= get_bloginfo('template_url') ?>/dist/fonts/asap-condensed-v8-latin-700.woff2" as="font" crossorigin="anonymous" />

    <link rel="preload" href="<?= get_bloginfo('template_url') ?>/dist/fonts/asap-v15-latin-regular.woff2" as="font" crossorigin="anonymous" />
    <link rel="preload" href="<?= get_bloginfo('template_url') ?>/dist/fonts/asap-v15-latin-500.woff2" as="font" crossorigin="anonymous" />
    <link rel="preload" href="<?= get_bloginfo('template_url') ?>/dist/fonts/asap-v15-latin-600.woff2" as="font" crossorigin="anonymous" />
    <link rel="preload" href="<?= get_bloginfo('template_url') ?>/dist/fonts/asap-v15-latin-700.woff2" as="font" crossorigin="anonymous" />




	<?php wp_head(); ?>

</head>


<?php
// ----------------------------------------------------------------------
// ----------------------------------------------------------------------
// ----------------------------------------------------------------------
// Globale Einstellungen werden geladen

$global_social		= get_field('opt_socialmedia', 'option') ?: false;
$global_contact		= get_field('opt_contact', 'option') ?: false;

$global_logos 		= get_field('opt_logos', 'option') ?: false;
$global_header 		= get_field('opt_header', 'option') ?: false;

// ----------------------------------------------------------------------
// Überschreibende Einstellungen werden geladen

$override_logos		= get_field('override_logos') ? get_field('instance_logos')['opt_logos'] : false;
$override_header	= get_field('override_header') ? get_field('instance_header')['opt_header'] : false;

// ----------------------------------------------------------------------
// Überschreibende Einstellungen werden geladen

$page_logos		= $override_logos ?: $global_logos;
$page_header	= $override_header ?: $global_header;

// ----------------------------------------------------------------------
?>


<body <?php body_class('w-body'); ?>>

	<?php if($page_header['show_socialmedia'] && $global_social) { ?>
		<div class="header-meta">
			<div class="header-meta-inner">
				<div class="header-meta-item">
					<?php $social_profiles = $global_social;
					include 'tpl/partials/social.php'; ?>
				</div>
			</div>
		</div>
	<?php } ?>
	<header class="header header--sticky" id="header" role="banner">
		<div class="header-inner">
			<div class="header-container">

                <div class="header-col uk-width-2-5">
                    <?php include 'tpl/partials/header-nav.php'; ?>
                    <?php include 'tpl/partials/calltoaction.php'; ?>
                    <?php include 'tpl/partials/header-contact.php'; ?>
                    <?php include 'tpl/partials/header-lang.php'; ?>
                    <?php include 'tpl/partials/header-nav-mobile.php'; ?>
                </div>

                <div class="header-col uk-width-1-5 uk-flex-center">
				    <div class="header-item header-item--logo">
						<?php include_once 'tpl/partials/logo-function.php'; ?>
						<?php include 'tpl/partials/logo.php'; ?>
					</div>
				</div>

                <div class="header-col uk-width-2-5 uk-flex-right">
                    <a href="#" class="btn-plain-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18.75" height="20" viewBox="0 0 18.75 20">
                            <path id="FontAwsome_star-of-life_" data-name="FontAwsome (star-of-life)" d="M18.439,13.064,13.13,10l5.31-3.064a.625.625,0,0,0,.229-.854L17.417,3.917a.626.626,0,0,0-.854-.229l-5.31,3.064V.625A.625.625,0,0,0,10.628,0h-2.5A.625.625,0,0,0,7.5.625V6.752L2.191,3.689a.626.626,0,0,0-.854.229L.086,6.082a.625.625,0,0,0,.229.854L5.625,10,.315,13.064a.625.625,0,0,0-.229.854l1.251,2.165a.626.626,0,0,0,.854.229L7.5,13.248v6.127A.625.625,0,0,0,8.126,20h2.5a.625.625,0,0,0,.625-.625V13.248l5.31,3.064a.625.625,0,0,0,.854-.229l1.251-2.165a.624.624,0,0,0-.229-.854Z" transform="translate(-0.002)" fill="#ce0d28"/>
                        </svg>
                        Notfall
                    </a>
                    <a href="#" class="btn-plain-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="20" viewBox="0 0 15 20">
                            <path id="FontAwsome_file-alt_" data-name="FontAwsome (file-alt)" d="M11.25,9.688v1.094a.47.47,0,0,1-.469.469H4.219a.47.47,0,0,1-.469-.469V9.688a.47.47,0,0,1,.469-.469h6.562A.47.47,0,0,1,11.25,9.688ZM10.781,12.5H4.219a.47.47,0,0,0-.469.469v1.094a.47.47,0,0,0,.469.469h6.562a.47.47,0,0,0,.469-.469V12.969A.47.47,0,0,0,10.781,12.5ZM15,5.152V18.125A1.875,1.875,0,0,1,13.125,20H1.875A1.875,1.875,0,0,1,0,18.125V1.875A1.875,1.875,0,0,1,1.875,0H9.848a1.875,1.875,0,0,1,1.324.551l3.277,3.277A1.868,1.868,0,0,1,15,5.152ZM10,2.027V5h2.973L10,2.027Zm3.125,16.1V6.875H9.062a.935.935,0,0,1-.937-.938V1.875H1.875v16.25Z" fill="#ce0d28"/>
                        </svg>
                        Rezept
                    </a>
                    <a href="#" class="btn-calendar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15.75" height="18" viewBox="0 0 15.75 18">
                            <path id="FontAwsome_calendar-alt_" data-name="FontAwsome (calendar-alt)" d="M0,16.313A1.688,1.688,0,0,0,1.688,18H14.062a1.688,1.688,0,0,0,1.688-1.687V6.75H0ZM11.25,9.422A.423.423,0,0,1,11.672,9h1.406a.423.423,0,0,1,.422.422v1.406a.423.423,0,0,1-.422.422H11.672a.423.423,0,0,1-.422-.422Zm0,4.5a.423.423,0,0,1,.422-.422h1.406a.423.423,0,0,1,.422.422v1.406a.423.423,0,0,1-.422.422H11.672a.423.423,0,0,1-.422-.422Zm-4.5-4.5A.423.423,0,0,1,7.172,9H8.578A.423.423,0,0,1,9,9.422v1.406a.423.423,0,0,1-.422.422H7.172a.423.423,0,0,1-.422-.422Zm0,4.5a.423.423,0,0,1,.422-.422H8.578A.423.423,0,0,1,9,13.922v1.406a.423.423,0,0,1-.422.422H7.172a.423.423,0,0,1-.422-.422Zm-4.5-4.5A.423.423,0,0,1,2.672,9H4.078a.423.423,0,0,1,.422.422v1.406a.423.423,0,0,1-.422.422H2.672a.423.423,0,0,1-.422-.422Zm0,4.5a.423.423,0,0,1,.422-.422H4.078a.423.423,0,0,1,.422.422v1.406a.423.423,0,0,1-.422.422H2.672a.423.423,0,0,1-.422-.422ZM14.062,2.25H12.375V.563A.564.564,0,0,0,11.812,0H10.687a.564.564,0,0,0-.562.563V2.25h-4.5V.563A.564.564,0,0,0,5.062,0H3.938a.564.564,0,0,0-.562.563V2.25H1.688A1.688,1.688,0,0,0,0,3.938V5.625H15.75V3.938A1.688,1.688,0,0,0,14.062,2.25Z" fill="#fff"/>
                        </svg>
                        Termin buchen
                    </a>
                </div>

			</div>
		</div>
	</header>
