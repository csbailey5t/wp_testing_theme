<?php 

add_action( 'init', 'create_post_type' );

function create_post_type() 
{
    register_post_type( 
        'moves',
        array(
            'labels' => array(
                'name' => __( 'Moves' ),
                'singular_name' => __( 'Move'),
                'all_items' => __( 'All Moves' ),
                'add_new_item' => __( 'Add New Move' )
                ),
            'public' => true,
            'has_archive' => true,
            )
        );

    register_post_type( 
        'games',
        array(
            'labels' => array(
                'name' => __( 'Games' ),
                'singular_name' => __( 'Game'),
                'all_items' => __( 'All Games' ),
                'add_new_item' => __( 'Add New Game' )
                ),
            'public' => true,
            'has_archive' => true,
            )
        );
}