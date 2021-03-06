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

include 'post/load-vars.php';

?>

<article <?php post_class('post post--box'); ?> id="post-<?php the_ID(); ?>">
	<div class="post-inner">

		<?php if(! $hide_images) { ?>
			<?php include 'post/thumbnail.php'; ?>
		<?php } ?>

		<div class="post-content stellenanzeige">
			<?php include 'post/header.php'; ?>
			<?php if(! $hide_descr) { ?>
				<?php the_excerpt(); ?>
			<?php } ?>
            <a href="<?= esc_url( get_permalink() ) ?>">
                <?= baw_svg('solid/arrow-right') ?> Mehr erfahren
            </a>
		</div>

	</div>

</article>
