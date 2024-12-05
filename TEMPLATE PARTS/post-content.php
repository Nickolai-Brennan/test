<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </header>
    <div class="entry-content">
        <?php the_excerpt(); ?>
    </div>
    <footer class="entry-footer">
        <span>Posted on <?php echo get_the_date(); ?> by <?php the_author(); ?></span>
    </footer>
</article>
