<?php get_header() ?>

    <section class="main-container container">
        <div class="post-title-row row">
            <div class="col-6 warning-col">
                <h1 class="post-title">Beware, may contain alcohol!!!!</h1>
            </div>
        </div>
        <div class="row">
            <div class="post-container">
                <ul>
                    <?php if ( have_posts() ) :
                        while ( have_posts() ) : the_post();
                            get_template_part( 'content-single');
                        endwhile;
                    else :
                        echo 'Oh ohm no content!';
                    endif; ?>
                </ul>
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

<?php get_footer() ?>