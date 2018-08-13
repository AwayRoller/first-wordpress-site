<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First WP</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri()?>/public/bootstrap/bootstrap-4.0.0-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri()?>/public/bootstrap/bootstrap-4.0.0-dist/css/bootstrap.min.css" >

    <link href="<?= get_stylesheet_directory_uri()?>/style.css" rel="stylesheet"/>
    <?php wp_head(); ?>
</head>
<body>
    <header class="nav-header">
        <nav class="nav-container">
            <div class="container">
                <div class="row">
                    <div class="col-1">
                        <img class="logo" src="<?= get_stylesheet_directory_uri()?>/assets/images/artkonekt-logo.svg" alt="placeholder">
                    </div>
                    <div class="col-6"></div>
                    <div class="col-5 nav-col">
                            <?php wp_nav_menu( array( 'first-wp-theme' => 'main-menu' ) ); ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="page-title-container container">
        <h1 class="page-title">Welcome to My First WP Site</h1>
        <h2 class="page-description">It's all about some random posts</h2>
    </div>


