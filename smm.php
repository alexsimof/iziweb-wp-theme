<?php
/*
Template Name: Smm
Template Post Type: page 
*/
get_header();
?> 


<?php 
  if (have_rows('hero')): while(have_rows('hero')): the_row();
?>
<main class="hero">
  <div class="container">
    <div class="hero-wrap smm-hero-wrap">
      <div class="hero-content">
        <h1 class="hero-title smm-hero-title"><?php the_sub_field('title'); ?></h1>
        <p class="hero-title2 smm-hero-title2"><?php the_sub_field('add-title'); ?></p>
        <div class="hero-subtitle smm-hero-subtitle"><?php the_sub_field('subtitle'); ?></div>
        <div class="hero-btn button smm-hero-btn">
          <a href="<?php the_sub_field('link'); ?>" class="button-link"><?php the_sub_field('name'); ?></a>
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
  </div>
</main>
<?php endwhile;
endif;?>

<section class="logo-str">
  <div class="logo-wrap">
    <svg class="logo-icon">
      <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/logo-frame.svg#logo-frame"></use>
    </svg>
  </div>
</section>


<?php 
  if (have_rows('packages')): while(have_rows('packages')): the_row();
?>
<section class="packages">
  <div class="container">
    <h2 class="packages-title"><?php the_sub_field('title'); ?></h2>
    <div class="packages-wrap smm-pack-wrap">
      <?php 
        if (have_rows('packages-cart')): while(have_rows('packages-cart')): the_row();
      ?>

      <div class="packages-cart">
        <div class="packages-cart-wrap smm-pack-cart-wrap">
          <h6 class="packages-cart-title smm-pack-title"><?php the_sub_field('cart-name'); ?></h6>
          <p class="packages-cart-price smm-pack-price"><?php the_sub_field('price'); ?></p>
          <div class="packages-list smm-pack-list"><?php the_sub_field('list'); ?></div>
        </div>
        <div class="packages-btn smm-pack-btn button">
          <a href="<?php the_sub_field('btn-link'); ?>" class="button-link packages-link"><?php the_sub_field('btn-name'); ?></a>
          <div class="arrows">
            <svg class="arrows-icon icon1 packages-icon">
              <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
            </svg>
            <svg class="arrows-icon icon2 packages-icon">
              <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
            </svg>
            <svg class="arrows-icon icon3 packages-icon">
              <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
            </svg>
          </div>
        </div>
      </div>

      <?php endwhile;
      endif;?>

    </div>
  </div>
</section>
<?php endwhile;
endif;?>


<?php 
  if (have_rows('advantages')): while(have_rows('advantages')): the_row();
?>
<section class="advantages">
  <div class="container">
    <h2 class="advantages-title"><?php the_sub_field('title'); ?></h2>
    <div class="advantages-wrap smm-adv-wrap">
    
      <div class="advantages-cart1 smm-adv-cart1">
        <img class="img1" src="<?php echo get_template_directory_uri();?>/assets/img/smm-adv-bg1.webp" alt="bg1">
        <img class="img2" src="<?php echo get_template_directory_uri();?>/assets/img/smm-adv1024-bg1.webp" alt="bg1">
        <p class="advantages-cart-title1 smm-adv-cart-title1"><?php the_sub_field('cart-title_1'); ?></p>
      </div>
      <div class="advantages-cart2 smm-adv-cart2">
        <img class="img3" src="<?php echo get_template_directory_uri();?>/assets/img/smm-adv-bg2.webp" alt="bg2">
        <img class="img4" src="<?php echo get_template_directory_uri();?>/assets/img/smm-adv1024-bg2.webp" alt="bg2">
        <p class="advantages-cart-title2 smm-adv-cart-title2"><?php the_sub_field('cart-title_2'); ?></p>
      </div>
      <div class="advantages-cart3 smm-adv-cart3">
        <img class="img5" src="<?php echo get_template_directory_uri();?>/assets/img/smm-adv-bg3.webp" alt="bg3">
        <img class="img6" src="<?php echo get_template_directory_uri();?>/assets/img/smm-adv1024-bg3.webp" alt="bg3">
        <p class="advantages-cart-title3 smm-adv-cart-title3"><?php the_sub_field('cart-title_3'); ?></p>
      </div>
      <div class="advantages-cart4 smm-adv-cart4">
        <img class="img7" src="<?php echo get_template_directory_uri();?>/assets/img/smm-adv-bg4.webp" alt="bg4">
        <img class="img8" src="<?php echo get_template_directory_uri();?>/assets/img/smm-adv1024-bg4.webp" alt="bg4">
        <p class="advantages-cart-title4 smm-adv-cart-title4"><?php the_sub_field('cart-title_4'); ?></p>
      </div>
    </div>
  </div>
</section>
<?php endwhile;
endif;?>




<?php 
  if (have_rows('operation')): while(have_rows('operation')): the_row();
?>
<section class="operation">
  <div class="operation-back smm-oper-block">
    <div class="container">
      <h2 class="operation-title"><?php the_sub_field('title'); ?></h2>
      <div class="operation-wrap smm-oper-wrap">
        <?php if (have_rows('oper-repiter')): $i = 1; ?>
          <?php while(have_rows('oper-repiter')): the_row(); ?>

        <div class="operation-item smm-oper-item">
          <p class="operation-num"><?php echo sprintf('%02d', $i); ?></p>
          <h4 class="operation-text smm-oper-text"><?php the_sub_field('title-item'); ?></h4>
        </div>

        <?php $i++; endwhile;
        endif;?>
      </div>
    </div>
    <div class="logo-str operation-str smm-oper-str">
      <div class="logo-wrap">
        <svg class="logo-icon">
          <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/logo-frame.svg#logo-frame"></use>
        </svg>
      </div>
    </div>
  </div>
</section>
<?php endwhile;
endif;?>



<?php 
  if (have_rows('prices')): while(have_rows('prices')): the_row();
?>
<section class="prices">
  <div class="container">
    <div class="prices-wrap">
      <h2 class="prices-title"><?php the_sub_field('title'); ?></h2>
      <div class="prices-block1 smm-pr-bl1">
        <p class="prices-text1"><?php the_sub_field('text_1'); ?></p>
      </div>
      <div class="prices-blocks">
        <div class="prices-block2">
          <p class="prices-text2 smm-pr-txt2"><?php the_sub_field('text_2'); ?></p>
        </div>
        <div class="prices-block3 smm-pr-bl3">
          <p class="prices-text3 smm-pr-txt3"><?php the_sub_field('text_3'); ?></p>
        </div>
        <div class="prices-block4">
          <p class="prices-text4 smm-pr-txt4"><?php the_sub_field('text_4'); ?></p>
        </div>
        <div class="prices-block5">
          <p class="prices-text5 smm-pr-txt5"><?php the_sub_field('text_5'); ?></p>
        </div>
      </div>
      <div class="prices-btn button">
        <a href="<?php the_sub_field('button-link'); ?>" class="button-link prices-link"><?php the_sub_field('button-name'); ?></a>
        <div class="arrows prices-arrows">
          <svg class="arrows-icon icon1 prices-icon">
            <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
          </svg>
          <svg class="arrows-icon icon2 prices-icon">
            <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
          </svg>
          <svg class="arrows-icon icon3 prices-icon">
            <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
          </svg>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endwhile;
endif;?>


<?php
 $full_text = get_post_field('post_content', get_the_ID());
 $parts = get_extended($full_text);
 $part_one = apply_filters('the_content', $parts['main']);
 $part_two = apply_filters('the_content', $parts['extended'])
?>


<section class="seo">
  <div class="container">
    <div class="seo-wrap">
      <div class="seo-open">
        <?php echo $part_one;?>
      </div>
      <div class="seo-button-open">
        <a class="seo-btn-open" href="">читати далі</a>
        <div class="arrows">
          <svg class="seo-arrows icon1">
            <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
          </svg>
          <svg class="seo-arrows icon2">
            <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
          </svg>
          <svg class="seo-arrows icon3">
            <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
          </svg>
        </div>
      </div>
      <div class="seo-close">
        <?php echo $part_two;?>
      </div>
      <div class="seo-button-close">
        <a class="seo-btn-close" href="#">Закрити</a>
        <div class="arrows">
          <svg class="seo-arrows icon1">
            <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
          </svg>
          <svg class="seo-arrows icon2">
            <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
          </svg>
          <svg class="seo-arrows icon3">
            <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
          </svg>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
  get_template_part( 'template-parts/footer-form' );
?>


<?php get_footer();?>
