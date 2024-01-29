<?php

function custom_api_register_routes() {
    register_rest_route('api/v2', '/posts/', array(
        'methods' => 'GET',
        'callback' => 'custom_api_posts',
    ));
    register_rest_route('api/v2', '/googleapi/', array(
        'methods' => 'GET',
        'callback' => 'custom_api_posts',
    ));
}

function custom_api_posts($data) {
    $args = array(
        'post_type' => 'post',
    );

    $posts = get_posts($args);

    $formatted_posts = array();

    foreach ($posts as $post) {
        $formatted_posts[] = array(
            'title' => get_the_title($post->ID),
            'content' => get_the_content($post->ID),
        );
    }

    return $formatted_posts;
}


add_action('rest_api_init', 'custom_api_register_routes');
