<?php
    function pageBanner ($args = NULL) {
    if (!$args['title']) {
        $args['title'] = get_the_title();
    }
    if (!$args['subtitle']) {
        $args['subtitle'] = get_field('page_banner_subtitle');
    }
    if (!$args['photo']) {
        if (get_field('page_banner_background_image') AND !is_archive() AND !is_home()) {
            $args['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner'];
        } else {
            $args['photo'] = get_theme_file_uri('/img/millerelementary.jpg');
        }
    }
    ?>
    <div class="relative flex px-8 py-32 mb-16 align-middle bg-center bg-no-repeat bg-cover hero" 
    style="background-image:url(<?php echo $args['photo'];?>)">
        <div class="container mx-auto">
            <h2 class="absolute text-6xl text-white -bottom-1"><?php echo $args['title'];?></h2>
            <p class="text-white"><?php echo $args['subtitle'];?></p>
        </div>
    </div>
<?php
}

function millerpto_files() {
    wp_enqueue_script('alpine', '//cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js', NULL, '2.0', true);
    wp_enqueue_style('nunito', '//fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;900&display=swap');
    wp_enqueue_style('millerpto_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'millerpto_files');

function millerpto_features() {
    add_theme_support('title-tag');
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerLocationOne', 'Footer Location One');
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size( 'default-thumbnail', 600, 350, true );
    set_post_thumbnail_size( 'default-thumbnail-vertical', 350, 750, true );
    add_image_size('pageBanner', 1920, 400, true);

}

function miller_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'miller' ),
        'id' => 'main-sidebar',
        'before_widget' => '<div class="prose">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );

    register_sidebar( array(
        'name' => __( 'Secondary Sidebar', 'miller' ),
        'id' => 'secondary-sidebar',
        'before_widget' => '<div class="prose">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );

    register_sidebar( array(
        'name' => __( 'Tertiary Sidebar', 'miller' ),
        'id' => 'tertiary-sidebar',
        'before_widget' => '<div class="prose">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'miller_widgets_init' );


add_action('after_setup_theme', 'millerpto_features');
add_action('init', 'miller_post_types');

function miller_adjust_queries($query) {
    if(!is_admin() AND is_post_type_archive('about') AND $query->is_main_query()) {
        $query->set('orderby', 'post_date');
        $query->set('order', 'ASC');
    }
}

add_action('pre_get_posts', 'miller_adjust_queries')
?>