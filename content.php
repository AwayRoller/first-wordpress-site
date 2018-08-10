<article class="content-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="article-card card">
        <div class="card-body">
            <header class="content-header">
                <h2 class="entry-title"><?= get_the_title(); ?></h2>
            </header>
            <!--<div class="content-img">
                <img class="img-item" src="<?php /*get_the_post_thumbnail(); */?>" alt="">
            </div>-->

            <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } else { ?>
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/random.jpeg" alt="<?php the_title(); ?>" />
            <?php } ?>

            <p class="post-content"><?= get_the_content(); ?></p>
            <p class="content-date">
                <?= get_the_date(); ?>
                <a class="content=author" href="#">
                    <?= get_the_author(); ?>
                </a>
            </p>
        </div>
    </div>

</article>