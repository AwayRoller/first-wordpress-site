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
                <div class="row nav-row">
                    <div class="col-sm-4 col-lg-2">
                        <img class="logo" src="<?= get_stylesheet_directory_uri()?>/assets/images/artkonekt-logo.svg" alt="placeholder">
                    </div>
                    <div class="col-sm-8 col-lg-5">
                        <div class="search-container">
                            <?php if (!is_page(array('about', 'contact')) && !is_front_page()) {
                                get_search_form();
                            }; ?>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-5 nav-col">
                        <?php wp_nav_menu( array( 'first-wp-theme' => 'main-menu' ) ); ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>


