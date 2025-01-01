<!DOCTYPE html>
<html>

<head>
    <title>Cafe.coffee</title>

    <!-- meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- meta -->

    <!-- fontawesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- fontawesome link -->

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <!-- google font -->

    <!-- cutom css link -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <!-- cutom css link -->


</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="left">
            <h2><i class="fa-solid fa-mug-saucer"></i>Cafe</h2>
        </div>
        <div class="right">
            <?php wp_nav_menu(
                array('theme_location' => 'Primary-menu', 'menu_class' => 'navbar-nav')
            )
            ?>
        </div>
    </nav>
    <!-- navbar -->