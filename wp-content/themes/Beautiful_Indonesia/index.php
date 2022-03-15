<?php get_header(); ?>
<main id="content" role="main">

    <div class="hero">
        <div class="hero_text">
            <h1>Welcome To Beautiful Indonesia</h1>
            <h3>Temukanlah Semua Destinasi Impianmu</h3>
        </div>
    </div>

    <div class="containerAbout">
        <div class="about_section">
            <h2>Beautiful Indonesia</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eos error ipsa ipsam minus placeat repudiandae sapiente vero? A corporis dignissimos eligendi in nobis non placeat quaerat sequi temporibus tenetur. </p>
        </div>
    </div>
    <div class="destination">
        <h2 style="margin-left: 20px">Most Viewed Destination</h2>
        <div class="container flex-column">
            <?php $post = get_posts([
                'posts_per_page' => 4 ,
                'post_type' => 'places',
                'orderby' => 'meta_value_num',
                'order' => 'DESC',
                'meta_key' => 'counter'
            ]);

            foreach ($post as $posts) :
                ?>
                <a href="<?= get_permalink($posts) ?>" class="card_link">
                    <div class="card">
                        <div class="card_image"><?= get_the_post_thumbnail($posts) ?></div>
                        <div class="card-body">
                            <h3><?= get_the_title($posts) ?></h3>
                            <p><?= wp_strip_all_tags($posts->post_content) ?></p>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>