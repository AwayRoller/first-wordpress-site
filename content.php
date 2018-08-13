<article class="content-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="article-card card">
        <div class="card-body">

            <header class="content-header">
                <h2 class="entry-title"><?= get_the_title(); ?></h2>
            </header>

            <div class="row img-row">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="content-img-container">

                        <?php if ( has_post_thumbnail() ) {
                            set_post_thumbnail_size(200, 200);
                            the_post_thumbnail();
                        } else { ?>
                            <img class="content-img" src="<?php bloginfo('template_directory'); ?>/assets/images/random.jpeg" alt="<?php the_title(); ?>" />
                        <?php } ?>

                    </div>

                </div>
                <div class="col-2"></div>
            </div>

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