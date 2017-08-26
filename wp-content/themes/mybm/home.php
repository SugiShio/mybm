<?php get_header(); ?>

<div id="top">
    <header id="header">
        <div></div>
        <ul>
            <li><a href="https://twitter.com/mellowyellow877" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/twitter.svg" alt=""></a></li>
            <li><a href="https://soundcloud.com/py3picqhc9fz" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/soundcloud.svg" alt=""></a></li>
            <li><a href="mailto:mellowyellowbananamoon@yahoo.co.jp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/mail.svg" alt=""></a></li>
        </ul>
    </header>

    <h1>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg"" alt="メロウ・イエロー・バナナムーン">
    </h1>

    <section class="news">
        <h2 class="sectionTtl">News</h2>
        <?php query_posts('cat=' . get_cat_ID('news')); ?>
        <?php if (have_posts()) : ?>
            <?php if(get_the_category()[0]->slug == 'news') : ?>
                    <div class="post-news">
                        <time><?php echo get_the_date('Y.n.j'); ?></time>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </div>
            <?php endif ?>
        <p class="news__link">
            <a href="<?php echo get_category_link(get_cat_ID('news')); ?>">more</a>
        </p>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </section>

    <nav id="menu">
        <ul>
            <li><a href="<?php echo get_category_link(get_cat_ID('schedule')); ?>">SCHEDLUE</a></li>
            <li><a href="./biography/">BIOGRAPHY</a></li>
            <li><a href="">DISCOGRAPHY</a></li>
            <li><a href="./contact/">CONTACT</a></li>
        </ul>
    </nav>
</div>

<footer id="footer">
    <small>&copy; 2017 Mellow Yellow Banana Moon</small>
</footer>
<?php get_footer(); ?>
