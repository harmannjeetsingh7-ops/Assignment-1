<?php

function assignmentone_enqueue_styles() {
    wp_enqueue_style('assignmentone-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'assignmentone_enqueue_styles');


function assignmentone_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'assignmentone_theme_setup');


function assignmentone_create_content() {
   
    $categories = array(
        'Learnings' => 'What I have learnt so far',
        'Projects' => 'Projects I am proud of',
        'Goals' => 'My goals after graduation'
    );

    $category_ids = array();
    foreach ($categories as $name => $description) {
        $term = term_exists($name, 'category');
        if (!$term) {
            $term = wp_insert_term($name, 'category', array('description' => $description));
        }
        $category_ids[$name] = $term['term_id'];
    }

    $posts = array(
        array(
            'title' => 'My First Learning',
            'content' => 'In this program, I have learnt the basics of web development, including HTML, CSS, and PHP.',
            'category' => 'Learnings'
        ),
        array(
            'title' => 'Proud Project: Portfolio Site',
            'content' => 'I created a simple portfolio website showcasing my skills. It was my first big project!',
            'category' => 'Projects'
        ),
        array(
            'title' => 'Future Goals',
            'content' => 'After graduation, I hope to work as a web developer and continue learning new technologies.',
            'category' => 'Goals'
        )
    );

    foreach ($posts as $post_data) {
        if (!post_exists($post_data['title'])) {
            wp_insert_post(array(
                'post_title' => $post_data['title'],
                'post_content' => $post_data['content'],
                'post_status' => 'publish',
                'post_category' => array($category_ids[$post_data['category']])
            ));
        }
    }
}
add_action('after_switch_theme', 'assignmentone_create_content');
?>
