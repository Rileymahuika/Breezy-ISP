(function($) {
$.fn.menumaker = function(options) {  
 var cssmenu = $(this), settings = $.extend({
   format: "dropdown",
   sticky: false
 }, options);
 return this.each(function() {
   $(this).find(".button").on('click', function(){
     $(this).toggleClass('menu-opened');
     var mainmenu = $(this).next('ul');
     if (mainmenu.hasClass('open')) { 
       mainmenu.slideToggle().removeClass('open');
     }
     else {
       mainmenu.slideToggle().addClass('open');
       if (settings.format === "dropdown") {
         mainmenu.find('ul').show();
       }
     }
   });

   focusinMenuLoop = function () {
      var _doc = document;
      var select = document.querySelector('#cssmenu');
      var focusableEls = select.querySelectorAll('a,button,input');
      var firstFocusableEl = focusableEls[0];  
      var lastFocusableEl = focusableEls[focusableEls.length - 1];
      var KEYCODE_TAB = 9;
      _doc.addEventListener('keydown', function(e) {
          if (e.key === 'Tab' || e.keyCode === KEYCODE_TAB) {
              if ( e.shiftKey ) /* shift + tab */ {
                  if (document.activeElement === firstFocusableEl) {
                      lastFocusableEl.focus();
                      e.preventDefault();
                  }
              } else /* tab */ {
                  if (document.activeElement === lastFocusableEl) {
                      firstFocusableEl.focus();
                      e.preventDefault();
                  }
              }
          }
      });
  };

   cssmenu.find('li ul').parent().addClass('has-sub');
multiTg = function() {
     cssmenu.find(".has-sub").prepend('<button class="submenu-button"></button>');
     cssmenu.find('.submenu-button').on('click', function() {
       $(this).toggleClass('submenu-opened');
       if ($(this).siblings('ul').hasClass('open')) {
         $(this).siblings('ul').removeClass('open');
       }
       else {
         $(this).siblings('ul').addClass('open');
       }
     });
   };
   if (settings.format === 'multitoggle') multiTg();
   else cssmenu.addClass('dropdown');
   if (settings.sticky === true) cssmenu.css('position', 'fixed');
resizeFix = function() {
  var mediasize = 1000;
     if ($( window ).width() > mediasize) {
       cssmenu.find('ul').show();
     }
     if ($(window).width() <= mediasize) {
       cssmenu.find('ul').hide().removeClass('open');
       focusinMenuLoop();
     }
   };
   resizeFix();
   return $(window).on('resize', resizeFix);
 });
  };
})(jQuery);

(function($){
$(document).ready(function(){
$("#cssmenu").menumaker({
   format: "multitoggle"
});
});
})(jQuery);
