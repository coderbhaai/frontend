<?php include('header.php'); ?>
<div class="banner">
    <!-- <img src="/bundle/images/static/bg-1.jpg" alt=""> -->
    <div class="bannerText">
        <h2>BECOME A HOST</h2>
        <h1>A space to share, a world to gain</h1>
        <p>Hosting can help you turn your extra space into extra income and pursue more of what you love.</p>
        <button class="casleyBtn">Get Started</button>
    </div>
</div>
<section class="bar">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h3>Your next chapter, made possible by Host</h3>
            </div>
            <div class="col-sm-4">
                <h4>Welcome what’s next</h4>
                <p>Enjoy the flexibility of being your own boss, earn extra income, and make lifelong connections through Hosting.</p>
                <a href="">Explore the world of Hosting</a>
            </div>
            <div class="col-sm-4">
                <h4>Host with confidence</h4>
                <p>From 24/7 support and our helpful Host community, to custom tools, insights, and education, we’re invested in your success.</p>
                <a href="">How we support Hosts</a>
            </div>
        </div>
    </div>
</section>
<section class="container imgSlider">
    <div class="swiper-container1">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="row">
                    <div class="col-sm-6 swipeBg swipeBg1"></div>
                    <div class="col-sm-6 swiperText">
                        <h3>Hosting has enabled me to tap into my creativity and spend more time with my family.</h3>
                        <p>Darrel,</p>
                        <p>Host in Atlanta, GA</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="row">
                    <div class="col-sm-6 swipeBg swipeBg1"></div>
                    <div class="col-sm-6 swiperText">
                        <h3>Hosting has enabled me to tap into my creativity and spend more time with my family.</h3>
                        <p>Harris,</p>
                        <p>Host in Atlanta, GA</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="row">
                    <div class="col-sm-6 swipeBg swipeBg1"></div>
                    <div class="col-sm-6 swiperText">
                        <h3>Hosting has enabled me to tap into my creativity and spend more time with my family.</h3>
                        <p>Sachin,</p>
                        <p>Host in Atlanta, GA</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="row">
                    <div class="col-sm-6 swipeBg swipeBg1"></div>
                    <div class="col-sm-6 swiperText">
                        <h3>Hosting has enabled me to tap into my creativity and spend more time with my family.</h3>
                        <p>Ramesh,</p>
                        <p>Host in Atlanta, GA</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
<section class="bgCheck">
    <div class="container">
        <div class="text">
            <h3>CHECK IT OUT FOR YOURSELF</h3>
            <p>Host your Entire place for 4 guests in Delhi and earn up to ₹1,49,777 a month*</p>
            <button class="casleyBtn">Get Started</button>
            <a href="">How we estimate your earnings potential</a>
        </div>
    </div>
</section>
<section class="works">
    <div class="container">
    <h2 class="heading">How hosting works</h2>
        <div class="swiper-container2">
            <div class="swiper-wrapper">
                <?php for ($i=0; $i < 6; $i++) {  ?>
                    <div class="swiper-slide">
                        <a href="#">
                            <div class="block">
                                <img src="/bundle/images/static/bg-1.jpg" alt="">
                                <h3>Lorem, ipsum dolor.</h3>
                                <p>Lorem ipsum dolor, sit amet consectetur</p>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>
<section class="support">
    <div class="container">
        <h2 class="heading">How we support you</h2>
        <div class="row">
            <div class="col-sm-4">
                <h3>Host protection programmes</h3>
                <p>To support you in the rare event of an incident, most Airbnb bookings include property damage protection and liability insurance of up to $1m USD.</p>
                <a href="">How you’re protected while Hosting</a>
            </div>
            <div class="col-sm-4">
                <h3>COVID-19 safety guidelines</h3>
                <p>To help protect the health of our community, we’ve partnered with experts to create safety practices for everyone, plus a cleaning process for hosts.</p>
                <a href="">Get to know the enhanced cleaning process</a>
            </div>
            <div class="col-sm-4">
                <h3>High guest standards</h3>
                <p>To give Hosts peace of mind, we offer guest identification and let you check out reviews of guests before they book. Our new Guest Standards Policy sets higher expectations for behaviour.</p>
                <a href="">Steps we take to help Hosts feel confident</a>
            </div>
        </div>
    </div>
</section>
<section class="journey">
    <div class="container">
        <div class="text">
            <h3>Start your hosting journey</h3>
            <p>Let’s get your listing set up, together.</p>
            <button class="casleyBtn">Get Started</button>
        </div>
    </div>
</section>
<section class="more">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h3>Find out more and connect with expert Hosts</h3>
                <p>We’ll share more about hosting and give you access to live webinars where experienced hosts can answer your questions.   </p>
            </div>
            <div class="col-sm-6">
                <form>
                    <div>
                        <input type="email" class="form-control" placeholder="Email Address">
                    </div>
                    <div>
                        <input type="tel" class="form-control" placeholder="Phone Number (Optional)">
                    </div>
                    <div class="check">
                        <input type="checkbox" class="form-control" placeholder="email">
                        <p>I want to receive occasional insights and information from Airbnb about hosting and can unsubscribe at any time.</p>
                    </div>
                    <button class="casleyBtn">Sign Up</button>
                    <p>By selecting "Sign up", I agree that Airbnb will process my personal information in accordance with the <a href="">Airbnb Privacy Policy</a></p>
                </form>
            </div>
    </div>
</section>
<?php include('footer.php'); ?>