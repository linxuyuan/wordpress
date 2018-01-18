<?php
/**
 * Created by PhpStorm
 * Author: Lynn
 * Date: 2017-11-18
 * Time: 20:56
 */

add_action('init', 'my_custom_init');
function my_custom_init()
{
    $labels = array(
        'name' => '书本name',
        'singular_name' => '书本singularname',
        'add_new' => 'Add_new',
        'add_new_item' => 'add_new_item',
        'edit_item' => 'edit_item',
        'new_item' => 'new_item',
        'view_item' => 'view_item',
        'search_items' => 'search_items',
        'not_found' =>  'not_found',
        'not_found_in_trash' => 'not_found_in_trash',
        'parent_item_colon' => '',
        'menu_name' => 'menu_name'

    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','editor','author','thumbnail','excerpt','comments')
    );
    register_post_type('book',$args);
}
?>