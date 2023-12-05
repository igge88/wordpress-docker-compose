<div class="widget">

    <form id="searchform" class="searchform" action="/">
        <div>
            <input type="text" value="<?php get_search_query(); ?>" name="s" />
            <input type="submit" value="Sök">
        </div>
    </form>

</div>


<div class="widget">
    <h2>Sidor</h2>
    <ul>
        <?php wp_list_pages("title_li="); ?>
    </ul>
</div>
<div class="widget">
    <h2>Arkiv</h2>
    <ul>
        <?php wp_get_archives("type=monthly"); ?>
    </ul>
</div>

<div class="widget">
    <h2>Kategorier</h2>
    <ul>
        <?php wp_list_categories('title_li='); ?>
    </ul>
</div>
