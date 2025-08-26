<?php

if ( ! function_exists( 'airvice_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     *
     * @since Twenty Fifteen 1.0
     */
    function airvice_setup() {
    
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on airvice, use a find and replace
         * to change 'airvice' to the name of your theme in all the template files
         */
        load_theme_textdomain( 'airvice', get_template_directory() . '/languages' );
    
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );
    
        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded  tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );
    
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support( 'post-thumbnails' );

        // set_post_thumbnail_size( 825, 510, true );
    
        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus( array(
            'main-menu' => __( 'Main Menu','airvice' ),
        ) );
    
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ) );
    
        /*
         * Enable support for Post Formats.
         *
         * See: https://codex.wordpress.org/Post_Formats
         */
        add_theme_support( 'post-formats', array(
            'image', 'video', 'gallery', 'audio',
        ) );

        remove_theme_support( 'widgets-block-editor' );
    
    }
    endif; // airvice_setup
    add_action( 'after_setup_theme', 'airvice_setup' ); 


    /**
     * Add a sidebar.
     */
    function airvice_widgets_init() {

        register_sidebar( array(
            'name'          => __( 'Blog Sidebar', 'airvice' ),
            'id'            => 'blog-sidebar',
            'description'   => __( 'This widgets will display in blog sidebar', 'airvice' ),
            'before_widget' => '<div id="%1$s" class="tp-sidebar-widget mb-45 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="tp-sidebar-widget-title">',
            'after_title'   => '</h3>',
        ) );


        register_sidebar( array(
            'name'          => __( 'Services Sidebar', 'airvice' ),
            'id'            => 'services-sidebar',
            'description'   => __( 'This widgets will display in blog sidebar', 'airvice' ),
            'before_widget' => '<div id="%1$s" class="tp-service-sidebar-content mb-40 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="tp-service-sidebar-title">',
            'after_title'   => '</h4>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Footer Widget 01', 'airvice' ),
            'id'            => 'footer-widget-1',
            'description'   => __( 'This widgets will display in footer widget 01', 'airvice' ),
            'before_widget' => '<div id="%1$s" class="tp-footer-widget tp-footer-col-1 mb-50 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="tp-footer-widget-title">',
            'after_title'   => '</h3>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Footer Widget 02', 'airvice' ),
            'id'            => 'footer-widget-2',
            'description'   => __( 'This widgets will display in footer widget 02', 'airvice' ),
            'before_widget' => '<div id="%1$s" class="tp-footer-widget tp-footer-col-2 mb-50 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="tp-footer-widget-title">',
            'after_title'   => '</h3>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Footer Widget 03', 'airvice' ),
            'id'            => 'footer-widget-3',
            'description'   => __( 'This widgets will display in footer widget 03', 'airvice' ),
            'before_widget' => '<div id="%1$s" class="tp-footer-widget tp-footer-col-3 mb-50 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="tp-footer-widget-title">',
            'after_title'   => '</h3>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Footer Widget 04', 'airvice' ),
            'id'            => 'footer-widget-4',
            'description'   => __( 'This widgets will display in footer widget 04', 'airvice' ),
            'before_widget' => '<div id="%1$s" class="tp-footer-widget tp-footer-col-4 mb-50 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="tp-footer-widget-title">',
            'after_title'   => '</h3>',
        ) );
    }
    add_action( 'widgets_init', 'airvice_widgets_init' );



    // airvice_theme_scripts 
    function airvice_theme_scripts() {
        
        // css files 
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '5.2.3', 'all' );
        wp_enqueue_style( 'swiper-bundle', get_template_directory_uri() . '/assets/css/swiper-bundle.css', array(), '8.2.2', 'all' );
        wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'font-awesome-pro', get_template_directory_uri() . '/assets/css/font-awesome-pro.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'airvice-spacing', get_template_directory_uri() . '/assets/css/spacing.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/assets/css/nice-select.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'airvice-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'style', get_stylesheet_uri() );
    
        // js files 
        wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap-bundle.js', array( 'jquery' ), 1.1, true );
        wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.js', array( 'jquery' ), 1.1, true );
        wp_enqueue_script( 'swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array( 'jquery' ), 1.1, true );
        wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/waypoints.js', array( 'jquery' ), 1.1, true );
        wp_enqueue_script( 'purecounter', get_template_directory_uri() . '/assets/js/purecounter.js', array( 'jquery' ), 1.1, true );
        wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.js', array( 'jquery' ), 1.1, true );
        wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.js', array( 'jquery' ), 1.1, true );
        wp_enqueue_script( 'isotope-pkgd', get_template_directory_uri() . '/assets/js/isotope-pkgd.js', array( 'imagesloaded' ), 1.1, true );
        wp_enqueue_script( 'airvice-main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), 1.1, true );
    
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
    add_action( 'wp_enqueue_scripts', 'airvice_theme_scripts' );