<?php
get_header();
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
        <article class="row">
            <div class="col-9 order-2">
                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                <div class="col-lg-10">
                    <div><?php the_excerpt(); ?></div>
                </div>
                <?php
                $date = get_the_date();
                if ($date) :
                ?>
                    <div class="tags">Date de publication :
                        <?= $date ?>
                    </div>
                <?php
                endif;
                ?>
                <?php
                $categories = get_the_category();
                if ($categories) :
                ?>
                    <?php
                    foreach ($categories as $category) :
                        if ($category->term_id != 1) :
                    ?>
                            <div class="tags">Catégorie :
                                <a href="<?= esc_url(get_term_link($category)) ?>"><?= $category->name ?></a>
                            </div>
                    <?php
                        endif;
                    endforeach;
                    ?>
                <?php
                endif;
                ?>
                <?php
                $tags = get_the_tags();
                if ($tags) :
                ?>
                    <div class="tags">Tags :
                        <?php foreach ($tags as $tag) : ?>
                            <a href="<?= esc_url(get_term_link($tag)) ?>"><?= $tag->name ?></a>
                        <?php endforeach; ?>
                    </div>
                <?php
                endif;
                ?>


            </div>
            <div class="col-3 order-1 right">
                <?php if (has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                <?php endif; ?>
            </div>
        </article>
<?php
    endwhile;
endif;
get_footer();
