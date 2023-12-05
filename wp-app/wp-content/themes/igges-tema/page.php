<?php
get_header();
?>
<!--- Loops starts --->
<?php if (have_posts()):
    while (have_posts()):
        the_post() ?>
        <main>
            <section>
                <div class="container">
                    <div class="row">
                        <div id="primary" class="col-xs-12 col-md-12">
                            <h1>
                                <?php the_title() ?>
                            </h1>
                            <p>
                                <?php the_content(); ?>
                            </p>
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
