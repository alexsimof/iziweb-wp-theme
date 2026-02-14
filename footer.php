

<?php 
 if( have_rows('footer', 2 ) ): while( have_rows('footer', 2) ): the_row(); 
?>
    <footer class="footer">
      <div class="container">
        <div class="footer-wrapper">
          <div class="footer-left">
            <?php
            $logo = get_sub_field('footer-logo');
            if($logo): ?>
              <div class="footer-logo">

            <?php
            if ( is_front_page() || is_home() ) : ?>
                <img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>">
            <?php else : ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>">
                </a>
            <?php endif; ?>

              </div>
            <?php endif; ?>
            <p class="footer-text"><?php echo esc_html(get_sub_field('footer-text'));?></p>
            
          </div>

          <div class="footer-menu-left">
            <?php
              wp_nav_menu( [
              'theme_location'  => 'footer_menu_left',
              'container'       => 'nav',
              'container_class' => 'footer-nav-left',
              'menu_class'      => 'footer-menu_left', 
              'echo'            => true,
              ] );
            ?>
          </div>

          <div class="footer-right">
            <?php 
              $fb_link = get_sub_field('fb-link');
              $insta_link = get_sub_field('insta-link');
              $in_link = get_sub_field('in-link');
              if($fb_link || $insta_link || $in_link):
            ?>
            <div class="footer-social">
              <a href="<?php echo $fb_link; ?>">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/icon_fb.svg" alt="icon-facebook">
              </a>
              <a href="<?php echo $insta_link; ?>">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/icon_insta.svg" alt="icon-instagram">
              </a>
              <a href="<?php echo $in_link; ?>">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/icon_in.svg" alt="icon-linkedin">
              </a>
              <?php endif;?>
            </div>

            <?PHP
            $tel = get_sub_field('footer-phone');
            $tel = str_replace(['-', ' '], '', $tel);
            ?>

            <p class="footer-text-right"><?php echo esc_html(get_sub_field('footer-text-right'));?></p>
            <a href="mailto:<?php echo get_sub_field('footer-email');?>" class="footer-email"><?php echo esc_html(get_sub_field('footer-email'));?></a>
            <a href="tel:<?php echo $tel;?>" class="footer-phone"><?php echo esc_html(get_sub_field('footer-phone'));?></a>
          </div>
        </div>
        <div class="footer-menu-box">
          
          <div class="footer-menu-right">
            <?php
              wp_nav_menu( [
              'theme_location'  => 'footer_menu_right',
              'container'       => 'nav',
              'container_class' => 'footer-nav-right',
              'menu_class'      => 'footer-menu-right', 
              'echo'            => true,
              ] );
            ?>
          </div>
        </div>
        <div class="footer-bottom">
          <div class="footer-copy">
            <p>&copy; <?php echo date('Y') . '&nbsp;' . esc_html(get_sub_field('footer-copy')); ?></p>
          </div>
          <div class="footer-terms">

            <a href="/ugoda-koristuvacha-sajtu-izi-web/">Умови обслуговування</a>
            <a href="/privacy-policy/">Політика конфіденційності</a>
            <a href="/politika-vikoristannya-fajliv-cookie/">Політика використання файлів cookie</a> 

          </div>
        </div>
      </div>
    </footer>
    <?php endwhile;
    endif; ?>



<script>
(function(){
  // Утилитная функция: убрать хэш из строки (не перезагружая страницу)
  function removeHashFromUrl() {
    try {
      history.replaceState(null, null, window.location.pathname + window.location.search);
    } catch (e) {
      // ничего критичного, если браузер не поддерживает
    }
  }

  // 1) При загрузке страницы удаляем якорь из action у всех форм CF7 (статичные формы)
  document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('form.wpcf7-form').forEach(function(form){
      if (form.action && form.action.indexOf('#') !== -1) {
        form.action = form.action.split('#')[0];
      }
    });
    // удалить хэш из URL если он уже появился
    removeHashFromUrl();
  });

  // 2) Перехват клика по кнопкам отправки (для динамических форм в попапах)
  // Мы удаляем хэш из action прямо перед отправкой и очищаем URL
  document.body.addEventListener('click', function(e){
    var btn = e.target.closest('button[type="submit"], input[type="submit"]');
    if (!btn) return;
    var form = btn.closest('form.wpcf7-form');
    if (!form) return;

    // Убираем якорь из action, чтобы браузер не прыгнул
    if (form.action && form.action.indexOf('#') !== -1) {
      form.action = form.action.split('#')[0];
    }
    // Убираем хэш из адресной строки
    removeHashFromUrl();

    // Ничего не предотвращаем — даём CF7 обрабатывать сабмит по AJAX как обычно
  }, true); // useCapture = true, чтобы перехватывать раннее

  // 3) Обработка события после успешной отправки — закрыть попап и очистить форму
  // (CF7 выбрасывает несколько событий; используем wpcf7mailsent как подтверждение успешной отправки)
  document.addEventListener('wpcf7mailsent', function(event) {
    var form = event.target; // сам <form>
    // найти родительский попап
    var popup = form.closest('.header-popup');
    if (popup) {
      // плавно закрыть попап (или просто скрыть)
      popup.style.transition = 'opacity 0.18s ease';
      popup.style.opacity = 0;
      setTimeout(function(){ popup.style.display = 'none'; popup.style.opacity = ''; popup.style.transition = ''; }, 200);
    }
    // очистить поля
    try { form.reset(); } catch (e) {}
    // удалить хэш из URL (на всякий случай)
    removeHashFromUrl();
  }, false);

  // 4) На крайний случай — если CF7 всё-таки добавит # в адрес (редко), убрать его сразу
  window.addEventListener('hashchange', function() {
    // если хэш похож на wpcf7-... — удаляем
    if (location.hash && /^#wpcf7-/.test(location.hash)) {
      removeHashFromUrl();
    }
  });

})();
</script>



    <?php  wp_footer(); ?>
  </body>
</html>