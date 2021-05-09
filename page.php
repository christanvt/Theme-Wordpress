<?php

get_header();

if (have_posts()) :
    the_post();
?>
    <article class="row">
        <h2 class="col-12 title"><?php the_title(); ?></h2>
        <?php if (has_post_thumbnail()) : ?>
            <div class="col-12 image">
                <?php the_post_thumbnail('medium'); ?>
            </div>
        <?php endif; ?>
        <div>
            <?php the_content(); ?>
        </div>

    </article>
<?php
endif;

get_footer();
