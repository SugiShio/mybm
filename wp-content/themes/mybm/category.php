<?php if (have_posts()) : ?>
    <ul class="posts">
        <?php while (have_posts()) : the_post(); ?>
            <li class="post">
                <a href="<?php echo the_permalink(); ?>">
                    <time class="post__date"><?php echo get_the_date('Y.n.j'); ?></time>
                    <h2 class="post__ttl"><?php the_title(); ?></h2>
                </a>
            </li>
        <?php endwhile; ?>
    </ul>
<?php endif; ?>