<?php get_header(); ?>

<div class="main-content">
    <h1>Kontakta Oss</h1>
    <form action="#" method="post">
        <label for="name">Namn:</label>
        <input type="text" id="name" name="name">

        <label for="email">E-post:</label>
        <input type="email" id="email" name="email">

        <label for="message">Meddelande:</label>
        <textarea id="message" name="message"></textarea>

        <input type="submit" value="Skicka">
    </form>
</div>

<?php get_footer(); ?>
