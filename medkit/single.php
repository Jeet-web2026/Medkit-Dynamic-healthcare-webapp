<?php get_header('link'); ?>
<?php get_header(); ?>
<?php the_post(); ?>
<?php $imagePath = wp_get_attachment_image_src(get_post_thumbnail_id()); ?>
<section id="posts">
    <div class="container-fluid p-5">
        <div class="card mb-3 border-0 shadow">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?php echo $imagePath[0] ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-3 pt-2" style="font-size: 4vh;"><?php the_title() ?></h5>
                        <p class="my-2 fw-bold text-secondary mb-3"><?php echo get_the_date(); ?>, <?php echo get_the_author(); ?></p>
                        <p><?php the_content() ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php comments_template(); ?>
    </div>
</section>
<?php get_footer() ?>