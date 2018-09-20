<article class="content-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="article-card card">
        <div class="card-body">
            <header class="content-header">
                <h2 class="entry-title"><?= get_the_title(); ?></h2>
            </header>
            <div class="row">
                <div class="col-2"> Topic:
                    <a href="<?= get_post_type(); ?>" >
                        <?= get_post_type(); ?>
                    </a>
                </div>
            </div>
            <div class="row img-row">
                <div class="col-12">
                    <div class="content-img-container">
                        <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail('single-image');
                        } else { ?>
                            <img class="content-single-img" src="<?php bloginfo('template_directory'); ?>/assets/images/random.jpeg" alt="<?php the_title(); ?>" />
                        <?php } ?>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
            <p class="post-content">
                <?php echo get_the_content(); ?>
            </p>
            <div class="row content-row">
                <div class="col-6">
                    <p class="content-date">
                        <?= get_the_date(); ?>
                        <a class="content=author" href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>">
                            <?= get_the_author(); ?>
                        </a>
                    </p>
                </div>
                <div class="col-6">
                    <a href="<?= home_url(); ?>/index.php/blog" class="btn btn-primary post-btn active" role="button" aria-pressed="true">Back to Blog</a>
                </div>
            </div>
        </div>
    </div>
</article>

