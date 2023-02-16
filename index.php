<?php get_header(); ?>
<main>
    <h1>Latest posts</h1>
    <div class="posts">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
                <?php the_post_thumbnail('large'); ?>
                <?php the_category(); ?>
                <h2><a href="<?= get_permalink() ?>"><?= the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
        </article>
        <?php endwhile; endif; ?>
    </div>
<?php get_footer(); ?>