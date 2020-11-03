    <footer id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="row">
                <div class="col-sm-6">
                    <h3>Registered Office</h3>
                    <p>Total Bid Solutions, A/203, Gokuldhan CHS, Plot No.3, Sector-35D, Kharghar - 410210, Maharashtra, India</p><br/>
                    <p>Email: <a class="text-white" href="mailto:tbsmumbai9@gmail.com">tbsmumbai9@gmail.com</a></p>
                    <p>Mobile: <a class="text-white" href="tel:9167224710"><i class="fa fa-mobile mr-3" aria-hidden="true"></i> +91-91672 24710</a></p>
                    <p>Office: <a class="text-white" href="tel:02279664393"><i class="fa fa-phone mr-3" aria-hidden="true"></i> +91-22796 64393</a></p>
                    
                </div>
                <div class="col-sm-6">
                <form>
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" required="" placeholder="Name Please" value="">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" required="" placeholder="Email Please" value="">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone" required="" placeholder="Phone Please" value="">
                    <label>Message</label>
                    <textarea type="text" name="message" required="" class="form-control" placeholder="Message"></textarea>
                    <div class="text-center"> 
                        <button class="amitBtn">Submit</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <div class="akk">
            <p>© <?php echo date('Y'); ?> Designed & Developed by <a class="text-white" href="https://www.amitkk.com" target="_blank">AmitKK</a></p>
        </div>
    </footer>
    <script src="bundle/js/jquery.min.js"></script>
    <script src="bundle/js/bootstrap.min.js"></script>
    <!-- <script src="bundle/js/easing.js"></script> -->
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
    </body>
</html>
