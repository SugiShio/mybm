<?php get_header(); ?>

<section id="news">
    <nav id="menu">
        <?php wp_nav_menu( array('menu' => 'grobalNav' )); ?>
    </nav>

    <h2 class="sectionTtl"><?php echo single_cat_title(); ?></h2>

    <?php if (have_posts()) : ?>
        <ul class="posts-news">
            <?php while (have_posts()) : the_post(); ?>
                <li class="post-news">
                    <a href="<?php the_permalink() ?>">
                        <time><?php echo get_the_date('Y.n.j'); ?></time>
                        <h3><?php the_title(); ?></h3>
                    </a>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
</section>

<footer id="footer">
    <small>&copy; 2017 Mellow Yellow Banana Moon</small>
</footer>

<?php get_footer(); ?>
