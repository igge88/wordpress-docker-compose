<?php get_header(); ?>
<main>
    <section>

        <div class="container">
            <div class="row">

                <div id="primary" class="col-xs-12 col-md-9">
                    <h1>
                        <?php single_post_title(); ?>
                    </h1>
                </div>

            </div>
            <div class="row">
                <div class="col-xs-12 col-md-9">
                    <?php if (have_posts()):
                        while (have_posts()):
                            the_post(); ?>

                            <article>
                                <a href="<?= the_permalink(); ?>">
                                    <h1 class="title">
                                        <?= the_title(); ?>
                                    </h1>
                                </a>
                                <img src="<?= the_post_thumbnail_url("large") ?>" alt="">
                                <ul class="meta">
                                    <li>
                                        <i class="fa fa-container"></i>
                                        <?= the_time('j F, Y') ?>
                                    </li>
                                    <li class="fa fa-user">
                                        <?= the_author_posts_link(); ?>
                                    </li>
                                    <li><i class="fa fa-user"></i>
                                        <?= the_category(", "); ?>
                                    </li>
                                </ul>
                                <?= the_excerpt(); ?>
                            </article>

                        <?php endwhile; ?>

                    <?php endif; ?>
                </div>

                <div id="sidebar" class="col-xs-12 col-md-3">
                    <aside>
                        <?php get_sidebar(); ?>
                    </aside>
                </div>

            </div>

            <div class="row">
                <div class="col-xs-12 col-md-9" style="text-align:center">

                    <?=
                        paginate_links(
                            array(
                                'total' => $wp_query->max_num_pages,
                                'prev_text' => __('Föregående'),
                                'next_text' => __('Nästa'),
                            )
                        );
                    ?>
                </div>
            </div>

        </div>
    </section>
</main>


<?php get_footer() ?>
