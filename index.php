<?php get_header(); ?>



<section class="post-container">
    <div class="container">
        <div class="col-2"></div>
        <div class="col-8">
            <h1 class="post-title">Here you find the posts:</h1>
            <ul>
                <?php get_posts(); ?>
            </ul>
        </div>
        <div class="col-2"></div>
    </div>
</section>



<?php echo "Hali"; ?>

<?php get_footer(); ?>