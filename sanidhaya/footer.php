    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-4">
            <h3>About Us</h3>
            <p>It's a humanity based institution that undertakes its healing by the name SANIDHAYA (healing with bliss). 'Sanidhaya' has been healing people for their mental physical and emotional issues across the world as it has a mission to create a healer every household and make the world disease free and sorrow free.</p>
            <div class="row address-contact-form mt-3">
              <div class="col-lg-3 col-md-4 col-sm-4">
                <div class="footer-icon text-center">
                  <span class="fa fa-home" aria-hidden="true"></span>
                </div>
              </div>
              <div class=" footer-contact-list col-lg-9 col-md-8 col-sm-8">
                <p class="text-white">1172, Sector- 45, Gurgaon, Haryana</p>
              </div>
            </div>
            <div class="row address-contact-form mt-lg-4 mt-3">
              <div class="col-lg-3 col-md-4 col-sm-4">
                <div class="footer-icon text-center">
                  <span class="fa fa-phone" aria-hidden="true"></span>
                </div>
              </div>
              <div class=" footer-contact-list col-lg-9 col-md-8 col-sm-8">
                <p><a class="text-white" href="tel:8424003840">+91 -8424 003 840</a> / <a class="text-white" href="tel:9354811331">+91-9354 811 331</a></p>
              </div>
            </div>
            <div class="row address-contact-form mt-lg-4 mt-3">
              <div class="col-lg-3 col-md-4 col-sm-4">
                <div class="footer-icon text-center">
                  <span class="fa fa-envelope" aria-hidden="true"></span>
                </div>
              </div>
              <div class=" footer-contact-list col-lg-9 col-md-8 col-sm-8">
                <p><a class="text-white" href="mailto:amit@amitkk.com">amit@amitkk.com</a></p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <h3>Important Links</h3>
            <ul>
              <li><a href="=/The-Science-of-Yoga">Yoga</a></li>
              <li><a href="=/Counselling-Life-Coaching">Life of Coaching</a></li>
              <li><a href="=/The-Art-of-Meditation">Meditation</a></li>
              <li><a href="=/The-Refined-Science-of-Astrology">Astrology</a></li>
              <li><a href="=/Study-of-Aura-and-Chakra-Healing">Aura & Chakra Healing</a></li>
              <li><a href="=/Study-of-Crystals"></a>Crystals</li>
            </ul>
          </div>
          <div class="col-sm-4">
            <h3>Connect with us</h3>
            <?php include('form.php'); ?>
          </div>
        </div>
        <div class="footer-main text-center">
          <p class="text-center">© <?php echo date('Y') ?> | Designed & develpoed by <a href="https://www.amitkk.com/" target="_blank">AmitKK</a></p>
        </div>
      </div>
    </footer>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Donate Us</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <form action="#" method="post">
              <div class=" form-group contact-forms">
                <input type="text" class="form-control" placeholder="Name" required="">
              </div>
              <div class="form-group contact-forms">
                <input type="email" class="form-control" placeholder="Email" required="">
              </div>
              <div class="form-group contact-forms">
                <input type="text" class="form-control" placeholder="Phone" required=""> 
              </div>
              <div class="form-group contact-forms">
                <input type="number" class="form-control" placeholder="Amount" required=""> 
              </div>
              <div class="form-group contact-forms">
              <textarea class="form-control" placeholder="Message" rows="3" required=""></textarea>
              </div>
              <button type="submit" class="btn btn-block sent-butnn">Donate</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src='bundle/js/jquery.min.js'></script>
    <script src='bundle/js/bootstrap.min.js'></script>
    <script src='bundle/js/easing.js'></script>
    <script src='bundle/js/owl.carousel.min.js'></script>
    <script src='bundle/js/lightGallery.js'></script>
    <script>
            lightGallery(document.getElementById('lightgallery'));
        </script>
    <script>jQuery(document).ready(function(){jQuery("#owl-carousel1").owlCarousel({nav:!0,navText:["<img src=https://www.whitesmile.in/wp-content/themes/whitesmile/images/prev.png' alt='whitesmile'>","<img src='https://www.whitesmile.in/wp-content/themes/whitesmile/images/next.png' alt='whitesmile'>"],loop:!0,autoplay:!1,autoplaySpeed:2e3,autoplayTimeout:2500,autoplayHoverPause:!0,margin:10,responsiveClass:!0,responsive:{0:{items:1,nav:!0},600:{items:1,nav:!1},768:{items:2,nav:!1},1000:{items:3,nav:!0}}})});</script>
    <script>
      $(window).scroll(function() {    
          var scroll = $(window).scrollTop();

          if (scroll >= 100) {
              $(".navbar").addClass("ban-fix");
          } else {
              $(".navbar").removeClass("ban-fix");
          }
      });
   </script>






    <script>
      $('.custom1').owlCarousel({
          animateOut: 'slideOutDown',
          animateIn: 'flipInX',
          items:1,
          margin:30,
          stagePadding:30,
          smartSpeed:450
      });
    </script>

  </body>
</html>