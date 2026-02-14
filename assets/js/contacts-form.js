jQuery(document).ready(function($) {

  

  $('.form-buttons .form-btn').on('click', function(e) {

    e.preventDefault();
    let method = $(this).data('method'); // telegram / viber / whatsapp / email

    // Переключение active-класса

    $('.form-mess').removeClass('is-active');
    $(this).closest('.form-mess').addClass('is-active');

    // Сохраняем метод

    $('#contact_method').val(method);

    // Скрываем все специфические поля

    $('.form-telegram, .form-viber, .form-whatsapp, .form-email').hide();

    // Очищаем все поля

    $('#telegram, #viber, #whatsapp, #email, #phone').val('');

    // Показываем нужное поле

    if (method === 'telegram') {

      $('.form-telegram').show();

    } else if (method === 'viber') {

      $('.form-viber').show();

    } else if (method === 'whatsapp') {

      $('.form-whatsapp').show();

    } else if (method === 'email') {

      $('.form-email').show();

    }



    $('.form-phone').hide();



  });



});

