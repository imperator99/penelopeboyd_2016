(function ($) {
  Drupal.behaviors.penelopeBoyd2016sticky = {
    attach: function (context, settings) {

      $('.l-menu-wrapper', context).once('scroll', function () {
        var offset = $('#content').offset().top;
        $(window).scroll(function() {

          if ($(this).scrollTop() > offset) {  
            $('.l-menu-wrapper').addClass("sticky");
          }
          else {
            $('.l-menu-wrapper').removeClass("sticky");
          }
        });

      });
    }
  };
  Drupal.behaviors.penelopeBoyd2016scroller = {
    attach: function (context, settings) {

      $('body', context).once('scoller', function () {
        $('a[href^="#"]').on('click', function(event) {
          var target = $(this.getAttribute('href'));
          if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
              scrollTop: target.offset().top - 25
            }, 1000);
          }
        });
      });
    }
  };
  Drupal.behaviors.penelopeBoyd2016MaterialButton = {
    attach: function (context, settings) {
      $('.l-main', context).once('material', function () {
        
        // Credit where credit's due; http://thecodeplayer.com/walkthrough/ripple-click-effect-google-material-design
        // Found on http://codepen.io/madshaakansson/pen/ykode

        var element, circle, d, x, y;
        $(".l-menu-wrapper a, #categories a, #works .pager a").click(function(e) {
          element = $(this);
          
          if(element.find(".circle").length === 0) {
            element.prepend("<span class='circle'></span>");
          }
            
          circle = element.find(".circle");
          circle.removeClass("animate");
          
          if(!circle.height() && !circle.width()) {
            d = Math.max(element.outerWidth(), element.outerHeight());
            circle.css({height: d, width: d});
          }
          
          x = e.pageX - element.offset().left - circle.width() / 2;
          y = e.pageY - element.offset().top - circle.height() / 2;
          
          circle.css({top: y+'px', left: x+'px'}).addClass("animate");
        });
      });
    }
  };

})(jQuery);
