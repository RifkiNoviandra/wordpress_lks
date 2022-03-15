<?php
add_action('login_enqueue_scripts', function () {
    wp_enqueue_style('login-wp-css', get_stylesheet_directory_uri() . '/css/login.css');
});

wp_enqueue_style('all-style-wp', get_stylesheet_directory_uri() . "/css/all_style.css");

add_theme_support('post-thumbnails');

add_action('init', function () {

    $post = get_post_type_object('post');

    foreach ($post->labels as $key => $value) {
        $value = str_replace('Post' , 'Article' , $value);
        $value = str_replace('post' , 'article' , $value);
        $post->labels->{$key} = $value ;
    }


    register_post_type('places', [
        'label' => 'Place',
        'public' => true,
        'supports' => ['title', 'thumbnail', 'editor'],
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'place'] ,
        "has_archive" => 'places'
    ]);

    register_sidebar([
        "id" => "Social_Icons_Template",
        "name" => "Social_Icons",
        "before_widget" => "",
        "after_widget" => "",
    ]);
});

