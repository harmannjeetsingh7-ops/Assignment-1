<?php get_header(); ?>

<main class="main-content">
    <div class="container">
        <section class="section">
            <h2>About Me</h2>
            <p>Namaste! This is my personal homepage where I talk about my Student journey so far.</p>
        </section>

        <section class="section">
            <h2>Learnings So Far</h2>
            <div><?php the_content(); ?></div>
        </section>

        <section class="section">
            <h2>Projects</h2>
            <div><?php the_content(); ?></div>
        </section>

        <section class="section">
            <h2>Future Goals</h2>
            <div><?php the_content(); ?></div>
        </section>

        <section class="section">
            <h2>Accomplishments</h2>
            <div><?php the_content(); ?></div>
        </section>
    </div>
</main>

<?php get_footer(); ?>
