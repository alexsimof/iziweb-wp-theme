<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

<div class="popup-bg"></div>
<div class="header-popup">
  <span class="close">✖</span>
      <p>Ви можете зв’язатися з нами за номером <a href="tel:+380501234578" target=_blank>+380501234578</a> або Залиште свій, і ми вам перетелефонуємо.</p>
  <?php
    echo do_shortcode('[contact-form-7 id="956dcbe" title="Быстрый звонок"]');
  ?>
</div>

  <header class="header">
    <div class="container">
      <div class="header-wrapper">
        <a href="" class="header-menu-toggle">
          <span></span>
        </a>
        <?php

          wp_nav_menu([
            'theme_location'  => 'header_menu',
            'container'       => 'nav',
            'container_class' => 'header-mobile-nav',
            'menu_class'      => 'header-mobile-menu',
            'echo'            => true,

          ]);


/*
          if( has_custom_logo() ){
              echo '<div class="header-logo">' . get_custom_logo() . '</div>';
              } else {
                  echo '<span class="header-logo-name">' . get_bloginfo('name') . '</span>';
              }
*/

      
if ( has_custom_logo() ) {
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

    echo '<div class="header-logo">';
    if ( is_front_page() || is_home() ) {
        echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . esc_attr( get_bloginfo('name') ) . '">';
    } else {
        echo '<a href="' . esc_url( home_url( '/' ) ) . '">
                <img src="' . esc_url( $logo[0] ) . '" alt="' . esc_attr( get_bloginfo('name') ) . '">
              </a>';
    }
    echo '</div>';
} else {
    echo '<span class="header-logo-name">' . esc_html( get_bloginfo('name') ) . '</span>';
}



          wp_nav_menu([
            'theme_location'  => 'header_menu',
            'container'       => 'nav',
            'container_class' => 'header-nav',
            'menu_class'      => 'header-menu', 
            'echo'            => true,

          ]);
        ?>
        <div class="header-phone">
          <button class="header-phone-btn"></button>
        </div>
        <div class="header-button">
          <a href="#footer_form">
           <?php 
            the_field('header_button_name',2);
           ?></a>
          <div class="arrows">
            <svg class="arrows-icon icon1">
              <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
            </svg>
            <svg class="arrows-icon icon2">
              <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
            </svg>
            <svg class="arrows-icon icon3">
              <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
            </svg>
          </div>
        </div>

      </div>

    </div>

  </header>
