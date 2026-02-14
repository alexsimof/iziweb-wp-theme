<?php
/*
Template Name: About Us
Template Post Type: page
*/
get_header();
?> 

<main class="a-hero">
  <?php
    $img = get_field('logo-star');
    if ($img): ?>
    <div class="a-hero-star">
      <img src="<?php echo esc_url($img['url']);?>" alt="<?php echo esc_attr($img['alt']);?>">
    </div>
  <?php endif; ?>
  <div class="container">
    <div class="a-hero_wrap">
      <?php
        $logo = get_field('logo-izi');
        if ($logo): ?>
        <div class="a-hero-logo">
          <img src="<?php echo esc_url($logo['url']);?>" alt="<?php echo esc_attr($logo['alt']);?>">
        </div>
      <?php endif; ?>
      <div class="a-hero_content">
        <p class="a-hero_text1"><?php the_field('text-izi');?></p>
        <h5 class="a-hero_text2"><?php the_field('text2');?></h5>
        <p class="a-hero_text3"><?php the_field('text3');?></p>
      </div>
    </div>
  </div>
</main>


<section class="logo-str about-str">
  <div class="logo-wrap">
    <svg class="logo-icon">
      <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/logo-frame.svg#logo-frame"></use>
    </svg>
  </div>
</section>



<section class="team">
  <div class="container">
    <div class="team-txt-block">
      <h5 class="team-title"><?php the_field('team-title'); ?></h5>
      <p class="team-text"><?php the_field('team-text'); ?></p>
    </div>
  </div>
  <div class="team-slider">
    <div class="swiper team-swiper"> 
      <div class="swiper-wrapper">
        <!-- Slides -->
        <?php if (have_rows('slider')): $i=1; while(have_rows('slider')): the_row();
          $img = get_sub_field('foto');
        ?>
        <div class="swiper-slide team-swiper-slide">
          <div class="swiper-slide-wrap">
            <div class="swiper-slide-image swiper-slide-image<?php echo $i; ?>">
              <img src="<?php echo esc_url($img['url']);?>" alt="<?php echo esc_attr($img['alt']);?>">
            </div>
            <div class="swiper-slide-content">
              <p class="swiper-slide-name"><?php the_sub_field('name');?></p>
              <p class="swiper-slide-job"><?php the_sub_field('job');?></p>
              <p class="swiper-slide-desc"><?php the_sub_field('desc');?></p>
            </div>
          </div>
        </div>
        
        <?php $i++; endwhile;
        endif; ?>
      </div>
      <div class="swiper-pagination team-swiper-pagination"></div>
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</section>



<section class="list">
  <div class="container">
    <p class="list-par"><?php the_field('par-text');?></p>
    <div class="list-wrap">
      <?php if (have_rows('list')): $i=1; while(have_rows('list')): the_row(); ?>
        <div class="list-item">
          <p class="list-number"><?php echo sprintf('%02d', $i); ?></p>
          <h2 class="list-title"><?php the_sub_field('title'); ?></h2>
          <p class="list-text"><?php the_sub_field('text'); ?></p>
        </div>
      <?php $i++; endwhile;
      endif; ?>
    </div>
  </div>
</section>


<?php if (have_rows('approach')): while(have_rows('approach')): the_row();
      $image = get_sub_field('image'); ?>
<section class="approach">
  <div class="container">
    <p class="approach-par"><?php the_sub_field('paragraph');?></p>
    <div class="approach-wrap">
      <div class="approach-content">
        <p class="approach-text"><?php the_sub_field('text');?></p>
        <h5 class="approach-title"><?php the_sub_field('title');?></h5>
      </div>
      <div class="approach-image">
        <img src="<?php echo esc_url($image['url']);?>" alt="<?php echo esc_attr($image['alt']);?>">
      </div>
    </div>
  </div>
</section>
<?php endwhile;
endif; ?>




<?PHP
 get_template_part( 'template-parts/footer-form');
?>


<?php get_footer();?>