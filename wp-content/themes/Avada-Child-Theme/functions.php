<?php

function theme_enqueue_styles()
{
    wp_enqueue_style('avada-parent-stylesheet', get_template_directory_uri() . '/assets/css/style.min.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('avada-parent-stylesheet'));
}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function avada_lang_setup()
{
    $lang = get_stylesheet_directory() . '/languages';
    load_child_theme_textdomain('Avada', $lang);
}

add_action('after_setup_theme', 'avada_lang_setup');


//function whats_new_widget_init(){
//    register_sidebar(array(
//        'name' => 'WhatIsNew',
//        'id' => 'what_new_sidebar_widget',
//        'before_widget' => '<div class="side-widget">',
//        'after_widget' => '</div>',
//        'before_title' => '<h3 class="rounded">',
//        'after_title' => '</h3>'
//    ));
//}
//
//add_action('widget_init', 'whats_new_widget_init');

// Creating the widget

class wpb_widget extends WP_Widget
{

    function __construct()
    {

        parent::__construct(

// Base ID of your widget

            'wpb_widget',


// Widget name will appear in UI

            __('WPBeginner Widget', 'wpb_widget_domain'),


// Widget description

            array('description' => __('Sample widget based on WPBeginner Tutorial', 'wpb_widget_domain'),)
        );

    }



// Creating widget front-end

// This is where the action happens

    public function widget($args, $instance)
    {

        $title = apply_filters('widget_title', $instance['title']);

// before and after widget arguments are defined by themes

        echo $args['before_widget'];

        if (!empty($title))

            echo $args['before_title'] . $title . $args['after_title'];


// This is where you run the code and display the output

        echo __('Hello, Nigga!', 'wpb_widget_domain');

        echo $args['after_widget'];

    }


// Widget Backend

    public function form($instance)
    {

        if (isset($instance['title'])) {

            $title = $instance['title'];

        } else {

            $title = __('New title', 'wpb_widget_domain');

        }

// Widget admin form

        ?>

        <p>

            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>

            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
                   name="<?php echo $this->get_field_name('title'); ?>" type="text"
                   value="<?php echo esc_attr($title); ?>"/>

        </p>

        <?php

    }


// Updating widget replacing old instances with new

    public function update($new_instance, $old_instance)
    {

        $instance = array();

        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';

        return $instance;

    }

} // Class wpb_widget ends here


// Register and load the widget

function wpb_load_widget()
{

    register_widget('wpb_widget');

}

add_action('widgets_init', 'wpb_load_widget');
