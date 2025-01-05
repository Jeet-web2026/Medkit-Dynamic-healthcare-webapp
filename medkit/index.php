<?php
get_header('link');
get_header();
?>
<section id="pages">
    <div class="container-fluid p-5">
        <div class="row">
        <?php echo wp_pagenavi()?>
            <?php
            while(have_posts()){
                the_post();
                $imagePath = wp_get_attachment_image_src( get_post_thumbnail_id());
            ?>
            <div class="col-md-4 p-3">
                <div class="card shadow rounded-4">
                     <img src="<?php echo $imagePath[0]?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-3" style="font-size: 4vh;"><?php the_title()?></h5>
                        <p><?php the_content()?></p>
                        <p class="my-2 fw-bold"><?php echo get_the_date();?></p>
                        <a href="<?php the_permalink( )?>" class="btn shadow px-4 py-2 fn-500 border-0">Read more</a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>
<?php get_footer(); ?>