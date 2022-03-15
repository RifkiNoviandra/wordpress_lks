<?php
/*
 * Template Name: All Places
 */
get_header(); ?>

<div class="destination">
    <h2 style="margin-left: 20px">Most Viewed Destination</h2>
    <div class="container-wrap">
        <?php $post = get_posts([
            'post_per_page' => 4
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

<?php get_footer();

?>


