<?php get_header(); ?>

<section id="single">
    <nav id="nav">
        <?php wp_nav_menu( array('menu' => 'grobalNav' )); ?>
    </nav>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <div>
            <?php the_content(); ?>
        </div>
    <?php endwhile; else: ?>
        <p>
            お探しの記事は見つかりませんでした。
        </p>
    <?php endif; ?>
</section>

<footer id="footer">
    <small>&copy; 2017 Mellow Yellow Banana Moon</small>
</footer>
<?php get_footer(); ?>
