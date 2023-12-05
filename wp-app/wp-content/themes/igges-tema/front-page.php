<?php get_header(); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-11">
                    <div clas="hero">
                        <?php if (have_posts()):
                            while (have_posts()):
                                the_post() ?>
                                <img src="<?= the_post_thumbnail_url("large") ?>" alt="">
                                <div class="text">
                                    <h1>
                                        <?php the_title() ?>
                                    </h1>
                                    <p>
                                        <?php the_content(); ?>
                                    </p>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
