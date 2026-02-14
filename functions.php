<?php


if ( !function_exists( 'alexpro_theme_setup' ) ) :

  function alexpro_theme_setup() {
		
		// Миниатюры
    add_theme_support( 'post-thumbnails', array( 'post', 'page', 'project') );

		// logo
		add_theme_support( 'custom-logo', [
				'width'      => 328,
				'flex-height' => true,
				'header-text' => 'Remark',
				'unlink-homepage-logo' => true, // WP 5.5
		] );

		// menu
		register_nav_menus( [
				'header_menu' => 'Menu in header',
				'footer_menu_left' => 'Menu in footer left',
				'footer_menu_right' => 'Menu in footer right'
		] );
  }
endif;
add_action( 'after_setup_theme', 'alexpro_theme_setup' );



// Подключение скриптов

function enqueue_alexpro_theme() {

  wp_enqueue_style( 'style', get_stylesheet_uri() );

  wp_enqueue_style( 'swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css' );

    if ( is_page(1007) ) {
  wp_enqueue_style( 'iziweb-style', get_template_directory_uri() . '/assets/css/iziweb-new.css', 'style');

    }
   else
    {
  wp_enqueue_style( 'iziweb-style', get_template_directory_uri() . '/assets/css/iziweb.css', 'style');
    }
  wp_enqueue_style( 'IBM-Plex-Mono', 'https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet"');

  wp_enqueue_style( 'Wix-Madefor-Display', 'https://fonts.googleapis.com/css2?family=Wix+Madefor+Display:wght@400..800&display=swap" rel="stylesheet"');

  wp_enqueue_style( 'Golos-Text', 'https://fonts.googleapis.com/css2?family=Golos+Text:wght@500;600&display=swap" rel="stylesheet"');

  
  wp_deregister_script( 'jquery-core' );
  wp_register_script( 'jquery-core', '//code.jquery.com/jquery-3.6.0.min.js');
  wp_enqueue_script( 'jquery' );
  

  wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js', true);
  wp_enqueue_script( 'slider', get_template_directory_uri() . '/assets/js/slider.js', [], time(), true);

  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', [], time(), true);



}
add_action( 'wp_enqueue_scripts', 'enqueue_alexpro_theme' );


// 

add_filter( 'excerpt_length', function(){
	return 20;
} );

add_filter( 'excerpt_more', function( $more ) {
	return '...';
} );


//    Регестрируем миниатюру
if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'project-thumb', 860, 523, true ); // Кадрирование изображения
}




# Automatically sets the image Title, Alt-Text, Caption & Description upon upload

add_action('add_attachment', 'pami_set_image_meta_upon_upload');

# Helper function
if (!function_exists('pami_image_meta_first')) {
	
	function pami_image_meta_first($my_image_title, $encoding = 'UTF-8') {
		
		$my_image_title = mb_ereg_replace('^[\ ]+', '', $my_image_title);
		$my_image_title = mb_strtoupper(mb_substr($my_image_title, 0, 1, $encoding), $encoding). mb_substr($my_image_title, 1, mb_strlen($my_image_title), $encoding);
		
		return $my_image_title;
		
	}
	
}

# Main function
function pami_set_image_meta_upon_upload($post_ID) {

	if (!wp_attachment_is_image($post_ID)) return;
		
	$my_image_title = get_post($post_ID)->post_title;
		
	// Sanitize the title: remove hyphens, underscores & extra spaces:
	$my_image_title = preg_replace('%\s*[-_\s]+\s*%', ' ', $my_image_title);
	
	// Sanitize the title: capitalize first letter of every word (other letters lower case):
	$my_image_title = str_replace('"', '', $my_image_title);
	$my_image_title = str_replace('«', '', $my_image_title);
	$my_image_title = str_replace('»', '', $my_image_title);
	$my_image_title = str_replace('—', '', $my_image_title);
	$my_image_title = str_replace(':', '', $my_image_title);
	$my_image_title = str_replace('  ', ' ', $my_image_title);
	$my_image_title = str_replace('   ', ' ', $my_image_title);

	$my_image_title = pami_image_meta_first(mb_strtolower($my_image_title));

	// Set the image Alt-Text
	update_post_meta($post_ID, '_wp_attachment_image_alt', $my_image_title);

	$my_image_title = mb_strtolower($my_image_title);

	$my_image_meta = [
		'ID' => $post_ID,
		'post_title' => $my_image_title, // Set image Title to sanitized title
	]; 

	// Set the image meta (e.g. Title, Excerpt, Content)
	wp_update_post($my_image_meta);

}



// подключение формы

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script(
        'contacts-form-js',
        get_template_directory_uri() . '/assets/js/contacts-form.js',
        ['jquery'],
        null,
        true
    );

    wp_localize_script('contacts-form-js', 'contactsFormAjax', [
        'ajaxurl' => admin_url('admin-ajax.php')
    ]);
});

// Ajax обработчик формы

/*
add_action('wp_ajax_send_contacts_form', 'send_contacts_form');
add_action('wp_ajax_nopriv_send_contacts_form', 'send_contacts_form');

function send_contacts_form() {
    $name   = sanitize_text_field($_POST['name']);
    $method = sanitize_text_field($_POST['contact_method']);
    $email  = sanitize_email($_POST['email']);
    $phone  = sanitize_text_field($_POST['phone']);

    if (empty($name)) {
        wp_send_json(['success' => false, 'message' => 'Введіть ім’я']);
    }

    if ($method === 'email' && empty($email)) {
        wp_send_json(['success' => false, 'message' => 'Введіть email']);
    }

    if ($method !== 'email' && empty($phone)) {
        wp_send_json(['success' => false, 'message' => 'Введіть телефон']);
    }

    $to = get_option('admin_email');
    $subject = "Нова заявка з форми";
    $message = "Ім’я: $name\nСпосіб зв’язку: $method\n";

    if ($method === 'email') {
        $message .= "Email: $email\n";
    } else {
        $message .= "Телефон: $phone\n";
    }

    $headers = ['Content-Type: text/plain; charset=UTF-8'];

    wp_mail($to, $subject, $message, $headers);

    wp_send_json(['success' => true]);
}

*/



// Контактые формы - убираем обёртку <P>
add_filter('wpcf7_autop_or_not', '__return_false');


// Убираем ссылку с активного пункта меню
add_filter( 'wp_nav_menu_items', 'replace_current_menu_item_link_with_span', 10, 2 );
function replace_current_menu_item_link_with_span( $items, $args ) {
    $items = preg_replace_callback(
        '/<li[^>]*class="[^"]*current-menu-item[^"]*"[^>]*>.*?<\/li>/s',
        function ( $matches ) {
            $li = $matches[0];
            $li = preg_replace('/<a([^>]*)>(.*?)<\/a>/', '<span class="current-menu-item-span">$2</span>', $li);
            return $li;
        },
        $items
    );
    return $items;
}



add_action('wp_enqueue_scripts', function() {
    wp_dequeue_style('classic-theme-styles');
});

add_filter( 'wp_img_tag_add_auto_sizes', '__return_false' );


add_action('wp_enqueue_scripts', function() {
    remove_action('wp_head', 'wp_maybe_inline_styles');
});


add_filter( 'wp_speculation_rules_configuration', '__return_null' );


add_theme_support( 'title-tag' );



add_action('init', function() {
    load_plugin_textdomain('acf', false, dirname(plugin_basename(__FILE__)) . '/languages/');
});
