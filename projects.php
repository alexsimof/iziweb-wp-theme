<?php
/*
Template Name: Projects
Template Post Type: page
*/
get_header();
?>

<section class="drafts">
  <div class="container">
    <h2 class="drafts-title"><?php the_field('project-title');?></h2>
    <p class="drafts-text"><?php the_field('project-text');?></p>
    <div class="drafts-wrap">
      <?php 

        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $args = array(
            'post_type' => 'project',
            'posts_per_page' => 6,
            'paged' => $paged,
        );

        $query = new WP_Query( $args );

        if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : $query->the_post();
      ?>  
          
          <div class="drafts-item anim-arrows">
            <a class="drafts-item-link" href="<?php the_permalink(); ?>">
              <div class="drafts-image">
                <?php 
                  $post_thumbnail_id = get_post_thumbnail_id( $post_id );
                  $alt = get_post_meta( $post_thumbnail_id, '_wp_attachment_image_alt', true );
                ?>
                <img src="<?php the_post_thumbnail_url('project-thumb'); ?>" alt="<?php echo $alt;?>">
              </div>
            </a>
            <div class="drafts-content">
              <a class="drafts-item-link" href="<?php the_permalink(); ?>">
                <p class="drafts-item-title"><?php the_title();?></p>
              </a>
              <div class="drafts-category">
                <?php echo get_the_category_list(' '); ?>
              </div>
              <div class="drafts-btn">
                <a href="<?php the_permalink(); ?>" class="drafts-btn-cart"></a>
                <div class="arrows drafts-arrow">
                  <svg class="arrows-icon icon1 drafts-icon">
                    <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
                  </svg>
                  <svg class="arrows-icon icon2 drafts-icon">
                    <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
                  </svg>
                  <svg class="arrows-icon icon3 drafts-icon">
                    <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/sprite.svg#a-left"></use>
                  </svg>
                </div>
              </div>
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




