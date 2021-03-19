<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-10">
        <h2>Ready to meet the Better you?</h2> 
        <div class="footer-button">
          <button class="mohitBtn">Learn & Grow</button>
          <button class="mohitBtn">Book a free Consultation</button>
        </div>
      </div>
      <div class="col-sm-2">
        <h3>Quick Links</h3>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#1">TBH Ikiga</a></li>
            <li><a href="#">TBH Trainings</a></li>
            <li><a href="#">Corporate Ground </a></li>
            <li><a href="#">Our Events</a></li>
            <li><a href="#5">Contact us</a></li>
          </ul>      
      </div>
      <div class="col-sm-12 social">
        <h3>Follow us</h3>
        <div>
          <a class="btn1" href="https://www.linkedin.com/"><i class="fa fa-linkedin" target="blank"></i></a>
          <a class="btn2" href="https://www.facebook.com/groups/1041465326292819"><i class="fa fa-facebook" target="blank"></i></a>
          <a class="btn3" href="https://www.instagram.com/the_gylc/"><i class="fa fa-instagram" target="blank"></i></a>
          <a class="btn4" href="https://www.youtube.com/"><i class="fa fa-youtube-play" target="blank"></i></a>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $('.carousel').carousel({
    interval: 2000
  })
</script>
<script>var section = document.querySelector('.numbers');
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