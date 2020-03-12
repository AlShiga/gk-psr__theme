<?php
/**
 * gk-psr__theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gk-psr__theme
 */

// Шорткод - Ссылка на страницу
function true_page_func( $atts ){
	$params = shortcode_atts( array( // в массиве укажите значения параметров по умолчанию
		'numpage' => '1', // параметр 1
	), $atts );
	return get_page_link("{$params['numpage']} "); 
}
 
add_shortcode( 'page', 'true_page_func' );

// Шорткод - Вывод меню
function list_menu($atts, $content = null) {
	extract(shortcode_atts(array(  
		'container'       => 'div', 
		'menu_class'      => 'menu', 
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'depth'           => 0,
		'theme_location'  => ''), 
		$atts));
 
 
	return wp_nav_menu( array( 
		'container'       => $container, 
		'menu_class'      => $menu_class, 
		'echo'            => false,
		'fallback_cb'     => $fallback_cb,
		'depth'           => $depth,
		'theme_location'  => $theme_location));
}
//Create the shortcode
add_shortcode("listmenu", "list_menu");


if ( ! function_exists( 'gk_psr__theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gk_psr__theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on gk-psr__theme, use a find and replace
		 * to change 'gk-psr__theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gk-psr__theme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'gk-psr__theme' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'gk_psr__theme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'gk_psr__theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gk_psr__theme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'gk_psr__theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'gk_psr__theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gk_psr__theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'gk-psr__theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'gk-psr__theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'gk_psr__theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gk_psr__theme_scripts() {
	wp_enqueue_style( 'gk-psr__theme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'gk-psr__theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'gk-psr__theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gk_psr__theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}




add_action( 'wp_enqueue_scripts', 'style_theme' );
add_action( 'wp_footer','scripts_theme');
add_action( 'after_setup_theme', 'theme_register_nav_menu');

function right_way_to_include_google_fonts() {
    if (!is_admin()) {
        wp_register_style('google', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap&subset=cyrillic', array(), null, 'all');
        wp_enqueue_style('google');
    }
}
add_action('wp_enqueue_scripts', 'right_way_to_include_google_fonts');


// подключаем стили
function style_theme() {
	wp_enqueue_style( 'my-style', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style( 'my-style-reset', get_template_directory_uri() . '/assets/css/reset.css');
	wp_enqueue_style( 'my-style-slick', get_template_directory_uri() . '/assets/css/slick.css');

}


// подулючаем скрипты
function scripts_theme() {
    wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'my-scripts', get_template_directory_uri() . '/assets/js/main.js');
	wp_enqueue_script( 'my-modal', get_template_directory_uri() . '/assets/js/modal.js');
	wp_enqueue_script( 'my-scripts-slick', get_template_directory_uri() . '/assets/js/slick.min.js');

	}
// регистрируем меню
function theme_register_nav_menu(){
	register_nav_menu( 'top_menu', 'Верхнее меню' );
	register_nav_menu( 'left_menu', 'Меню слева');
	register_nav_menu( 'doc_menu', 'Меню документы');
}



/* Добавляет блок для ввода контактных данных */

function mytheme_customize_register( $wp_customize ) {
    
/*Добавляем секцию в настройки темы*/
$wp_customize->add_section(
'data_site_section',
array(
'title' => 'Контактные данные',
'capability' => 'edit_theme_options',
'description' => "Тут можно указать контактные данные"    )
);

/*Добавляем поле адрес*/
$wp_customize->add_setting(
// ID
'site_adress',
// Массив аргументов
array(
'default' => '',
'type' => 'option'
)
);
$wp_customize->add_control(
// ID
'site_adress_control',
// Массив аргументов
array(
'type' => 'text',
'label' => "Адрес",
'section' => 'data_site_section',
'settings' => 'site_adress'
)
);

/*Добавляем поле время работы*/
$wp_customize->add_setting(
// ID
'site_timeWork',
// Массив аргументов
array(
'default' => '',
'type' => 'option'
)
);
$wp_customize->add_control(
// ID
'site_timeWork_control',
// Массив аргументов
array(
'type' => 'text',
'label' => "Время работы",
'section' => 'data_site_section',
'settings' => 'site_timeWork'
)
);

/*Добавляем поле телефона site_telephone*/
$wp_customize->add_setting(
// ID
'site_telephone',
// Массив аргументов
array(
'default' => '',
'type' => 'option'
)
);
$wp_customize->add_control(
// ID
'site_telephone_control',
// Массив аргументов
array(
'type' => 'text',
'label' => "Телефон",
'section' => 'data_site_section',
'settings' => 'site_telephone'
)
);

/*Добавляем поле телефона site_telephone back*/
$wp_customize->add_setting(
// ID
'site_telephone_back',
// Массив аргументов
array(
'default' => '',
'type' => 'option'
)
);
$wp_customize->add_control(
// ID
'site_telephone_control_back',
// Массив аргументов
array(
'type' => 'text',
'label' => "Телефон в правиьном формате без знаков +7999...",
'section' => 'data_site_section',
'settings' => 'site_telephone_back'
)
);


/*Добавляем поле телефона site_telephone*/
$wp_customize->add_setting(
// ID
'site_telephone2',
// Массив аргументов
array(
'default' => '',
'type' => 'option'
)
);
$wp_customize->add_control(
// ID
'site_telephone_control2',
// Массив аргументов
array(
'type' => 'text',
'label' => "Телефон2",
'section' => 'data_site_section',
'settings' => 'site_telephone2'
)
);

/*Добавляем поле телефона site_telephone back*/
$wp_customize->add_setting(
// ID
'site_telephone_back2',
// Массив аргументов
array(
'default' => '',
'type' => 'option'
)
);
$wp_customize->add_control(
// ID
'site_telephone_control_back2',
// Массив аргументов
array(
'type' => 'text',
'label' => "Телефон в правиьном формате без знаков +7999...",
'section' => 'data_site_section',
'settings' => 'site_telephone_back2'
)
);





/*Добавляем поле emain site_email*/
$wp_customize->add_setting(
// ID
'site_email',
// Массив аргументов
array(
'default' => '',
'type' => 'option'
)
);
$wp_customize->add_control(
// ID
'site_email_control',
// Массив аргументов
array(
'type' => 'text',
'label' => "Email",
'section' => 'data_site_section',
'settings' => 'site_email'
)
);


/*Добавляем поле emain site_email*/
$wp_customize->add_setting(
// ID
'site_email2',
// Массив аргументов
array(
'default' => '',
'type' => 'option'
)
);
$wp_customize->add_control(
// ID
'site_email_control2',
// Массив аргументов
array(
'type' => 'text',
'label' => "Email 2",
'section' => 'data_site_section',
'settings' => 'site_email2'
)
);

}
add_action( 'customize_register', 'mytheme_customize_register' );

