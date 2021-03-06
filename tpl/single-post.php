<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package braveandwray
 * @subpackage baw.base
 * @since braveandwray 1.0
 */

?>

<article <?php post_class('post post--detail'); ?>>
	<header class="single-header">
		<div class="alignwide">
			<div class="single-header-inner">
				<div class="uk-grid uk-flex-middle">
                    <div class="uk-width-1-2@m">
                        <div class="single-header-inner">
                            <a class="button-plain single" href="<?= get_permalink(222); ?>">
                                <?= baw_svg('solid/arrow-left') ?>
                                Zur News Übersicht
                            </a>
                            <h1 class="single-title">
                                <?= get_the_title(); ?>
                            </h1>
                            <?php the_content(); ?>
                            <!--
							<div class="post-meta">
								<div class="post-meta-item">
									<svg class="w-svg" role="img" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M4 22a8 8 0 1 1 16 0h-2a6 6 0 1 0-12 0H4zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4z" fill="currentColor"/></svg>
									<span>von <?= get_the_author_meta('display_name'); ?></span>
								</div>
								<?php if ( has_category() ) { ?>
									<div class="post-meta-item post-categories">
										<?php the_category( ' ' ); ?>
									</div>
								<?php } ?>
							</div>
							-->
                        </div>
                    </div>
					<?php if ( has_post_thumbnail() ) { ?>
						<div class="uk-width-1-2@m post-image">
							<?php the_post_thumbnail('baw-m'); ?>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</header>

	<div class="single-content entry-content">

	</div>

	<div class="single-footer">
		<div class="single-footer-inner alignwide">
			<?php get_template_part( 'tpl/single/navigation' ); ?>
		</div>
	</div>


</article>
