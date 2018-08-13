<?php get_header(); ?>

<?php
$args = array(
    'post_type' => 'beer'
);
$beers = new WP_Query( $args );

if( $beers->have_posts() ) {
    while( $beers->have_posts() ) {
        $beers->the_post();

        get_template_part( 'content', get_post_format() );
    }
} else {
    echo 'Oh ohm no beers!';
}
?>

<?php get_footer(); ?>
