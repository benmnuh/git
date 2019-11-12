<?php

add_action('init', 'cpt');
function cpt()
{

    //taxonomy work_categories for cpt work
    register_taxonomy('works_categories', array('works'), array(
        'label'                 => 'Works Category',
        'labels'                => array(
            'name'              => 'Works Categories',
            'singular_name'     => 'Works Category',
            'search_items'      => 'Search Works Category',
            'all_items'         => 'All Works Categories',
            'parent_item'       => 'Parent Works Category',
            'parent_item_colon' => 'Parent Works Category:',
            'edit_item'         => 'Edit Works Category',
            'update_item'       => 'Update Works Category',
            'add_new_item'      => 'Add New Works Category',
            'new_item_name'     => 'New Works Category Name',
            'menu_name'         => 'Works Categories',
        ),
        'description'           => 'Works Categories',
        'public'                => true,
        'show_in_nav_menus'     => false,
        'show_ui'               => true,
        'show_tagcloud'         => false,
        'hierarchical'          => true,
        'rewrite'               => array('slug'=>'works', 'hierarchical'=>true, 'with_front'=>false, 'feed'=>false ),
        'show_admin_column'     => true,
    ) );

    //cpt work
    register_post_type('works', array(
        'labels' => array(
            'name' => 'Works',
            'singular_name' => 'Work',
            'add_new' => 'Add new',
            'add_new_item' => 'Add new',
            'edit_item' => 'Edit',
            'view_item' => 'View new',
            'search_items' => 'Search new',
            'not_found' => 'Not found',
            'not_found_in_trash' => 'Not found in trash',
            'parent_item_colon' => '',
            'menu_name' => 'Works'

        ),
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array( 'works_categories' )
    ));


    //cpt case_studies
    register_post_type('case_studies', array(
        'labels' => array(
            'name' => 'Case Studies',
            'singular_name' => 'Case Study',
            'add_new' => 'Add new',
            'add_new_item' => 'Add new',
            'edit_item' => 'Edit',
            'view_item' => 'View new',
            'search_items' => 'Search new',
            'not_found' => 'Not found',
            'not_found_in_trash' => 'Not found in trash',
            'parent_item_colon' => '',
            'menu_name' => 'Case Studies'

        ),
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'thumbnail'),
    ));
}

