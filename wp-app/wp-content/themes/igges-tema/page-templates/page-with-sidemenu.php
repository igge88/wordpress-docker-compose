<?php
/*
Template Name: page-with-sidemenu
*/

get_header();
?>

<main>
    <section>
        <div class="container">
            <?php if(have_posts()):
                while(have_posts()):
                    the_post(); ?>

                    <div class="row">
                        <div id="primary" class="col-xs-12 col-md-9 col-md-push-3">
                            <h1 style="margin-top: 0">
                                <?php the_title(); ?>
                            </h1>
                            <p>
                                <?php the_content(); ?>
                            </p>
                        </div>
                        <aside id="secondary" class="col-xs-12 col-md-2 col-md-pull-9">
                            <ul class="side-menu">
                                <li>
                                    <?php
                                    wp_nav_menu(array('theme_location' => 'sidemenu'
                                    ));
                                    ?>
                                </li>
                            </ul>
                        </aside>
                    </div>
                <?php endwhile; ?>

                <div class="row">
                    <div class="col-xs-12 col-md-9" style="text-align:center">

                        <?= paginate_links(
                            array(
                                'total' => $wp_query->max_num_pages,
                                'prev_text' => __('Back', 'Next'),
                            )
                        );
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php endif; ?>
<?php
get_footer();
?>
