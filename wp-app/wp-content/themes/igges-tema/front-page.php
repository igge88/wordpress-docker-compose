<?php get_header(); ?>
<main>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div id="cover" class="col-xs-12">
                    <?php if(have_posts()):
                        while(have_posts()):
                            the_post() ?>
                            <div class="hero">
                                <div class="image-container">
                                    <img src="<?= the_post_thumbnail_url("large") ?>" alt="">
                                    <div class="text-overlay">
                                        <div class="text">
                                            <p>
                                                <?php the_content(); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
