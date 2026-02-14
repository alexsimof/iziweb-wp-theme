

<article id="news-blog-<?php the_ID(); ?>" <?php post_class('news-blog'); ?>>
  <div class="container">
    <div class="news-blog-wrap">
      <div class="news-blog-sidebar">
        <div class="news-feed">

          <?php if (have_rows('news-hero',545)): while(have_rows('news-hero',545)): the_row();
              $btn_link = get_sub_field('button-link');
              $btn_name = get_sub_field('button-text');
              $btn_hero_text = get_sub_field('button-hero-text');
          ?>

          <h6 class="news-feed-title"><?php the_sub_field('feed-title'); ?></h6>
          <p class="news-feed-text"><?php the_sub_field('feed-text'); ?></p>
          <form action="" class="news-form">
            <div class="news-group">
              <input type="email" placeholder="your@company.com">
              <span><?php the_sub_field('input-text'); ?></span>
            </div>
            <div class="news-btn button">
              <a href="<?php echo $btn_link; ?>" class="news-link"><?php echo $btn_name; ?></a>
              <div class="arrows">
                <svg class="arrows-icon icon1 news-arrows-icon">
                  <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
                </svg>
                <svg class="arrows-icon icon2 news-arrows-icon">
                  <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
                </svg>
                <svg class="arrows-icon icon3 news-arrows-icon">
                  <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
                </svg>
              </div>
            </div>
          </form>

          <div class="news-social">
            <svg class="news-fb">
              <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/icon-fb.svg#icon-fb"></use>
            </svg>
            <svg class="news-in">
              <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/icon-in.svg#icon-in"></use>
            </svg>
            <svg class="news-iks">
              <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/icon-iks.svg#icon-iks"></use>
            </svg>
          </div>

          <?php endwhile;
          endif;?>
        </div>

        <div class="news-blog-btn-prev">
          <a href="<?php the_field('backto-url');?>" class="news-blog-link"><?php the_field('backto-name');?></a>
        </div>
      </div>



      <!-- hero block  -->

      <div class="news-blog-hero">
        <div class="news-blog-image">

          <?php
            $post_thumbnail_id = get_post_thumbnail_id( $post_id );
            $alt = get_post_meta( $post_thumbnail_id, '_wp_attachment_image_alt', true );
          ?>

          <img src="
            <?php
              if( has_post_thumbnail() ) {
                echo the_post_thumbnail_url();
                }
                else {
                  echo get_template_directory_uri().'/assets/img/post-img.webp';
                }
            ?>" alt="<?php echo $alt; ?>">
        </div>

        <div class="news-blog-aut">
          <p class="news-blog-time"><?php the_time('j F Y');?></p>
          <p class="news-blog-autor">@<?php the_author();?></p>
        </div>

        <div class="news-blog-body">
          <h2 class="news-blog-title"><?php the_title();?></h2>
          <div class="news-blog-content">
            <?php the_content(); ?>
          </div>
        </div>
      </div><!-- .news-blog-hero -->
    </div> <!-- .news-blog-wrap -->

    <div class="news-blog-other">
      <div class="news-blog-header">
        <h2 class="news-blog-other-title"><?php the_field('recommend-title');?></h2>
        <div class="news-blog-btn button">
          <a href="<?php the_field('other-article-url'); ?>" class="news-blog-link"><?php the_field('other-article-name'); ?></a>
          <div class="arrows">
            <svg class="arrows-icon icon1 news-arrows-icon">
              <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
            </svg>
            <svg class="arrows-icon icon2 news-arrows-icon">
              <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
            </svg>
            <svg class="arrows-icon icon3 news-arrows-icon">
              <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
            </svg>
          </div>
        </div>
      </div>

      <div class="news-blog-recommend">
        <?php
        global $post;
        $myposts = get_posts([
          'numberposts' => 3,
          'category_name' => 'recommend',
        ]);

        if( $myposts ){
          foreach( $myposts as $post ){
            setup_postdata( $post );
            ?>

            <div class="articles-item">
              <div class="articles-image">
                <?php 
                  $post_thumbnail_id = get_post_thumbnail_id( $post_id );
                  $alt = get_post_meta( $post_thumbnail_id, '_wp_attachment_image_alt', true );
                ?>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo $alt;?>">
              </div>
              <div class="articles-content">
                <p class="articles-date"><?php the_date('j M Y');?></p>
                <p class="articles-title"><?php the_title();?></p>
              </div>
            </div>
            <?php
          }
        } else {
          // Постов не найдено
        }
        wp_reset_postdata(); // Сбрасываем $post
        ?>
      </div>
    </div>
  </div><!-- .container -->


  <?php 
    if( have_rows('contacts', 2) ): while( have_rows('contacts', 2) ): the_row();
  ?>
  <div class="contacts design-contacts">
    <div class="container">
      <div class="contacts-wrap">
        <h2 class="contacts-title"><?php the_sub_field('title');?></h2>
        <p class="contacts-subtitle"><?php the_sub_field('subtitle');?></p>
        <form id="contacts-form" class="form" action="">
          <h5 class="form-title"><?php the_sub_field('form-title');?></h5>
          <p class="form-subtitle"><?php the_sub_field('form-subtitle');?></p>
          <div class="form-wrapper">
            <div class="form-header">
              <div class="form-group">
                <label for="name"><?php the_sub_field('form-label-name');?></label>
                <input type="text" name="name" id="name" placeholder="Яке Ваше повне ім’я?">
              </div>
              <div class="form-group">
                <label for="email"><?php the_sub_field('form-label-email');?></label>
                <input type="email" name="email" id="email" placeholder="your@company.com">
              </div>
            </div>
            <p class="form-text"><?php the_sub_field('btn-title');?></p>
            <div class="form-buttons">
              <div class="form-mess">
                <a class="form-btn telega" href=""><?php the_sub_field('btn-telega');?></a>
              </div>
              <div class="form-mess">
                <a class="form-btn viber" href=""><?php the_sub_field('btn-viber');?></a>
              </div>
              <div class="form-mess">
                <a class="form-btn whatsapp" href=""><?php the_sub_field('btn-whatsapp');?></a>
              </div>
              <div class="form-mess">
                <a class="form-btn email" href=""><?php the_sub_field('btn-email');?></a>
              </div>
            </div>
            <div class="form-submit">
              <a href=""><?php the_sub_field('btn-submit');?></a>
              <div class="arrows">
                <svg class="form-arrows icon1">
                  <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
                </svg>
                <svg class="form-arrows icon2">
                  <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
                </svg>
                <svg class="form-arrows icon3">
                  <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
                </svg>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php endwhile;
  endif; ?>

</article>



