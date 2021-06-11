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
                <div class="button-wrapper">
                    <span class="ghostkit-button ghostkit-button-md ghostkit-custom-Z1aV2wz">
                        <span class="ghostkit-button-icon ghostkit-button-icon-left">
                            <svg class="ghostkit-svg-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.21967 6.2197C9.51256 5.9268 9.98744 5.9268 10.2803 6.2197L15.5303 11.4697C15.8232 11.7626 15.8232 12.2374 15.5303 12.5303L10.2803 17.7803C9.98744 18.0732 9.51256 18.0732 9.21967 17.7803C8.92678 17.4874 8.92678 17.0126 9.21967 16.7197L13.9393 12L9.21967 7.2803C8.92678 6.9874 8.92678 6.5126 9.21967 6.2197Z" fill="currentColor"></path>
                            </svg>
                        </span>
                        <span class="ghostkit-button-text">E-MAIL SCHREIBEN</span>
                    </span>
                </div>
            </div>
        </div>
        <div class="footer-col">
            CONNECTOR
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
