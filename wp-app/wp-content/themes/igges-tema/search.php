<?php
get_header(); ?>
<!---- Loop starts ----->
<?php if(have_posts()):
    while(have_posts()):
        the_post(); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <h1>
                        <?php the_title() ?>
                    </h1>
                    <div class="search-thumbnail">
                        <img src="<?= the_post_thumbnail_url("large") ?>" alt="">
                    </div>
                    <?php the_content() ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php endwhile; ?>
<?php endif; ?>
<?php
get_footer();
?>
