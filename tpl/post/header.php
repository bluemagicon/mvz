<header class="post-header">
    <?php if(! $hide_links) { ?>
        <a href="<?= esc_url( get_permalink() ) ?>">
    <?php } ?>
        <h4 class="post-title">
            <?= get_the_title(); ?>
        </h4>
    <?php if(! $hide_links) { ?>
        </a>
    <?php } ?>
</header>
