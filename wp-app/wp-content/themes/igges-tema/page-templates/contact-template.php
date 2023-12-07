<?php
/*
Template Name: contact-page-template
*/
get_header();
?>

<main>
    <section>
        <div id="contact-form" class="container">
            <div class="col-xs-12 col-md-6">
                <?=
                    do_shortcode('[contact-form-7 id="8ff4142" title="Contact form 1"]');
                ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
