jQuery(document).ready(function ($) {
  'use strict';

  var winwidth = $(window).width();

  /*==================================
   key trapped
 ==================================*/

  var Public_Key_Trapped = function (elem) {
    var tabbable = elem
      .find('a[href], button, textarea, input, select')
      .filter(':visible');

    var firstTabbable = tabbable.first();
    var lastTabbable = tabbable.last();
    /*set focus on first input*/
    firstTabbable.focus();

    /*redirect last tab to first input*/
    lastTabbable.on('keydown', function (e) {
      if (e.which === 9 && !e.shiftKey) {
        e.preventDefault();
        firstTabbable.focus();
      }
    });

    /*redirect first shift+tab to last input*/
    firstTabbable.on('keydown', function (e) {
      if (e.which === 9 && e.shiftKey) {
        e.preventDefault();
        lastTabbable.focus();
      }
    });
    elem.on('keyup', function (e) {
      if (e.keyCode === 27) {
        elem.hide();
      }
    });
  };

  /*==================================
   Toggle Button
 ==================================*/
  $('a.open-button').on('click', function (e) {
    e.preventDefault();
    $('.main-navigation').show(300);
    Public_Key_Trapped($('.main-navigation'));
  });

  function mainnavButton() {
    $('.open-button').clone().appendTo('.main-navigation .mobile-menu-toggle');
    $('.main-navigation .open-button').addClass('active');
    $('.active').on('click', function () {
      $('.main-navigation').hide(300);
      $('a.open-button').focus();
    });
  }
  mainnavButton();

  /*==================================
   Canvas menu open
 ==================================*/

  $('.canvas-button a.canvas-open').on('click', function (event) {
    event.preventDefault();
    $(this).toggleClass('active');
    $('.canvas-menu').toggleClass('active');
    Public_Key_Trapped($('.canvas-menu'));
  });

  $('.canvas-overlay').on('click', function (event) {
    event.preventDefault();
    $('.canvas-menu').removeClass('active');
    $('.canvas-open').removeClass('active');
  });

  /*==================================
   canvas-menu close
 ==================================*/

  $('.close-sidebar').on('click', function (event) {
    event.preventDefault();
    $('.canvas-menu').removeClass('active');
    $('.canvas-open').removeClass('active');
    $('a.canvas-open').focus();
  });

  /*==================================
   search bar show
 ==================================*/

  function searchToggle() {
    $('.search-toggle a').on('click', function (e) {
      e.preventDefault();
      $(this).closest('.search-toggle').toggleClass('show');
      $('.searchform').on(
        'transitionend MSTransitionEnd webkitTransitionEnd oTransitionEnd',
        function () {
          $('.show').find('input.search-field').focus();
        }
      );
      Public_Key_Trapped($('.searchform'));
    });
  }
  searchToggle();

  $(document).on('keydown', function (e) {
    if (e.keyCode === 27) {
      // ESC
      $('.search-toggle').removeClass('show');
      $('.search-toggle a').focus();
    }
  });

  $(document)
    .not('.searchform form')
    .on('click', function () {
      $('.searchform').closest('.search-toggle').removeClass('show');
    });

  $('.search-toggle .search-submit').focusout(function () {
    $(this).closest('.search-toggle').removeClass('show');
    $('.search-toggle a').focus();
  });

  /*==================================
    Responsive menu
  ==================================*/
  function menuIcon() {
    $(
      '.main-navigation li.menu-item-has-children,.main-navigation li.page_item_has_children'
    ).prepend('<span class="icon"></span>');
  }
  menuIcon();

  if (winwidth <= 991) {
    $(
      '.main-navigation li.menu-item-has-children span.icon,.main-navigation li.page_item_has_children span.icon'
    ).on('click', function (e) {
      e.preventDefault();
      $(this)
        .siblings(
          '.main-navigation li.menu-item-has-children ul.sub-menu,.main-navigation li.page_item_has_children ul.children'
        )
        .slideToggle(300);
    });
  }

  /*------------------------------------
  Sticky header
--------------------------------------*/

  function stickyMenu() {
    $(window).scroll(function (event) {
      var scroll = $(window).scrollTop();

      if (scroll > 100) {
        $('.site-header-sticky').addClass('is-sticky');
      } else {
        $('.site-header-sticky').removeClass('is-sticky');
      }

      if (scroll > 100) {
        $('.goto-top').show();
      } else {
        $('.goto-top').hide();
      }
    });

    $('.goto-top').on('click', function (e) {
      e.preventDefault();
      $('html,body').animate({ scrollTop: 0 }, 500);
    });
  }
  stickyMenu();
});
