!(function (e) {
  "use strict";
  e(".filter-list").length && e(".filter-list").mixItUp({}),
    e(".single-item-carousel").length &&
      e(".single-item-carousel").owlCarousel({
        animateOut: "fadeOut",
        animateIn: "fadeIn",
        loop: !0,
        margin: 0,
        nav: !0,
        smartSpeed: 500,
        autoplay: 6e3,
        navText: [
          '<span class="fa fa-angle-left"></span>',
          '<span class="fa fa-angle-right"></span>',
        ],
        responsive: {
          0: { items: 1 },
          600: { items: 1 },
          800: { items: 1 },
          1024: { items: 1 },
          1200: { items: 1 },
          1500: { items: 1 },
        },
      }),
    e(".lightbox-image").length &&
      e(".lightbox-image").fancybox({
        openEffect: "fade",
        closeEffect: "fade",
        helpers: { media: {} },
      });
})(window.jQuery);


$(document).ready(function () {
    setTimeout(function () {
        $('.portfolio-card-container').each(function (index) {
            const card = $(this);
            setTimeout(function () {
                card.addClass('show');
            }, index * 100);
        });
    }, 100);
    $('.filter-btn').on('click', function () {
        $('.filter-btn').removeClass('active');
        $(this).addClass('active');
        const filterValue = $(this).data('filter');
        $('#portfolio-grid > div').each(function (index) {
            const item = $(this);
            const card = item.find('.portfolio-card-container');
            const categories = item.data('categories').split(',');
            card.removeClass('show').addClass('hide-item');
            setTimeout(() => {
                if (filterValue === 'all' || categories.includes(filterValue)) {
                    item.removeClass('hide');
                    setTimeout(() => {
                        card.removeClass('hide-item').addClass('show');
                    }, index * 100);
                } else {
                    item.addClass('hide');
                }
            }, 500);
        });
    });
});