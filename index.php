<?php get_header(); ?>

<section class="main-container container">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-8">
            <h1 class="post-title">Here you find the posts:</h1>
            <div class="post-container">
                <ul>
                    <?php
                    if ( have_posts() ) : while ( have_posts() ) : the_post();

                        get_template_part( 'content', get_post_format() );

                    endwhile; endif;
                    ?>
                </ul>
            </div>

        </div>
        <div class="col-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>