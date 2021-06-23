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
                    <div class="info-switch">
                        <span class="active allgemeine-infos-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="6.75" height="18" viewBox="0 0 6.75 18">
                                <path id="FontAwsome_info_" data-name="FontAwsome (info)" d="M.7,14.914h.7V9.836H.7a.7.7,0,0,1-.7-.7V7.453a.7.7,0,0,1,.7-.7H4.641a.7.7,0,0,1,.7.7v7.461h.7a.7.7,0,0,1,.7.7V17.3a.7.7,0,0,1-.7.7H.7a.7.7,0,0,1-.7-.7V15.617A.7.7,0,0,1,.7,14.914ZM3.375,0A2.531,2.531,0,1,0,5.906,2.531,2.531,2.531,0,0,0,3.375,0Z" fill="#143a89"/>
                            </svg>
                        </span>
                        <span class="kontakt-infos-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path id="FontAwsome_headset_" data-name="FontAwsome (headset)" d="M7.5,8.125a1.25,1.25,0,0,0-1.25-1.25H5.625a2.5,2.5,0,0,0-2.5,2.5V11.25a2.5,2.5,0,0,0,2.5,2.5H6.25A1.25,1.25,0,0,0,7.5,12.5Zm6.875,5.625a2.5,2.5,0,0,0,2.5-2.5V9.375a2.5,2.5,0,0,0-2.5-2.5H13.75a1.25,1.25,0,0,0-1.25,1.25V12.5a1.25,1.25,0,0,0,1.25,1.25ZM10,0A10.19,10.19,0,0,0,0,10v.625a.625.625,0,0,0,.625.625H1.25a.625.625,0,0,0,.625-.625V10a8.125,8.125,0,0,1,16.25,0h0c0,.095,0,6.473,0,6.473a1.652,1.652,0,0,1-1.652,1.652H12.5a1.875,1.875,0,0,0-1.875-1.875H9.375a1.875,1.875,0,1,0,0,3.75h7.1A3.527,3.527,0,0,0,20,16.473V10A10.19,10.19,0,0,0,10,0Z" fill="#143a89"/>
                            </svg>
                        </span>
                    </div>
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
        <div class="header-bar">
            <div class="allgemeine-infos">
                <?php while(have_rows('allgemeine_informationen', 'option')) : the_row(); ?>
                    <?php if(get_sub_field('anzeige') == "PopUp"){ ?>
                        <a data-custom-open="dyn-modal" data-content="<?= get_sub_field('popup_content'); ?>" data-title="<?= get_sub_field('header_content'); ?>" class="header-bar-item open-popup">
                            <?php echo get_sub_field('header_content'); ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <path id="FontAwsome_plus_" data-name="FontAwsome (plus)" d="M14.857,38.286H9.714V33.143A1.143,1.143,0,0,0,8.571,32H7.429a1.143,1.143,0,0,0-1.143,1.143v5.143H1.143A1.143,1.143,0,0,0,0,39.429v1.143a1.143,1.143,0,0,0,1.143,1.143H6.286v5.143A1.143,1.143,0,0,0,7.429,48H8.571a1.143,1.143,0,0,0,1.143-1.143V41.714h5.143A1.143,1.143,0,0,0,16,40.571V39.429A1.143,1.143,0,0,0,14.857,38.286Z" transform="translate(0 -32)" fill="#143a89"/>
                            </svg>
                        </a>
                    <?php }elseif(get_sub_field('anzeige') == "Custom PopUp"){ ?>
                        <span class="header-bar-item open-custom-popup">
                            <?php echo get_sub_field('header_content'); ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <path id="FontAwsome_plus_" data-name="FontAwsome (plus)" d="M14.857,38.286H9.714V33.143A1.143,1.143,0,0,0,8.571,32H7.429a1.143,1.143,0,0,0-1.143,1.143v5.143H1.143A1.143,1.143,0,0,0,0,39.429v1.143a1.143,1.143,0,0,0,1.143,1.143H6.286v5.143A1.143,1.143,0,0,0,7.429,48H8.571a1.143,1.143,0,0,0,1.143-1.143V41.714h5.143A1.143,1.143,0,0,0,16,40.571V39.429A1.143,1.143,0,0,0,14.857,38.286Z" transform="translate(0 -32)" fill="#143a89"/>
                            </svg>
                        </span>
                    <?php }elseif(get_sub_field('anzeige') == "Seite"){ ?>
                        <a href="<?php echo get_sub_field('link'); ?>" class="header-bar-item">
                            <?php echo get_sub_field('header_content'); ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <path id="FontAwsome_plus_" data-name="FontAwsome (plus)" d="M14.857,38.286H9.714V33.143A1.143,1.143,0,0,0,8.571,32H7.429a1.143,1.143,0,0,0-1.143,1.143v5.143H1.143A1.143,1.143,0,0,0,0,39.429v1.143a1.143,1.143,0,0,0,1.143,1.143H6.286v5.143A1.143,1.143,0,0,0,7.429,48H8.571a1.143,1.143,0,0,0,1.143-1.143V41.714h5.143A1.143,1.143,0,0,0,16,40.571V39.429A1.143,1.143,0,0,0,14.857,38.286Z" transform="translate(0 -32)" fill="#143a89"/>
                            </svg>
                        </a>
                    <?php }else{ ?>
                        <span class="header-bar-item">
                        <?php echo get_sub_field('header_content'); ?>
                    </span>
                    <?php } ?>
                <?php endwhile; ?>
            </div>
            <div class="kontakt-infos">
                <?php while(have_rows('kontaktinformationen', 'option')) : the_row(); ?>
                    <?php if(get_sub_field('anzeige') == "PopUp"){ ?>
                        <a data-custom-open="dyn-modal" data-content="test" data-title="<?= get_the_title() ?>" data-subtitle="test" class="header-bar-item">
                        <?php echo get_sub_field('header_content'); ?>
                            <?php if(get_sub_field('icon') == "Telefon"){ ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <path id="FontAwsome_phone-alt_" data-name="FontAwsome (phone-alt)" d="M15.544,11.313l-3.5-1.5a.75.75,0,0,0-.875.216l-1.55,1.894A11.583,11.583,0,0,1,4.081,6.385l1.894-1.55a.748.748,0,0,0,.216-.875L4.691.46A.755.755,0,0,0,3.831.025L.581.775A.75.75,0,0,0,0,1.506a14.5,14.5,0,0,0,14.5,14.5.75.75,0,0,0,.731-.581l.75-3.25a.759.759,0,0,0-.438-.863Z" transform="translate(0 -0.006)" fill="#143a89"/>
                            </svg>
                            <?php } else if(get_sub_field('icon') == "Mail"){ ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18.667" height="14" viewBox="0 0 18.667 14">
                                <path id="FontAwsome_envelope_" data-name="FontAwsome (envelope)" d="M16.917,64H1.75A1.75,1.75,0,0,0,0,65.75v10.5A1.75,1.75,0,0,0,1.75,78H16.917a1.75,1.75,0,0,0,1.75-1.75V65.75A1.75,1.75,0,0,0,16.917,64Zm0,1.75v1.488c-.817.666-2.121,1.7-4.907,3.882-.614.483-1.83,1.643-2.677,1.63-.846.014-2.063-1.147-2.677-1.63C3.871,68.939,2.568,67.9,1.75,67.238V65.75ZM1.75,76.25V69.483c.835.665,2.02,1.6,3.826,3.013.8.627,2.192,2.012,3.757,2,1.557.008,2.935-1.356,3.757-2,1.806-1.414,2.991-2.348,3.826-3.013V76.25Z" transform="translate(0 -64)" fill="#143a89"/>
                            </svg>
                            <?php }else{ ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <path id="FontAwsome_route_" data-name="FontAwsome (route)" d="M13,10H10a1,1,0,0,1,0-2h3s3-3.344,3-5a3,3,0,0,0-6,0,6.592,6.592,0,0,0,1.416,3H10a3,3,0,0,0,0,6h3a1,1,0,0,1,0,2H5.8a21.575,21.575,0,0,1-1.478,2H13a3,3,0,0,0,0-6Zm0-8a1,1,0,1,1-1,1A1,1,0,0,1,13,2ZM3,8a3,3,0,0,0-3,3c0,1.656,3,5,3,5s3-3.344,3-5A3,3,0,0,0,3,8Zm0,4a1,1,0,1,1,1-1A1,1,0,0,1,3,12Z" fill="#143a89"/>
                            </svg>
                            <?php } ?>
                        </a>
                    <?php }elseif(get_sub_field('anzeige') == "Seite"){ ?>
                        <a href="<?php echo get_sub_field('link'); ?>" class="header-bar-item">
                            <?php echo get_sub_field('header_content'); ?>
                            <?php if(get_sub_field('icon') == "telefon"){ ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                    <path id="FontAwsome_phone-alt_" data-name="FontAwsome (phone-alt)" d="M15.544,11.313l-3.5-1.5a.75.75,0,0,0-.875.216l-1.55,1.894A11.583,11.583,0,0,1,4.081,6.385l1.894-1.55a.748.748,0,0,0,.216-.875L4.691.46A.755.755,0,0,0,3.831.025L.581.775A.75.75,0,0,0,0,1.506a14.5,14.5,0,0,0,14.5,14.5.75.75,0,0,0,.731-.581l.75-3.25a.759.759,0,0,0-.438-.863Z" transform="translate(0 -0.006)" fill="#143a89"/>
                                </svg>
                            <?php } else if(get_sub_field('icon') == "mail"){ ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18.667" height="14" viewBox="0 0 18.667 14">
                                    <path id="FontAwsome_envelope_" data-name="FontAwsome (envelope)" d="M16.917,64H1.75A1.75,1.75,0,0,0,0,65.75v10.5A1.75,1.75,0,0,0,1.75,78H16.917a1.75,1.75,0,0,0,1.75-1.75V65.75A1.75,1.75,0,0,0,16.917,64Zm0,1.75v1.488c-.817.666-2.121,1.7-4.907,3.882-.614.483-1.83,1.643-2.677,1.63-.846.014-2.063-1.147-2.677-1.63C3.871,68.939,2.568,67.9,1.75,67.238V65.75ZM1.75,76.25V69.483c.835.665,2.02,1.6,3.826,3.013.8.627,2.192,2.012,3.757,2,1.557.008,2.935-1.356,3.757-2,1.806-1.414,2.991-2.348,3.826-3.013V76.25Z" transform="translate(0 -64)" fill="#143a89"/>
                                </svg>
                            <?php }else{ ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                    <path id="FontAwsome_route_" data-name="FontAwsome (route)" d="M13,10H10a1,1,0,0,1,0-2h3s3-3.344,3-5a3,3,0,0,0-6,0,6.592,6.592,0,0,0,1.416,3H10a3,3,0,0,0,0,6h3a1,1,0,0,1,0,2H5.8a21.575,21.575,0,0,1-1.478,2H13a3,3,0,0,0,0-6Zm0-8a1,1,0,1,1-1,1A1,1,0,0,1,13,2ZM3,8a3,3,0,0,0-3,3c0,1.656,3,5,3,5s3-3.344,3-5A3,3,0,0,0,3,8Zm0,4a1,1,0,1,1,1-1A1,1,0,0,1,3,12Z" fill="#143a89"/>
                                </svg>
                            <?php } ?>
                        </a>
                    <?php }else{ ?>
                        <span class="header-bar-item">
                    <?php echo get_sub_field('header_content'); ?>
                </span>
                    <?php } ?>
                <?php endwhile; ?>
            </div>
        </div>
	</header>


<div class="custom-popup">
    <div class="popup">
        <div class="popup-content">
            <div class="popup-close">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                    <path id="FontAwsome_times_" data-name="FontAwsome (times)" d="M9.654,87l3.98-3.98a1.251,1.251,0,0,0,0-1.769l-.885-.885a1.251,1.251,0,0,0-1.769,0L7,84.346l-3.98-3.98a1.251,1.251,0,0,0-1.769,0l-.885.885a1.251,1.251,0,0,0,0,1.769L4.346,87,.366,90.98a1.251,1.251,0,0,0,0,1.769l.885.885a1.251,1.251,0,0,0,1.769,0L7,89.654l3.98,3.98a1.251,1.251,0,0,0,1.769,0l.885-.885a1.251,1.251,0,0,0,0-1.769Z" transform="translate(0 -80)" fill="#fff"/>
                </svg>
            </div>
            <?php echo get_field('inhalt', 'option'); ?>
            <?php while(have_rows('bereiche', 'option')) : the_row(); ?>
                <div class="bereich">
                    <h5><?php echo get_sub_field('uberschrift'); ?></h5>
                    <?php
                    $table = get_sub_field( 'offnungszeiten' );

                    if ( ! empty ( $table ) ) {
                        echo '<table border="0" cellpadding="0" cellspacing="0" class="oeffnungszeiten-table">';
                        if ( ! empty( $table['caption'] ) ) {
                            echo '<caption>' . $table['caption'] . '</caption>';
                        }
                        if ( ! empty( $table['header'] ) ) {
                            echo '<thead>';
                                echo '<tr>';
                                foreach ($table['header'] as $th) {
                                    echo '<th>';
                                    echo $th['c'];
                                    echo '</th>';
                                }
                                echo '</tr>';
                            echo '</thead>';
                        }
                        echo '<tbody>';
                        foreach ( $table['body'] as $tr ) {
                            echo '<tr>';
                            foreach ( $tr as $td ) {
                                echo '<td>';
                                echo $td['c'];
                                echo '</td>';
                            }
                            echo '</tr>';
                        }
                        echo '</tbody>';
                        echo '</table>';
                    }
                    ?>
                </div>
            <?php endwhile; ?>
        </div>
        <div class="popup-sidebar">
            <a href="#" class="btn-calendar">
                <svg xmlns="http://www.w3.org/2000/svg" width="15.75" height="18" viewBox="0 0 15.75 18">
                    <path id="FontAwsome_calendar-alt_" data-name="FontAwsome (calendar-alt)" d="M0,16.313A1.688,1.688,0,0,0,1.688,18H14.062a1.688,1.688,0,0,0,1.688-1.687V6.75H0ZM11.25,9.422A.423.423,0,0,1,11.672,9h1.406a.423.423,0,0,1,.422.422v1.406a.423.423,0,0,1-.422.422H11.672a.423.423,0,0,1-.422-.422Zm0,4.5a.423.423,0,0,1,.422-.422h1.406a.423.423,0,0,1,.422.422v1.406a.423.423,0,0,1-.422.422H11.672a.423.423,0,0,1-.422-.422Zm-4.5-4.5A.423.423,0,0,1,7.172,9H8.578A.423.423,0,0,1,9,9.422v1.406a.423.423,0,0,1-.422.422H7.172a.423.423,0,0,1-.422-.422Zm0,4.5a.423.423,0,0,1,.422-.422H8.578A.423.423,0,0,1,9,13.922v1.406a.423.423,0,0,1-.422.422H7.172a.423.423,0,0,1-.422-.422Zm-4.5-4.5A.423.423,0,0,1,2.672,9H4.078a.423.423,0,0,1,.422.422v1.406a.423.423,0,0,1-.422.422H2.672a.423.423,0,0,1-.422-.422Zm0,4.5a.423.423,0,0,1,.422-.422H4.078a.423.423,0,0,1,.422.422v1.406a.423.423,0,0,1-.422.422H2.672a.423.423,0,0,1-.422-.422ZM14.062,2.25H12.375V.563A.564.564,0,0,0,11.812,0H10.687a.564.564,0,0,0-.562.563V2.25h-4.5V.563A.564.564,0,0,0,5.062,0H3.938a.564.564,0,0,0-.562.563V2.25H1.688A1.688,1.688,0,0,0,0,3.938V5.625H15.75V3.938A1.688,1.688,0,0,0,14.062,2.25Z" fill="#fff"/>
                </svg>
                Termin buchen
            </a>
            <a href="mailto:info@mvzbremen-mitte.de" class="btn-e-mail">
                <svg xmlns="http://www.w3.org/2000/svg" width="8.496" height="14" viewBox="0 0 8.496 14">
                    <path id="FontAwsome_chevron-right_" data-name="FontAwsome (chevron-right)" d="M35.765,45.2l-6.231,6.231a.769.769,0,0,1-1.088,0l-.727-.727a.769.769,0,0,1,0-1.087l4.938-4.961L27.719,39.7a.769.769,0,0,1,0-1.087l.727-.727a.769.769,0,0,1,1.088,0l6.231,6.231A.769.769,0,0,1,35.765,45.2Z" transform="translate(-27.494 -37.657)" fill="#fff"/>
                </svg>
                E-Mail schreiben
            </a>
            <?php echo get_field('sidebar', 'option'); ?>
        </div>
    </div>
</div>


<div class="modal micromodal-slide" id="dyn-modal" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close="">
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="dyn-modal-title">
            <header class="modal__header">
                <p class="modal__title" id="dyn-modal-title"></p>
                <button class="modal__close" aria-label="Close modal" data-micromodal-close=""></button>
            </header>
            <main class="modal__content" id="dyn-modal-content">
            </main>
        </div>
    </div>
</div>
