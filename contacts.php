<?php
/*
Template Name: Contacts
Template Post Type: page
*/
get_header();
?> 


<?php 
  if (have_rows('cont-hero')): while(have_rows('cont-hero')): the_row();
    $image = get_sub_field('image');
?>
<main class="cont">
  <div class="container">
    <div class="cont-wrap">
      <div class="cont-content">
        <h2 class="cont-title"><?php the_sub_field('title'); ?></h2>
        <p class="cont-email-txt"><?php the_sub_field('email-text'); ?></p>
        <a class="cont-email" href="mailto:<?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a>
        <p class="cont-phone-txt"><?php the_sub_field('phone-text'); ?></p>
        <a href="tel:<?php the_sub_field('phone'); ?>" class="cont-phone"><?php the_sub_field('phone'); ?></a>
        <p class="cont-adress-txt"><?php the_sub_field('adress-text'); ?></p>
        <p class="cont-adress"><?php the_sub_field('adress'); ?></p>  
      </div>
      <div class="cont-image">
        <img src="<?php echo esc_url($image['url']);?>" alt="<?php echo esc_attr($image['alt']);?>">
      </div>
    </div>
  </div>
</main>
<?php endwhile;
endif;?>



<?PHP
 get_template_part( 'template-parts/footer-form');
?>



<?php get_footer();?>