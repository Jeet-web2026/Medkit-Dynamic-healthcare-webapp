<nav class="navbar navbar-expand-lg py-2 px-lg-5">
    <div class="container-fluid px-lg-5">
        <a class="navbar-brand fw-bold text-primary" style="font-size: 5vh;" href="<?php echo site_url() ?>">MedKit</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContentfirst" aria-controls="navbarSupportedContentfirst" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContentfirst">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                <li class="nav-item">
                    <a class="nav-link me-3" href="">
                        <div class="d-flex align-items-center">
                            <div class="me-2">
                                <i class="fa-solid text-primary fa-building shadow p-2 rounded" style="font-size: 5vh;"></i>
                            </div>
                            <div>
                                <p class="text-dark text-capitalize mb-0 fw-bold" style="font-size: 2vh;">Garden Reach</p>
                                <h5 class="text-primary text-capitalize fw-bold" style="font-size: 2.5vh;">Kolkata, pin: 700024</h5>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-3" href="tel:+919163715179">
                        <div class="d-flex align-items-center">
                            <div class="me-2">
                                <i class="fa-solid text-primary fa-phone shadow p-2 rounded" style="font-size: 5vh;"></i>
                            </div>
                            <div>
                                <p class="text-dark text-capitalize mb-0 fw-bold" style="font-size: 2vh;">cal us</p>
                                <h5 class="text-primary text-capitalize fw-bold" style="font-size: 2.5vh;">+91 9163715179</h5>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn border-0 btn-primary text-light shadow text-capitalize fw-bold rounded-3 px-3" style="font-size: 3vh;" href="">book appointment</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<nav class="navbar navbar-expand-lg py-2 px-lg-5">
    <div class="container-fluid px-lg-5">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContentlast" aria-controls="navbarSupportedContentlast" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContentlast">
            <?php echo wp_nav_menu(array('theme_location' => 'Primary-menu', 'menu_class' => 'navbar-nav')) ?>
            <div class="d-flex align-items-center ms-auto">
                <p class="text-uppercase fw-bold text-black me-3">follow us :</p>
                <a href=""><i class="fa-brands fa-facebook-f text-primary me-3" style="font-size: 2vh;"></i></a>
                <a href=""><i class="fa-brands fa-twitter text-primary me-3" style="font-size: 2vh;"></i></a>
                <a href=""><i class="fa-brands fa-instagram text-primary" style="font-size: 2vh;"></i></a>
            </div>
        </div>
    </div>
</nav>