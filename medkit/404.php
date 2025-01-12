<?php
get_header('link');
get_header();
echo '
<section id="error-page">
    <div class="container-fluid p-5 h-100">
        <div class="card border-0 bg-transparent">
        <div class="card-body">
            <h2 class="fs-1 fw-bold text-center mb-2">404</h2>
            <p class="text-center fw-bold fs-5">Page not found!</p>
            <center>
                <a href="#" class="btn btn-primary rounded-pill fw-bold mt-3">Back to home</a>
            </center>
        </div>
        </div>
    </div>
</section>
';
get_footer();
