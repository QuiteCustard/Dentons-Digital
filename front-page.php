<?php get_header(); ?>
<main class="container">
    <?php while (have_posts()): the_post(); ?>
    <h1><?= the_title(); ?></h1>
    <?= the_content() ?>
    <?php endwhile; ?>
<?php get_footer(); ?>