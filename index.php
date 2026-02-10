<?php get_header(); ?>

<main class="main-content">
    <div class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article class="section">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p>Sorry, no posts here.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
