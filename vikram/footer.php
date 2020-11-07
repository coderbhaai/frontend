        <footer>
            <img src="./images/composite.png" class="composite">
            <div class="icons">
                <a href="https://www.facebook.com/groups/1041465326292819" target="_blank"><img src="images/facebook.png"/></a>
                <a href="https://www.instagram.com/the_gylc/" target="_blank"><img src="images/instagram.png"/></a>
            </div>
            <div class="contact">
                <h2>Do you have Questions?</h2>
                <p>Registered Offices: 137/17, Faridabad - NCR, Delhi -121002</p>
                <p>Mr. Vikram Kukreja: +49-15166758162 / tbhcircle2020@gmail.com</p>
                <p>Ms. Geetanshi Singh: +91 704288335 / tbhgeetanshi@gmail.com</p>
            </div>
            <p class="copy">©2020 TBH Circle LLP</p>
        </footer>
        <a target="_blank" href="//api.whatsapp.com/send?phone=+4915166758162&amp;text= Hi, I wish to enroll for GYLC." class="whatsButton"><img src="images/whatsapp-button.svg" alt="top educational video"></a>
        <script src="js/jquery-3.1.0.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/app.js"></script>
        <script>
            var section = document.querySelector('.numbers');
            var hasEntered = false;

            window.addEventListener('scroll', (e) => {
                var shouldAnimate = (window.scrollY + window.innerHeight) >= section.offsetTop;

                if (shouldAnimate && !hasEntered) {
                hasEntered = true;

                $('.value').each(function () {
                    $(this).prop('Counter',0).animate({
                    Counter: $(this).text()
                    }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                    });
                });

            }
            });
        </script>
    </body>
</html>