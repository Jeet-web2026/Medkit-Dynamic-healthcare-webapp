<?php
// Template Name:Home Template
get_header('link');
get_header();
?>
<main id="home-main" <?php body_class(); ?>>
    <?php the_content(); ?>
</main>
<?php
get_footer();
?>