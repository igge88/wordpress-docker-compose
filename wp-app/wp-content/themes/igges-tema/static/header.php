<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <?php wp_head(); ?>
    <!-- Lägg till din CSS-fil här -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <!-- Lägg till din meny här -->
        <div class="header"></div>
        <nav><a href="news.php">News</a></nav>
        <nav><a href="single-news.php">Single News</a></nav>
        <nav><a href="contact.php">Contact</a></nav>
        <nav><a href="about.php">About</a></nav>
    </header>
