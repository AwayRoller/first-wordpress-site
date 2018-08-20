<?php get_header(); ?>

<section class="page-title-container">
    <div class="container">
        <div class="row title-row">
            <div class="col-md-12">
                <?php if (!is_home()) : ?>
                    <h1 class="page-title">Welcome to My First WP Site</h1>
                    <h2 class="page-description">It's all about some random posts</h2>
                <?php else : ?>
                    <h1 class="page-title">The Blog Section</h1>
                <?php endif; ?>
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
                    <?php
                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post();

                            get_template_part( 'content', get_post_format() );

                        endwhile;
                    else :
                        echo 'Oh ohm no content!';
                    endif;
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
            <?php posts_nav_link($sep = ' '); ?>
        </div>
        <div class="col-3"></div>
    </div>
</section>

<?php get_footer(); ?>
