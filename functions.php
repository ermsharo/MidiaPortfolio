<?php 

//adicionando CSS E JS 
// https://helloacm.com




 


        add_filter( 'the_content', 'prefix_big_letter' );
        
        function prefix_big_letter($content) {
        return "<div class='wp_content'>$content</div>";
        }



    function gt_setup(){
        wp_enqueue_style('google-fonts','https//fonts.googleapis.com/css?family=Anton');
        wp_enqueue_style('google-fonts','https//fonts.googleapis.com/css?family=Open+Sans');
        wp_enqueue_style('google-fonts','https//fonts.googleapis.com/css?family=Stylish');
        wp_enqueue_style('google-fonts','https//fonts.googleapis.com/css?family=Baloo+Bhai|Stylish');
        wp_enqueue_style('style',get_stylesheet_uri(), NULL, microtime());
        wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL,microtime(),true); 
    }


    add_action('wp_enqueue_scripts','gt_setup');

    //Adding theme support

    function gt_init(){
        add_theme_support('post-thumbnails'); 
        add_theme_support('title-tag');
        add_theme_support('html5',array('comment-list','comment-form','search-form'))
        ;
    }
   
    add_action('after_setup_theme','gt_init');

    function gt_custom_post_type(){
        register_post_type('project', 
            array(
                'rewrite' => array('slug'=> 'projects'),
                'labels' => array(
                    'name' => `Projects`,
                    'singular_name' => 'Project',
                    'add_new_item' => 'Add New Project',
                    'edit_item' => 'Edit Project'
                ),
                'menu-icon' => 'dashicons-clipboard',
                'public' => true,
                'has_archive' =>true, 
                'supports' => array ('title','thumbnail','editor','excerpt','comments')
            )
            );
    }

    add_action('init', 'gt_custom_post_type');


?>

