<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First WP</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/public/bootstrap/bootstrap-4.0.0-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/public/bootstrap/bootstrap-4.0.0-dist/css/bootstrap.min.css">

    <link href="<?= get_stylesheet_directory_uri()?>/style.css" rel="stylesheet"/>
    <?php /*wp_head(); */?>
</head>
<body>
    <header class="nav-header">

        <nav class="container">
            <?php wp_nav_menu( array( 'first-wp-theme' => 'main-menu' ) ); ?>
        </nav>

    </header>

    <div class="page-title-container container">
        <h1 class="page-title"> This is the Header </h1>
    </div>


