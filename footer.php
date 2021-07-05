<?php
// ----------------------------------------------------------------------
// ----------------------------------------------------------------------
// ----------------------------------------------------------------------
// Globale Einstellungen werden geladen

$global_social		= get_field('opt_socialmedia', 'option') ?: false;
$global_contact		= get_field('opt_contact', 'option') ?: false;
$global_support		= get_field('opt_support', 'option') ?: false;

$global_logos 		= get_field('opt_logos', 'option') ?: false;
$global_footer 		= get_field('opt_footer', 'option') ?: false;

// ----------------------------------------------------------------------
// Überschreibende Einstellungen werden geladen

$override_logos		= get_field('override_logos') ? get_field('instance_logos')['opt_logos'] : false;
$override_footer	= get_field('override_footer') ? get_field('instance_footer')['opt_footer'] : false;
$override_support	= get_field('override_support') ? get_field('instance_support')['opt_support'] : false;

// ----------------------------------------------------------------------
// Überschreibende Einstellungen werden geladen

$page_logos		= $override_logos ?: $global_logos;
$page_footer	= $override_footer ?: $global_footer;
$page_support	= $override_support ?: $global_support;

// ----------------------------------------------------------------------
?>

<footer class="footer">
	<div class="footer-inner">
        <div class="footer-col">
            <?php echo wp_nav_menu(array('menu' => 'Hauptmenü')); ?>
        </div>
        <div class="footer-col">
            <p>
                <strong>MVZ Bremen-Mitte</strong> <br />
                Außer der Schleifmühle 64/66 <br />
                28203 Bremen
            </p>
            <a href="#" class="button-plain">
                <svg xmlns="http://www.w3.org/2000/svg" width="8.496" height="14" viewBox="0 0 8.496 14">
                    <path id="FontAwsome_chevron-right_" data-name="FontAwsome (chevron-right)" d="M35.765,45.2l-6.231,6.231a.769.769,0,0,1-1.088,0l-.727-.727a.769.769,0,0,1,0-1.087l4.938-4.961L27.719,39.7a.769.769,0,0,1,0-1.087l.727-.727a.769.769,0,0,1,1.088,0l6.231,6.231A.769.769,0,0,1,35.765,45.2Z" transform="translate(-27.494 -37.657)" fill="#143a89"/>
                </svg>
                Anfahrt, ÖVB und Parken
            </a>
            <div class="flex-wrapper">
                <div class="col">
                    <p>
                        <strong>Innere Medizin</strong> <br />
                        0421 - 323323 <br />
                    </p>
                    <a href="#" class="button-plain">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8.496" height="14" viewBox="0 0 8.496 14">
                            <path id="FontAwsome_chevron-right_" data-name="FontAwsome (chevron-right)" d="M35.765,45.2l-6.231,6.231a.769.769,0,0,1-1.088,0l-.727-.727a.769.769,0,0,1,0-1.087l4.938-4.961L27.719,39.7a.769.769,0,0,1,0-1.087l.727-.727a.769.769,0,0,1,1.088,0l6.231,6.231A.769.769,0,0,1,35.765,45.2Z" transform="translate(-27.494 -37.657)" fill="#143a89"/>
                        </svg>
                        Jetzt anrufen
                    </a>
                </div>
                <div class="col">
                    <p>
                        <strong>Gynäkoligie</strong> <br />
                        0421 - 704446<br/>
                    </p>
                    <a href="#" class="button-plain">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8.496" height="14" viewBox="0 0 8.496 14">
                            <path id="FontAwsome_chevron-right_" data-name="FontAwsome (chevron-right)" d="M35.765,45.2l-6.231,6.231a.769.769,0,0,1-1.088,0l-.727-.727a.769.769,0,0,1,0-1.087l4.938-4.961L27.719,39.7a.769.769,0,0,1,0-1.087l.727-.727a.769.769,0,0,1,1.088,0l6.231,6.231A.769.769,0,0,1,35.765,45.2Z" transform="translate(-27.494 -37.657)" fill="#143a89"/>
                        </svg>
                        Jetzt anrufen
                    </a>
                </div>
                <a href="mailto:info@mvzbremen-mitte.de" class="btn-e-mail">
                    <svg xmlns="http://www.w3.org/2000/svg" width="8.496" height="14" viewBox="0 0 8.496 14">
                        <path id="FontAwsome_chevron-right_" data-name="FontAwsome (chevron-right)" d="M35.765,45.2l-6.231,6.231a.769.769,0,0,1-1.088,0l-.727-.727a.769.769,0,0,1,0-1.087l4.938-4.961L27.719,39.7a.769.769,0,0,1,0-1.087l.727-.727a.769.769,0,0,1,1.088,0l6.231,6.231A.769.769,0,0,1,35.765,45.2Z" transform="translate(-27.494 -37.657)" fill="#fff"/>
                    </svg>
                    E-Mail schreiben
                </a>
            </div>
        </div>
        <div class="footer-col">
            <?php while(have_rows('allgemeine_informationen', 'option')) : the_row(); ?>
                <?php if(get_sub_field('anzeige') == "PopUp"){ ?>
                    <a data-custom-open="dyn-modal" data-content="<?= urlencode(get_sub_field('popup_content')); ?>" data-title="<?= get_sub_field('header_content'); ?>" class="header-bar-item open-popup">
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
        <div class="footer-col">
            <?php include_once 'tpl/partials/logo-function.php'; ?>
            <?php include 'tpl/partials/logo.php'; ?>
        </div>
        <div class="meta-menu">
            <?php echo wp_nav_menu(array('menu' => 'Footer')); ?>
        </div>
    </div>
</footer>

<?php
include 'tpl/partials/offcanvas.php';
wp_footer() ;
?>

</body>
</html>
