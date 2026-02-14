<?php
/*
Template Name: Thank You
Template Post Type: page
*/
get_header();
?> 


<section class="thank">
  <div class="container">
    <div class="thank-wrap">
      <h1>Дякуємо!</h1>
      <p>Ми зв'яжемося з вами найближчим часом.</p>
      <div class="thank-btn anim-arrows">
        <a href="/" class="button-link errore-link">перейти на головну</a>
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
</section>


<?php get_footer();?>