<?php
get_header('link');
get_header();
?>
<main id="main">
    <div class="container-fluid">
        <div class="card border-0 bg-transparent p-5 overflow-hidden">
            <div class="card-body">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</main>
<?php
get_footer();
?>