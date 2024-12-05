// Archive page for categories, tags

<?php get_header(); ?>

<main>
    <h1><?php single_cat_title(); ?></h1>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/post-content'); ?>
        <?php endwhile; ?>
    <?php else : ?>
        <p>No posts found in this category.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
