<?php get_header(); ?>
<main>
    <?php while (have_posts()): the_post(); ?>
    <h1><?= the_title(); ?>
    <?php endwhile; ?>
<?php get_footer(); ?>