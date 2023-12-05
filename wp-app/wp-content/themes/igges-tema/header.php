<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <?php wp_head();
    ?>
</head>

<body>
    <header>
        <div class="header-title">
            <!-- <h1>GameGroveGazette</h1> -->
            <img src="assets/gameverse.png" alt="Gameverse Logo">
        </div>
    </header>
    <nav class="nav">
        <div class="container">
            <div class="row">
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
