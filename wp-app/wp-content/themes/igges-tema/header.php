<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles.css">
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <?php wp_head();
    ?>
</head>

<body>
    <header id="header">
        <div class="header-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/gvwhite.png" alt="Gameverse Logo">
        </div>
        <div class="col-xs-4 text-right visible-xs">
            <div class="mobile-menu-wrap">
                <i class="fa fa-bars menu-icon"></i>
            </div>
        </div>
    </header>
    <nav class="nav">
                    <div class="col-xs-12">
                        <ul class="menu">
                            <li class="current-menu-item">
                                <?php
                                wp_nav_menu(
                                    array('theme_location' => 'primary')
                                );
                                ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
