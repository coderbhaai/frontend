<footer class="pt-5" >
    <div class="container py-3">
        <div class="row">
            <div class="col-sm-3 impLinks">
                <ul>
                    <li>Important Links</li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Careers</a></li>
                </ul>
            </div>
            <div class="col-sm-3 impLinks">
                <ul>
                    <li>Important Links</li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Careers</a></li>
                </ul>
            </div>
            <div class="col-sm-3 impLinks">
                <ul>
                    <li>Important Links</li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Careers</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h3>Contact Us</h3>
                <?php include('form.php'); ?>
            </div>
        </div>
    </div>
</footer>
<div class="container-fluid akk py-3">
    <div class="row">
        <div class="col-sm-12">
            <p class="text-center">© <?php echo date('Y'); ?>| Designed & Developed by <a href="https://www.amitkk.com/" target="_blank">AmitKK</a> </p>
        </div>
    </div>
</div>
    <script src="bundle/js/jquery-3.1.0.js"></script>
    <script src="bundle/js/bootstrap.min.js"></script>
    <script src="bundle/js/swiper.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container1', {
            fadeEffect: { crossFade: true },
            autoplay: {
                delay: 7500,
                disableOnInteraction: true,
            },
            slidersPerView: 1,
            effect: "fade",
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            loop: true,
        });
        var swiper2 = new Swiper('.swiper-container2', {
            slidesPerView: 4, 
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            loop: true,
            autoplay: false,
            // {delay: 2000, }, 
            freeMode: false, 
            speed: 500,
            breakpoints: {
                600: { slidesPerView: 1, spaceBetween: 0, },
                768: { slidesPerView: 2, spaceBetween: 20, },
                1024: { slidesPerView: 3, spaceBetween: 20, },
            }
        });
    </script>
</body>
</html>