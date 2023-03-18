#!/bin/bash -e
echo "Install swiper.js? (y/n)"
read -e confirm

if [ "$confirm" == y ] ; then
cd wp-content/themes/main-theme
npm install swiper

echo "// core version + navigation, pagination modules:
import Swiper, { Navigation, Pagination } from 'swiper';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// init Swiper
// documentation: https://swiperjs.com/get-started
const swiper = new Swiper('.swiper', {
  // configure Swiper to use modules
  modules: [Navigation, Pagination],
  // Optional parameters
  direction: 'vertical',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});" > ts/swiper.ts

echo "<!-- Slider main container -->
<div class=\"swiper\">
  <!-- Additional required wrapper -->
  <div class=\"swiper-wrapper\">
    <!-- Slides -->
    <div class=\"swiper-slide\">Slide 1</div>
    <div class=\"swiper-slide\">Slide 2</div>
    <div class=\"swiper-slide\">Slide 3</div>
    ...
  </div>
  <!-- If we need pagination -->
  <div class=\"swiper-pagination\"></div>

  <!-- If we need navigation buttons -->
  <div class=\"swiper-button-prev\"></div>
  <div class=\"swiper-button-next\"></div>

  <!-- If we need scrollbar -->
  <div class=\"swiper-scrollbar\"></div>
</div>" > template/example_swipe.html
fi