<?php get_header(); ?>


<section class="main-container container">
    <div class="post-title-row row">
        <div class="col-1"></div>
        <div class="col-8">
            <h1 class="post-title">
                <?php if (is_author() ) :
                    the_post();
                    echo 'Author archives: ' . get_the_author();
                    rewind_posts();
                elseif (is_tag() ) :
                    echo 'Tag';
                elseif (is_day() ) :
                    echo 'Daily Archives: ' . get_the_date();
                else :
                    echo 'Archives';
                endif; ?>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-8">

            <div class="post-container">
                <ul>
                    <?php if ( have_posts() ) :
                        while ( have_posts() ) : the_post();
                            get_template_part( 'content');
                        endwhile;
                    else :
                        echo 'Oh ohm no content!';
                    endif; ?>
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
