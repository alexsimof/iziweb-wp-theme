<?php
/*
Template Name: Perfomance
Template Post Type: page 
*/
get_header();
?> 


<?php 
  if (have_rows('hero')): while(have_rows('hero')): the_row();
?>
<main class="hero">
  <div class="container">

    <div class="hero-wrap perf-hero-wrap">
      <div class="hero-content">
        <h1 class="hero-title"><?php the_sub_field('title'); ?></h1>
        <div class="hero-subtitle"><?php the_sub_field('subtitle'); ?></div>
        <div class="hero-btn button perf-hero-btn">
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
    <div class="packages-wrap perf-pack-wrap">
      <?php 
        if (have_rows('packages-cart')): $i = 1;
          while(have_rows('packages-cart')): the_row();
      ?>

      <div class="packages-cart">
        <div class="packages-cart-wrap perf-cart-wrap">
          <h6 class="packages-cart-title perf-cart-title"><?php the_sub_field('cart-name'); ?></h6>
          <p class="packages-cart-title1 perf-cart-title1 perf-cart<?php echo $i;?>"><?php the_sub_field('cart-name1'); ?></p>
          <p class="packages-cart-price perf-cart-price"><?php the_sub_field('price'); ?></p>
          <div class="packages-list perf-pack-list"><?php the_sub_field('list'); ?></div>
        </div>
        <div class="packages-btn perf-pack-btn button">
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

      <?php $i++; endwhile;
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
    <div class="advantages-wrap perf-adv-wrap">
    
      <div class="advantages-cart1 perf-adv-cart1">
        <img class="img1" src="<?php echo get_template_directory_uri();?>/assets/img/adv-perf-bg1.webp" alt="bg1">
        <img class="img2" src="<?php echo get_template_directory_uri();?>/assets/img/perf-adv1024-bg1.webp" alt="bg1">
        <p class="advantages-cart-title1 perf-adv-title1"><?php the_sub_field('cart-title_1'); ?></p>
      </div>
      <div class="advantages-cart2 perf-adv-cart2">
        <img class="img3" src="<?php echo get_template_directory_uri();?>/assets/img/adv-perf-bg2.webp" alt="bg2">
        <img class="img4" src="<?php echo get_template_directory_uri();?>/assets/img/perf-adv1024-bg2.webp" alt="bg2">
        <p class="advantages-cart-title2 perf-adv-title2"><?php the_sub_field('cart-title_2'); ?></p>
      </div>
      <div class="advantages-cart3 perf-adv-cart3">
        <img class="img5" src="<?php echo get_template_directory_uri();?>/assets/img/adv-perf-bg3.webp" alt="bg3">
        <img class="img6" src="<?php echo get_template_directory_uri();?>/assets/img/perf-adv1024-bg3.webp" alt="bg3">
        <p class="advantages-cart-title3 perf-adv-title3"><?php the_sub_field('cart-title_3'); ?></p>
      </div>
      <div class="advantages-cart4 perf-adv-cart4">
        <img class="img7" src="<?php echo get_template_directory_uri();?>/assets/img/adv-perf-bg4.webp" alt="bg4">
        <img class="img8" src="<?php echo get_template_directory_uri();?>/assets/img/perf-adv1024-bg4.webp" alt="bg4">
        <p class="advantages-cart-title4 perf-adv-title4"><?php the_sub_field('cart-title_4'); ?></p>
      </div>
    </div>
  </div>
</section>
<?php endwhile;
endif;?>


<?php 
  if (have_rows('operation')): while(have_rows('operation')): the_row();
?>
<section class="operation perf-oper">
  <div class="operation-back perf-oper-back">
    <div class="container">
      <h2 class="operation-title"><?php the_sub_field('title'); ?></h2>
      <div class="operation-wrap perf-oper-wrap">
        <?php if (have_rows('oper-repiter')): $i = 1; ?>
          <?php while(have_rows('oper-repiter')): the_row(); ?>

        <div class="operation-item">
          <p class="operation-num"><?php echo sprintf('%02d', $i); ?></p>
          <h4 class="operation-text perf-oper-txt"><?php the_sub_field('title-item'); ?></h4>
        </div>

        <?php $i++; endwhile;
        endif;?>
      </div>
    </div>
    <div class="logo-str operation-str perf-oper-str">
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
      <div class="prices-block1 perf-pr-block1">
        <p class="prices-text1 perf-pr-txt1"><?php the_sub_field('text_1'); ?></p>
      </div>
      <div class="prices-blocks">
        <div class="prices-block2 perf-pr-block2">
          <p class="prices-text2 perf-pr-txt2"><?php the_sub_field('text_2'); ?></p>
        </div>
        <div class="prices-block3 perf-pr-block3">
          <p class="prices-text3 perf-pr-txt3"><?php the_sub_field('text_3'); ?></p>
        </div>
        <div class="prices-block4 perf-pr-block4">
          <p class="prices-text4 perf-pr-txt4"><?php the_sub_field('text_4'); ?></p>
        </div>
        <div class="prices-block5 perf-pr-block5">
          <p class="prices-text5 perf-pr-txt5"><?php the_sub_field('text_5'); ?></p>
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


<?PHP
 get_template_part( 'template-parts/footer-form');
?>

<?php get_footer();?>