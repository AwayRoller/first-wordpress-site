<?php

/**
 * Template Name: Blog
 * Description: Here is the blog with all post types;
 */
?>

<?php get_header();

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$the_query = new WP_Query([
    'post_type' => ['post', 'beer'],
    'posts_per_page' => 3,
    'paged' => $paged,
    'order' => 'DESC'
]);
?>

<section class="page-title-container">
    <div class="container">
        <div class="row title-row">
            <div class="col-md-12">
                <h1 class="page-title">The Blog Section</h1>
            </div>
        </div>
    </div>
</section>
<section class="main-container container">
    <div class="post-title-row row">
        <div class="col-1"></div>
        <div class="col-7">
            <h1 class="post-title">Here you find the posts:</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-1"></div>

        <div class="col-8">
            <div class="post-container">
                <ul>
                    <?php if ( $the_query->have_posts() ) :
                        while ( $the_query->have_posts() ) : $the_query->the_post();
                            get_template_part( 'content' );
                        endwhile;
                    else :
                        echo 'Oh ohm no content!';
                    endif;

                    wp_reset_postdata();
                    ?>
                </ul>
            </div>
        </div>
        <div class="col-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
    <div class="post-nav-row row">
        <div class="col-1"></div>
        <div class="col-8 post-nav-col">
            <?php if ( $the_query->have_posts() ) :
                previous_posts_link('&laquo; Previous Page', $the_query ->max_num_pages);
                next_posts_link('Next Page &raquo;', $the_query ->max_num_pages);
            endif; ?>
        </div>
        <div class="col-3"></div>
    </div>
</section>

<?php get_footer(); ?>
