
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });


  // -----------------------------------
  // -- Navgation scripts
$('#toggler').click(function() {
	$('header .menu').addClass('show')
  $('body').addClass('oh')
})
$('.close-area').click(function() {
  $('header .menu').removeClass('show')
  $('body').removeClass('oh')
})
$('.menu__list .item').click(function() {
  $('header .menu').removeClass('show')
  $('body').removeClass('oh')
});


$(window).on('scroll', function() {
  var st = $(window).scrollTop()
  if (st > 0) {
    $('.menu-toggler').css('top', st)
    $('.menu-toggler').addClass('fixed')
  } else {
    $('.menu-toggler').removeClass('fixed')
  }
})

  // -- Navgation scripts
  // -----------------------------------

if ($('.slider').length) {
  var list = $('.slider .list'),
      sliderWidth = 350,
      leftB = $('.slider .butns .left'),
      rightB = $('.slider .butns .right');


  function nextSlide() {
    console.log(sliderWidth)
    $('.slider .list').animate({
      'margin-left':-sliderWidth
    },500, function() {
      $('.slider .list > .img:first-child').appendTo('.slider .list');
      $('.slider .list').css('margin-left', 0);
    });
  }
  //move slides backwards
  function prevSlide() {
    console.log(sliderWidth)
    $('.slider .list').animate({
      'margin-left':sliderWidth
    },500, function() {
      $('.slider .list>.img:last-child').prependTo('.slider .list');
      $('.slider .list').css('margin-left', 0);
    });
  }


  leftB.click( () => {
    prevSlide()
  })

  rightB.click( () => {
    nextSlide()
  })


}
