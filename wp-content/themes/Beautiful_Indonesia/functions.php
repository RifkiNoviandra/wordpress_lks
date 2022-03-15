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

    $post->has_archive = 'articles';
    $post->rewrite = ['slug' => 'article', 'with_front' => true];
//    $post->rewrite['with_front'] = false;

    unregister_post_type('post');
//    register_post_type('post' , (array)$post);


    register_post_type('places', [
        'label' => 'Place',
        'public' => true,
        'supports' => ['title', 'thumbnail', 'editor'],
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'place'] ,
        "has_archive" => 'places'
    ]);

    register_post_type('articles', [
        'label' => 'Article',
        'public' => true,
        'supports' => ['title', 'thumbnail', 'editor'],
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'article'] ,
        "has_archive" => 'articles'
    ]);

    register_sidebar([
        "id" => "Social_Icons_Template",
        "name" => "Social_Icons",
        "before_widget" => "",
        "after_widget" => "",
    ]);
});

function getView( $postID ){
    $key = 'counter' ;

    $count = get_post_meta($postID , $key , true);

    if ($count == ''){
        delete_post_meta($postID , $key);
        add_post_meta($postID , $key , '0');

        $count = 0 ;
    }

    return $count;
}

function setView( $postID ){
    $key = 'counter' ;

    $count = get_post_meta($postID , $key , true);

    if ($count == ''){
        $count = 0 ;
        delete_post_meta($postID , $key);
        add_post_meta($postID , $key , '0');
    }else{
        $count++;
        update_post_meta($postID , $key , $count);
    }
}
