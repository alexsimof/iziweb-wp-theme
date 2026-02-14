<?php
/*
Template Name: Front Page
Template Post Type: page
*/
?>

<?php get_header(); ?>


<?php 
  if (have_rows('main')): while(have_rows('main')): the_row();
    $main_title = get_sub_field('main-title');
    $main_text = get_sub_field('main-text');
    $main_subtitle = get_sub_field('main-subtitle');
    $btn_link = get_sub_field('main-button-link');
    $btn_name = get_sub_field('main-button-name');
?>
<main class="main">
  <div class="container">
    <div class="main-wrap">
      <h1 class="main-title"><?php echo $main_title; ?></h1>
      <p class="main-subtitle"><?php echo $main_subtitle; ?></p>
      <div class="main-btn button">
        <a href="<?php echo $btn_link; ?>" class="button-link"><?php echo $btn_name; ?></a>
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
  if (have_rows('conditions')): while(have_rows('conditions')): the_row();
    $slogan = get_sub_field('slogan');
    $name = get_sub_field('name');
?>
<section class="condi">
  <div class="container">
    <p class="condi-name paragraph"><?php echo $name; ?></p>
    <h5 class="condi-slogan"><?php echo $slogan; ?></h5>
    <div class="condi-wrap">

      <div class="condi-cart active">
        <p class="condi-number"><?php the_sub_field('cart_1-number'); ?></p>
        <h4 class="condi-cart-title"><?php the_sub_field('cart_1-title'); ?></h4>
        <p class="condi-text"><?php the_sub_field('cart_1-text'); ?></p>
      </div>
      

      <div class="condi-cart">
        <p class="condi-number"><?php the_sub_field('cart_2-number'); ?></p>
        <h4 class="condi-cart-title"><?php the_sub_field('cart_2-title'); ?></h4>
        <p class="condi-text"><?php the_sub_field('cart_2-text'); ?></p>
      </div>

      <div class="condi-cart">
        <p class="condi-number"><?php the_sub_field('cart_3-number'); ?></p>
        <h4 class="condi-cart-title"><?php the_sub_field('cart_3-title'); ?></h4>
        <p class="condi-text"><?php echo the_sub_field('cart_3-text'); ?></p>
      </div>

      <div class="condi-cart">
        <p class="condi-number"><?php the_sub_field('cart_4-number'); ?></p>
        <h4 class="condi-cart-title"><?php the_sub_field('cart_4-title'); ?></h4>
        <p class="condi-text"><?php the_sub_field('cart_4-text'); ?></p>
      </div>

    </div>
  </div>
</section>
<?php endwhile;
endif;?>



<?php 
  if (have_rows('services')): while(have_rows('services')): the_row();
?>
<section class="services" id="services_menu">
  <div class="container">
    <p class="services-name paragraph"><?php the_sub_field('name-block'); ?></p>
    <div class="services-wrap">
      <?php 
        if (have_rows('service-cart')): while(have_rows('service-cart')): the_row();
      ?>
      <div class="services-cart anim-arrows">
        <p class="services-number"><?php the_sub_field('number'); ?></p>
        <p class="services-title"><?php the_sub_field('title'); ?></p>
        <p class="services-text"><?php the_sub_field('text'); ?></p>
        <p class="services-price"><?php the_sub_field('price'); ?></p>
        <div class="services-btn">
          <a href="<?php the_sub_field('button-link'); ?>" class="services-btn-cart"></a>
          <div class="arrows services-arrow">
            <svg class="arrows-icon icon1 services-icon">
              <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
            </svg>
            <svg class="arrows-icon icon2 services-icon">
              <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
            </svg>
            <svg class="arrows-icon icon3 services-icon">
              <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
            </svg>
          </div>
        </div>
      </div>
      <?php endwhile;
      endif;?>
    </div>
    <div class="services-wrap-slider">
      <div class="swiper services-swiper">
        <div class="swiper-wrapper">
          <?php 
            if (have_rows('service-cart')): while(have_rows('service-cart')): the_row();
          ?>
          <div class="swiper-slide services-slide">
            <div class="services-cart anim-arrows">
              <p class="services-number"><?php the_sub_field('number'); ?></p>
              <p class="services-title"><?php the_sub_field('title'); ?></p>
              <p class="services-text"><?php the_sub_field('text'); ?></p>
              <p class="services-price"><?php the_sub_field('price'); ?></p>
              <div class="services-btn">
                <a href="<?php the_sub_field('button-link'); ?>" class="services-btn-cart"></a>
                <div class="arrows services-arrow">
                  <svg class="arrows-icon icon1 services-icon">
                    <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
                  </svg>
                  <svg class="arrows-icon icon2 services-icon">
                    <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
                  </svg>
                  <svg class="arrows-icon icon3 services-icon">
                    <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
                  </svg>
                </div>
              </div>
            </div>
          </div><!-- .slide -->
          <?php endwhile;
            endif;?>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

      </div>
    </div>
    <div class="services-submit anim-arrows">
      <a href="<?php the_sub_field('services-button-link'); ?>" class="button-link services-button-link"><?php the_sub_field('services-button-name'); ?></a>
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
</section>
<?php endwhile;
endif;?>



<?php 
  if( have_rows('projects') ): while( have_rows('projects') ): the_row();
?>
<section class="projects">
  <div class="container">
    <p class="projects-name paragraph"><?php the_sub_field('pro-name'); ?></p>
    <div class="projects-accordion">
      <?php 
        global $post;

          $myposts = get_posts([
            'numberposts' => 4,
            'post_type'   => 'project',
            'category_name' => 'project',
          ]);
          $i=1;
          if( $myposts ){ 
            foreach( $myposts as $post ){
              setup_postdata( $post );
            $post_thumbnail_id = get_post_thumbnail_id( $post_id );
            $alt = get_post_meta( $post_thumbnail_id, '_wp_attachment_image_alt', true );
        ?>

          <div class="project-item anim-arrows project-item-<?php echo $i;?> <?php echo $i === 1 ? 'active' : ''; ?>" data-index="<?php echo $i; ?>">
            <p class="project-item-num"><?php echo sprintf('%02d', $i); ?></p>
            <div class="project-item-wrap">
              <div class="project-item-header">
                <h4 class="project-item-title"><?php the_title(); ?></h4>
                <div class="project-item-text text-<?php echo $i; ?>">
                  <?php the_excerpt(); ?>
                  <!-- 
                    <a href="<?php the_permalink();?>"  class="project-item-link link-<?php echo $i; ?>">
                    <?php the_sub_field('pro-link'); ?>
                    </a> 
                   -->
                  <!-- <div class="project-item-tags">

                    <?php 
                      $a = get_the_category_list(' '); 
                      $a = preg_replace('#<a[^>]*>(.*?)</a>#is', '<span>$1</span>', $a);
                      echo $a;

                    //  echo get_the_category_list(' '); 
                    ?>

                  </div> -->
                </div>
              </div>
              <div class="project-item-image project-image-<?php echo $i;?>">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo esc_attr($alt);?>">
              </div>
            </div>
            <div class="project-item-dubl project-dubl-<?php echo $i;?>">
              <p class="project-item-number"><?php echo sprintf('%02d', $i); ?></p>
              <h4 class="project-item-title1"><?php the_title(); ?></h4>
            </div>
            <div class="arrows project-arrows">
              <a href="<?php the_permalink();?>">
                <svg class="arrows-icon icon1">
                  <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
                </svg>
                <svg class="arrows-icon icon2">
                  <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
                </svg>
                <svg class="arrows-icon icon3">
                  <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
                </svg>
              </a>
            </div>
          </div>

      <?php
        $i++;
        	} 
        } else {
          // Постов не найдено
        }

        wp_reset_postdata();
      ?>

    </div>
  </div>
</section>
<?php endwhile;
  endif; ?>



<?php 
  if( have_rows('blog') ): while( have_rows('blog') ): the_row();
?>
<section class="blog">
  <div class="container">
    <p class="blog-name paragraph"><?php the_sub_field('name'); ?></p>
    <h2 class="blog-title"><?php the_sub_field('title'); ?></h2>
    <div class="blog-header">
      <p class="blog-text"><?php the_sub_field('text'); ?></p>
      <div class="blog-link">
        <a href="#"><?php the_sub_field('link'); ?></a>
        <div class="arrows">
          <svg class="blog-arrows icon1">
            <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
          </svg>
          <svg class="blog-arrows icon2">
            <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
          </svg>
          <svg class="blog-arrows icon3">
            <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
          </svg>
        </div>
      </div>
    </div>
    <div class="blog-wrap">
      <?php
        global $post;
        $myposts = get_posts([
          'numberposts' => 3,
          'category_name' => 'news'
        ]);
        $i = 1;
        if( $myposts ){
          foreach( $myposts as $post ){
            setup_postdata( $post );
            $post_thumbnail_id = get_post_thumbnail_id( $post_id );
            $alt = get_post_meta( $post_thumbnail_id, '_wp_attachment_image_alt', true );
      ?>
              <div class="blog-post-<?php echo $i;?>">
                <div class="blog-image-<?php echo $i;?>">
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo esc_attr($alt);?>">
                </div>
                <div class="blog-content-<?php echo $i;?>">
                  <div class="blog-time">
                    <span><?php echo get_the_date('M j Y'); ?></span>
                  </div>
                  <p class="blog-news-title"><?php the_title();?></p>
                </div>
              </div>
      <?php
        $i++;
          }
        } else {
          // Постов не найдено
        }
        wp_reset_postdata(); // Сбрасываем $post
      ?>
    </div>
    <div class="blog-link-1">
      <a href="#"><?php the_sub_field('link'); ?></a>
      <div class="arrows">
        <svg class="blog-arrows icon1">
          <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
        </svg>
        <svg class="blog-arrows icon2">
          <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
        </svg>
        <svg class="blog-arrows icon3">
          <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
        </svg>
      </div>
    </div>
  </div>
</section>
<?php endwhile;
endif; ?>


<section class="video">
  <div class="container">
    <div class="video-wrap">
      <h2 class="video-title">Давайте зробимо Ваш проект успішним</h2>
      <div class="video-block">
        <video class="video-item" src="<?php echo get_template_directory_uri(); ?>/assets/video/video.webm" autoplay loop muted ></video>
      </div>
    </div>
    <div class="video-button anim-arrows">
      <a href="#footer_form" class="button-link">відправити запит</a>
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
</section>



<?php 
  if( have_rows('seo') ): while( have_rows('seo') ): the_row();
?>
<section class="seo">
  <div class="container">
    <div class="seo-wrap">
      <div class="seo-open">
        <?php the_sub_field('seo-text_open');?>
      </div>
      <div class="seo-button-open">
        <a class="seo-btn-open" href=""><?php the_sub_field('more');?></a>
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
        <?php the_sub_field('seo-text_close');?>
      </div>
      <div class="seo-button-close">
        <a class="seo-btn-close" href="#"><?php the_sub_field('close');?></a>
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
<?php endwhile;
endif; ?>



<?PHP
 get_template_part( 'template-parts/footer-form');
?>



<?php get_footer();?>

