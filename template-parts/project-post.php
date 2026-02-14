



<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>

  <div class="container">
    <h1 class="post-title"><?the_title(); ?></h1>
    <div class="post-content">
      <div class="post-block block1">
        <h4><?php the_field('title_2');?></h4>
        <div class="post-body">
          <h6><?php the_field('title_3');?></h6>
          <p><?php the_field('text_1');?></p>
          <div class="post-image">
            <?php $img = get_field('image_1');?>
            <img src="<?php echo esc_url($img['url']);?>" alt="<?php echo esc_attr($img['alt']);?>">
          </div>
        </div>
      </div>

      <div class="post-block block2">
        <h4><?php the_field('title_4');?></h4>
        <div class="post-body body2">
          <?php the_field('services');?>
        </div>
      </div>

      <div class="post-block block3">
        <h4><?php the_field('title_5');?></h4>
        <div class="post-body body3">
          <?php the_field('text_5');?>
        </div>
      </div>

      <div class="post-block block4">
        <h4><?php the_field('title_6');?></h4>
        <div class="post-body body4">
          <?php the_field('text_6');?>
        </div>
      </div>

      <div class="post-gallery">
        <?php 
          $images = get_field('gallery');
          if( $images ): ?>
            <ul>
              <?php $i = 1; foreach( $images as $image ): ?>
                <li class="post-list<?php echo $i;?>">
                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </li>

              <?php $i++; endforeach; ?>
            </ul>

          <?php endif; ?>
      </div>

      <div class="post-block block5">
        <h4><?php the_field('title_7');?></h4>
        <div class="post-body body5">
          <?php the_field('text_7');?>
        </div>
      </div>
      
    </div>
  </div>

</article>



