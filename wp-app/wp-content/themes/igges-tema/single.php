<?php
/*
    Template Name: single-page
*/
get_header();
?>

<div class="main-content">
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            ?>
            <article class="single-post">
                <h1>
                    <?php the_title(); ?>
                </h1>
                <div class="thumbnail">
                    <?php the_post_thumbnail('large'); ?>
                </div>
                <p class="meta-info">
                    <?php the_date(); ?> | Category:
                    <?php the_category(', '); ?>
                </p>
                <?php the_content(); ?>
            </article>
            <?php
        endwhile;
    else:
        echo 'Ingen artikel hittades.';
    endif;
    ?>
</div>

<?php get_footer(); ?>
