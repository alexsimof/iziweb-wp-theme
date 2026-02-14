<?php
/*
Template Name: 404_errore page
Template Post Type: page
*/
get_header();

$cont = get_field('404-errore',2);
?> 

<section class="errore">
  <div class="container">
    <div class="errore-wrap">
      <h2><?php echo $cont['title']; ?></h2>
      <div class="errore-btn anim-arrows">
        <a href="<?php echo $cont['link']; ?>" class="button-link errore-link"><?php echo $cont['name']; ?></a>
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
      <p><?php echo $cont['text']; ?></p>
    </div>
  </div>
</section>


<div class="errore-contacts">
  <?PHP
  get_template_part( 'template-parts/footer-form');
  ?>
</div>


<?php get_footer();?>