<div class="col-sm-offset-1 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
        <ul>
            <?php if ( have_posts() ) :
                while ( have_posts() ) : the_post(); ?>
                    <li>
                        <?= get_the_title(); ?>
                    </li>
                <?php endwhile;
            endif; ?>
        </ul>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
    </div>
    <div class="sidebar-module">
        <h4>Archives</h4>
        <ol class="list-unstyled">
            <a href="">All</a>
        </ol>
        <ol class="list-unstyled">
            Beer
            <?php wp_get_archives( array('type'=>'daily', 'post_type'=>'beer') ); ?>
        </ol>
        <ol class="list-unstyled">
            Other
            <?php wp_get_archives( 'type=daily'); ?>
        </ol>
    </div>
    <div class="sidebar-module">
        <h4>Where You Can Find Me</h4>
        <ol class="list-unstyled">
            <li><a href="https://github.com/AwayRoller">GitHub</a></li>
            <li><a href="https://www.linkedin.com/in/zsolt-vizi">LinkedIn</a></li>
        </ol>
    </div>
</div>