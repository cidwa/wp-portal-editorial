(function($) {
   $(function() {

       var jcarousel = $('.jcarousel');

       jcarousel
           .on('jcarousel:reload jcarousel:create', function () {
               var carousel = $(this),
                   width = carousel.innerWidth();

               if (width >= 600) {
                   width = width / 4;
               } else if (width >= 350) {
                   width = width / 2;
               }

               carousel.jcarousel('items').css('width', Math.ceil(width) + 'px');
           })
           .jcarousel({
               wrap: 'circular'
           })

        .jcarouselAutoscroll({
           interval: 3000,
           target: '+=1',
           autostart: true
       })

       $('.jcarousel-control-prev').jcarouselControl({
               target: '-=1'
           });

       $('.jcarousel-control-next').jcarouselControl({
               target: '+=1'
           });
   })
   $(function() {

       var jcarousel = $('.jncarousel');

       jcarousel
           .on('jcarousel:reload jcarousel:create', function () {
               var carousel = $(this),
                   width = carousel.innerWidth();

               if (width >= 600) {
                   width = width / 4;
               } else if (width >= 350) {
                   width = width / 1;
               }

               carousel.jcarousel('items').css('width', Math.ceil(width) + 'px');
           })
           .jcarousel({
               wrap: 'circular'
           })

        .jcarouselAutoscroll({
           interval: 4000,
           target: '+=1',
           autostart: true
       })

       $('.jncarousel-control-prev').jcarouselControl({
               target: '-=1'
           });

       $('.jncarousel-control-next').jcarouselControl({
               target: '+=1'
           });
   });
})(jQuery);
