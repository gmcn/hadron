( function($) {

  $(window).scroll(function() {
      var scroll = $(window).scrollTop();

      if (scroll >= 50) {
          $(".navbar-static-top").addClass("scrolled");
      } else {
          $(".navbar-static-top").removeClass("scrolled");
      }
  });

  // bxslider
  $('.bxslider').bxSlider({
    pager: false,
    touchEnabled: false,
    infiniteLoop: true,
    mode: 'fade',
   });

  /**
   * Match Height (Including Safari onload fix)
   */
  function startMatchHeight() {
    $('.matchheight').matchHeight();
  }
  window.onload = startMatchHeight;

  // fancybox
  $(document).ready(function() {
  		$(".fancybox").fancybox();
  	});

} ) (jQuery);

window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#31404E",
      "text": "#AAAEB2"
    },
    "button": {
      "background": "#14191F"
    }
  },
  "theme": "edgeless",
  "position": "bottom",
  "static": true,
  "content": {
    "message": "This site uses cookies. By continuing to browse the site, you are agreeing to our use of cookies.",
    "dismiss": "Close This",
    "link": "Find out more",
    "href": "data-policy"
  }
});
