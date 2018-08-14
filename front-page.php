<?php
/**
 * Template Name: Custom Page - Front Page
 * Description: That's the Front Page.
 */
?>

<?php get_header(); ?>

    <div class="page-title-container container">
        <?php if (!is_home()) : ?>
            <h1 class="page-title">Welcome to My First WP Site</h1>
            <h2 class="page-description">It's all about some random posts</h2>
        <?php else : ?>
            <h1 class="page-title">The Blog Section</h1>
        <?php endif; ?>
    </div>

<?php get_footer(); ?>