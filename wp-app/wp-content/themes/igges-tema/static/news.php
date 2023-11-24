<?php get_header(); ?>

<div class="main-content">
    <h1>Aktuella Nyheter</h1>
    <?php
    // Loopa igenom och visa alla nyheter
    $args = array('post_type' => 'post', 'posts_per_page' => -1);
    $news_query = new WP_Query($args);

    if ($news_query->have_posts()) :
        while ($news_query->have_posts()) : $news_query->the_post();
    ?>
            <article>
                <h2><?php the_title(); ?></h2>
                <?php the_excerpt(); ?>
                <div class="thumbnail">
                    <?php the_post_thumbnail('thumbnail'); ?>
                </div>
                <a href="<?php the_permalink(); ?>">Läs mer</a>
            </article>
    <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo 'Inga nyheter hittades.';
    endif;
    ?>
</div>

<?php get_footer(); ?>
