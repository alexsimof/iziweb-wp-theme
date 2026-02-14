<?php
/*
Template Name: News
Template Post Type: page
*/
get_header();
?>


<main class="news">
  <div class="container">
    <div class="news-wrap">
      <?php if (have_rows('news-hero')): while(have_rows('news-hero')): the_row();
            $btn_link = get_sub_field('button-link');
            $btn_name = get_sub_field('button-text');
            $btn_hero_text = get_sub_field('button-hero-text');
       ?>
      <div class="news-feed">
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
      </div>
      <?php endwhile;
      endif;?>

      <?php
        global $post;
        $myposts = get_posts(['numberposts' => 1, 'category_name' => 'hero']);

        if( $myposts ){
          foreach( $myposts as $post ){
            setup_postdata( $post );
      ?>
        <div class="news-hero-block">
          <div class="news-hero" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat center">
            <div class="news-mask">
              <h2 class="news-title"><?php the_title();?></h2>
              <div class="news-text"><?php the_excerpt();?></div>
              <p class="news-autor">@<?php the_author();?></p>
              <p class="news-time"><?php the_time('j F Y');?></p>
            </div>
          </div>
          <div class="news-hero-btn button">
            <a href="<?php the_permalink(); ?>" class="news-link"><?php echo $btn_hero_text ?></a>
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
      <?php
          }
        } else {
          // Постов не найдено
        }
        wp_reset_postdata(); // Сбрасываем $post
      ?>
    </div>
  </div>
</main>


<section class="articles">
  <div class="container">
    <h2 class="articles-title"><?php the_field('article-title');?></h2>
    <div class="articles-wrap">
      <?php

        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 6,
            'paged' => $paged,
        );

        $query = new WP_Query( $args );

        if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : $query->the_post();
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

      <?php endwhile;
        wp_reset_postdata(); // Сбрасывает данные текущей записи
        else :
          echo '<p>Записей не найдено.</p>';
          endif;
      ?>

    </div>

    
    <div class="articles-pagination">
      <?php
      // Вывод ссылок пагинации
        echo paginate_links( array(
          'total' => $query->max_num_pages,
          'current' => $paged,
          'mid_size' => 1, // Количество ссылок с каждой стороны от текущей страницы
          'prev_text' => __( '' ),
          'next_text' => __( '' ),
          'before_page_number' => 0,
      ) );

      ?>
    </div>
  </div>
</section>




<?PHP
 get_template_part( 'template-parts/footer-form');
?>


<?php get_footer();?>




