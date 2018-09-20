<?php

/**
 * Template Name: Home
 * Description: The homepage with some info;
 */
?>

<?php get_header();

$basicPosts = new WP_Query([
    'post_type' => ['post'],
    'posts_per_page' => 1,
    'order' => 'DESC'
]);
$beerPosts = new WP_Query([
    'post_type' => ['beer'],
    'posts_per_page' => 2,
    'order' => 'DESC'
]);
?>

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
            <div class="row title-row">
                <div class="col-xl-4">
                    <div class="front-card">
                        <div class="front-card-title">
                            <h2>Hoooraaaay! I did it!</h2>
                        </div>
                        <div class="front-card-img">
                            <img class="content-img" src="<?php bloginfo('template_directory'); ?>/assets/images/random.jpeg" alt="" />
                        </div>
                        <div class="front-card-content">
                            <p>Random posts blog on it's way</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>
                </div>
            </div>
        </div>
    </section>

    <section class="page-content-container">
        <div class="container">
            <div class="row title-row">
                <div class="col-12">
                    <h2 class="page-content-title">What did I use?</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="row title-row">
                        <div class="col-12">
                            <h2>Wordpress</h2>
                        </div>
                    </div>
                    <p class="page-content-text">
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="row title-row">
                        <div class="col-12">
                            <h2>HTML</h2>
                        </div>
                    </div>
                    <p class="page-content-text">
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="row title-row">
                        <div class="col-12">
                            <h2>CSS</h2>
                        </div>
                    </div>
                    <p class="page-content-text">
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                    </p>
                </div>
            </div>
        </div>

        <section class="page-title-container">
            <div class="container">
                <div class="row title-row">
                    <div class="col-md-12">
                        <h2 class="page-description">Check the most recent!</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="row recent-title-row">
                            <div class="col-12">
                                <h2>Basic posts</h2>
                            </div>
                        </div>
                        <div class="post-container">
                            <ul>
                                <?php if ( $basicPosts->have_posts() ) :
                                    while ( $basicPosts->have_posts() ) : $basicPosts->the_post();
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
                    <div class="col-6">
                        <div class="row recent-title-row">
                            <div class="col-12">
                                <h2 class="">Beer posts</h2>
                            </div>
                        </div>
                        <div class="post-container">
                            <ul>
                                <?php if ( $beerPosts->have_posts() ) :
                                    while ( $beerPosts->have_posts() ) : $beerPosts->the_post();
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
                </div>
            </div>
        </section>
    </section>

<?php get_footer(); ?>