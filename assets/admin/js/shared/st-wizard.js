  (function ($) {
      'use strict';
      $.fn.andSelf = function () {
          return this.addBack.apply(this, arguments);
      }
      if ($('#st-wizard-wrapper').length) {
          var stWizard = $('#st-wizard-wrapper');
          stWizard.owlCarousel({
              loop: false,
              margin: 10,
              items: 1,
              nav: false,
              autoplay: false,
              touchDrag: false,
              pullDrag: false,
              freeDrag: false,
              mouseDrag: false,
              autoHeight: true,
              URLhashListener: true,
          });
          $('.customNextBtn').click(function () {
              stWizard.trigger('next.owl.carousel');
              if ($(".st-wizard-steps .wizard-step").hasClass("done")) {
                  $(this).next().addClass("done");
              }
          });
          $('.customPrevBtn').click(function () {
              stWizard.trigger('prev.owl.carousel', [300]);
          })
          stWizard.on('change.owl.carousel', function (e) {
              if (e.namespace && e.property.name === 'position' &&
                  e.relatedTarget.relative(e.property.value) === e.relatedTarget.items().length - 1) {
                  // put your stuff here ...
                  $(".wizard-footer .required-text").css('display', 'none');
                  $(".terms-checkbox").css('display', 'block');
              } else {
                  $(".wizard-footer .required-text").css('display', 'block');
                  $(".terms-checkbox").css('display', 'none');
              }
              $(".wizard-slide-count").text("STEP " + (e.property.value + 1) + "/3");
          })
      }

  })(jQuery);