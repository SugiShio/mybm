<?php get_header(); ?>

<section id="biography">
    <?php get_template_part('nav') ?>
    <h2 class="sectionTtl"><?php echo the_title(); ?></h2>

    <?php if(have_posts()): while(have_posts()): the_post();?>
        <h2 class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/biography/bandImage.jpg" alt="biography">
        </h2>
        <div class="body">
            <?php the_content(); ?>
        </div>
    <?php endwhile; endif; ?>
</secction>

<footer id="footer">
    <small>&copy; 2017 Mellow Yellow Banana Moon</small>
</footer>

<?php get_footer(); ?>
