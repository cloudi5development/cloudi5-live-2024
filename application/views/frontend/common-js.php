<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>

<!-- Form Validatation -->
<script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>
<script src="<?php echo base_url(); ?>assets/js/form-validation.js"></script>
<script>
  setTimeout(function() {
    $(".alert").fadeOut("slow", function() {
      $(".alert").remove();
    });

  }, 6000);
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/custom.js"></script>
<script type="text/javascript">
         document.addEventListener("DOMContentLoaded", function() {
            let lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));
            let active = false;

            const lazyLoad = function() {
               if (active === false) {
                  active = true;

                  setTimeout(function() {
                     lazyImages.forEach(function(lazyImage) {
                        if ((lazyImage.getBoundingClientRect().top <= window.innerHeight && lazyImage.getBoundingClientRect().bottom >= 0) && getComputedStyle(lazyImage).display !== "none") {
                           lazyImage.src = lazyImage.dataset.src;
                           lazyImage.srcset = lazyImage.dataset.srcset;
                           lazyImage.classList.remove("lazy");

                           lazyImages = lazyImages.filter(function(image) {
                              return image !== lazyImage;
                           });

                           if (lazyImages.length === 0) {
                              document.removeEventListener("scroll", lazyLoad);
                              window.removeEventListener("resize", lazyLoad);
                              window.removeEventListener("orientationchange", lazyLoad);
                           }
                        }
                     });

                     active = false;
                  }, 200);
               }
            };

            document.addEventListener("scroll", lazyLoad);
            window.addEventListener("resize", lazyLoad);
            window.addEventListener("orientationchange", lazyLoad);
         });
      </script>