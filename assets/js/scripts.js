
// menu

const btnOpen = document.querySelector('.header-menu-toggle')
const menu = document.querySelector('.header-mobile-nav')

btnOpen.addEventListener('click', (e) => {
  e.preventDefault();
  menu.classList.toggle('show')
  btnOpen.classList.toggle('close')
})


// conditions 

const cartItems = document.querySelectorAll('.condi-cart');
const mediaQuery = window.matchMedia('(max-width: 1200px)');

function initCarts() {

  cartItems.forEach(item => {

    item.addEventListener('click', () => {
      // Проверяем активный элемент
      const isActive = item.classList.contains('active');

      // Закрываем все вкладки
      cartItems.forEach(i => {
        i.classList.remove('active');
      });

      // Если кликнули по неактивной — открываем
      if (!isActive) {
        item.classList.add('active');
      }
    });
  });
}
// Инициализация только для экранов <1200
function handleResize() {
  if (mediaQuery.matches) {
    initCarts();
  }
  return;
}

handleResize();
window.addEventListener('resize', handleResize);



// accordion

document.addEventListener('DOMContentLoaded', () => {
  const items = Array.from(document.querySelectorAll('.project-item'));

  if (!items.length) {
//    console.warn('Элементы .project-item не найдены на странице');
    return;
  }

  // Генерация матрицы z-index'ов для любого количества элементов
  const count = items.length;
  const zMatrix = Array.from({ length: count }, (_, activeIdx) =>
    Array.from({ length: count }, (_, i) => count - Math.abs(activeIdx - i))
  );

  function setZIndexes(activeIdx) {
    if (!zMatrix[activeIdx]) return;

    items.forEach((el, i) => {
      el.style.zIndex = zMatrix[activeIdx][i];
      if (i === activeIdx) {
        el.classList.add('active');
        el.classList.remove('inactive');
      } else {
        el.classList.add('inactive');
        el.classList.remove('active');
      }
    });
  }

  // начальная установка
  setZIndexes(0);

  // обработка кликов
  items.forEach((el, idx) => {
    el.addEventListener('click', () => setZIndexes(idx));
  });
});





// seo block more/close


document.addEventListener('DOMContentLoaded', () => {
  const blockSeo = document.querySelector('.seo');
  const openBtn = document.querySelector('.seo-btn-open');
  const closeBtn = document.querySelector('.seo-btn-close');
  const openBtnBlock = document.querySelector('.seo-button-open');
  const closeBtnBlock = document.querySelector('.seo-button-close');
  const closeTxt = document.querySelector('.seo-close');

  if (openBtn && closeBtn && openBtnBlock && closeBtnBlock && closeTxt) {
    openBtn.addEventListener('click', (e) => {
      e.preventDefault();
      closeTxt.style.display = 'block';
      closeBtnBlock.style.display = 'flex';
      openBtnBlock.style.display = 'none';
    });

    closeBtn.addEventListener('click', (e) => {
      e.preventDefault();
      closeTxt.style.display = 'none';
      closeBtnBlock.style.display = 'none';
      openBtnBlock.style.display = 'flex';
      blockSeo.scrollIntoView({ behavior: 'smooth', block: 'start' })
    });
  }
});



// popup

const popupBg = document.querySelector('.popup-bg');
const popup = document.querySelector('.header-popup');
const openPopup = document.querySelector('.header-phone-btn');
const closePopup = document.querySelector('.close');

openPopup.addEventListener('click', () => {
  popup.style.display = 'block'
  popupBg.style.display = 'block'
  document.body.classList.add('no-scroll');
})

closePopup.addEventListener('click', () => {
  popup.style.display = 'none'
  popupBg.style.display = 'none'
  document.body.classList.remove('no-scroll');
})