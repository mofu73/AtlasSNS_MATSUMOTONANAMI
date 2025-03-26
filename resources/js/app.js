import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

$('.menu-btn').click(function () {
  $(this).toggleClass('is-open');
  $(this).siblings('.menu').toggleClass('is-open');
});
