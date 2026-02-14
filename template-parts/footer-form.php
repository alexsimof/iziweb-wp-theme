<?php 
  if( have_rows('contacts', 2) ): while( have_rows('contacts', 2) ): the_row();
?>

<section class="contacts">
  <div class="container">
    <div class="contacts-wrap" id="footer_form">
      <h2 class="contacts-title"><?php the_sub_field('title');?></h2>
      <p class="contacts-subtitle"><?php the_sub_field('subtitle');?></p>

      <div id="contacts-form" class="form">
        <h5 class="form-title"><?php the_sub_field('form-title');?></h5>
        <p class="form-subtitle"><?php the_sub_field('form-subtitle');?></p>

        <div class="form-wrapper-after form-title" style="font-size:30px;color:#98B639;display:none;">
          Дякуємо за звернення! Ми обов’язково зв’яжемося з Вами найближчим часом.
        </div>

        <div class="form-wrapper">
          <p class="form-text"><?php the_sub_field('btn-title');?></p>

          <?PHP echo do_shortcode('[contact-form-7 id="42fa91c" title="Форма в футере"]'); ?>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>





<?php endwhile;

endif; ?>





<script>

jQuery(document).on('wpcf7mailsent', function() {

  jQuery('.form-wrapper').fadeOut(300, function() {

    jQuery('.form-wrapper-after').fadeIn(500);

  });

});

</script>







<script>

jQuery(document).ready(function($) {



  // При клике по кнопке отправки — плавно прокручиваем к форме

  $(document).on('click', '.form input[type="submit"], .form button[type="submit"]', function() {

    $('html, body').animate({

      scrollTop: $('.form-wrapper').offset().top - 100

    }, 600);

  });



  // При успешной отправке формы — плавно прячем и показываем блок

  $(document).on('wpcf7mailsent', function() {

    $('.form-wrapper').fadeOut(300, function() {

      $('.form-wrapper-after').fadeIn(500);

      // после появления — плавно прокручиваем к нему

      $('html, body').animate({

        scrollTop: $('.form-wrapper-after').offset().top - 100

      }, 600);

    });

  });



});

</script>

