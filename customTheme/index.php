<?php get_header(); ?>

<main>
    <?php get_template_part('template-parts/section', 'services'); ?>
    <?php get_template_part('template-parts/section', 'about'); ?>
    <?php get_template_part('template-parts/section', 'info'); ?>
    <?php get_template_part('template-parts/section', 'sertification'); ?>
    <?php get_template_part('template-parts/section', 'reasons'); ?>

    <img class="figure-item" src="<?php echo get_template_directory_uri();?>/images/bg-main.png" alt="figure main">
    <img class="figure-item-2" src="<?php echo get_template_directory_uri();?>/images/bg-main2.png" alt="figure main">

    <?php get_template_part('template-parts/section', 'getone'); ?>
    <?php get_template_part('template-parts/section', 'contacts'); ?>
</main>

<?php get_footer(); ?>