	<section class="sec-footer">
		<div class="container">
			<div class="footer">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-2 col-lg-2"  data-aos="fade-down" data-aos-duration="700" data-aos-easing="linear" data-aos-once="true" >
						<div class="sitemap">
							<h6><a href="index.php">Vevro</a></h6>
							<h6><a href="index.php#whoweare">Who we are</a></h6>
							<h6><a href="services.php">What we do</a></h6>
						</div>
						<!--div class="address-footer">
							<h5>Vevro Pvt.Ltd</h5><h6>25<sup>th</sup>Floor, East Tower, </h6><h6>World Trade Centre, Colombo,</h6><h6>Sri Lanka</h6></div> -->
					</div>
					<div class="col-12 col-sm-12 col-md-2 col-lg-2"  data-aos="fade-down" data-aos-duration="900" data-aos-easing="linear"  data-aos-once="true" >
						<div class="sitemap">
							<h6><a href="careers.php">Join us</a></h6>
							<h6><a href="contact.php">contact</a></h6>
							<h6><a href="#">Blog</a></h6>
						</div>
					</div>
					<div class="col-12 col-sm-12 col-md-4 col-lg-4"  data-aos="fade-down" data-aos-duration="1000" data-aos-easing="linear"  data-aos-once="true" >
						<div class="sitemap">
							<h6><a href="services.php#digital--innovation">Digital Innoations</a></h6>
							<h6><a href="services.php#artificial--inteligance">Artificial Inteligance</a></h6>
							<h6><a href="services.php#enterprise--mobileweb">Enterprise Web &amp; Mobility Solutions</a></h6>
							<h6><a href="services.php#advisory--services">Advisory</a></h6>
						</div>
					</div>				
					<div class="col-12 col-sm-12 col-md-4 col-lg-4"  data-aos="fade-down" data-aos-duration="1300" data-aos-easing="linear"  data-aos-once="true" >
						<div class="keepInTouch">
							<h5><a href="#">Keep in Touch</a></h5>
						</div>
						<div class="footer--soc--icon">
							<a href="https://www.facebook.com/VevroDigital/" class="icon--fb footer--icons"  data-aos="fade-down" data-aos-duration="1400" data-aos-easing="linear" data-aos-once="true"  >
								<i class="fab fa-facebook-f"></i>
							</a>
							<a href="#" class="icon--ins footer--icons"  data-aos="fade-down" data-aos-duration="1600" data-aos-easing="linear"  data-aos-once="true" >
								<i class="fab fa-instagram"></i>
							</a>
							<a href="https://www.linkedin.com/company/13593966/" class="icon--in footer--icons"  data-aos="fade-down" data-aos-duration="1700" data-aos-easing="linear" data-aos-once="true"  >
								<i class="fab fa-linkedin-in"></i>
							</a>
							<a href="#" class="icon--yt footer--icons"  data-aos="fade-down" data-aos-duration="1800" data-aos-easing="linear" data-aos-once="true"  >
								<i class="fab fa-youtube"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<small><a href="#">Copyright &copy; 2017 Vevro. All rights reserved.</a></small>
	</footer>
	
	<script src="assets/js/classie.js"></script>
	<script src="assets/js/main3.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script src="assets/js/app.js"></script>
	<script src="assets/js/charming.min.js"></script>
	<script src="assets/js/anime.min.js"></script>
	<script src="assets/js/wordFx.js"></script>
	<script>
		{
			const effects = [

				// Effect 8
				{
					options: {
						shapeColors: ['#35c394','#9985ee','#f54665','#4718f5','#f5aa18'],
						shapesOnTop: true
					},
					hide: {
						lettersAnimationOpts: {
							duration: 300,
							delay: (t,i)  => (t.parentNode.children.length-i-1)*30,
							easing: 'easeOutExpo',
							opacity: 0,
							translateY: (t,i) => i%2 === 0 ? '80%' : '-80%',
							rotate: (t,i) => i%2 === 0 ? -25 : 25
						},
						shapesAnimationOpts: {
							duration: 50,
							easing: 'easeOutExpo',
							translateX: t => t.dataset.tx,
							translateY: t => t.dataset.ty,
							scale: 0,
							rotate: 0,
							opacity: {
								value: 0, 
								duration: 50, 
								easing: 'linear'
							}
						}
					},
					show: {
						lettersAnimationOpts: {
							duration: 400,
							delay: (t,i)  => (t.parentNode.children.length-i-1)*80,
							easing: 'easeOutElastic',
							opacity: {
								value: [0,1], 
								duration: 100, 
								easing: 'linear'
							},
							translateY: (t,i) => i%2 === 0 ? ['-80%', '0%'] : ['80%', '0%'],
							rotate: [90,0]
						},
						shapesAnimationOpts: {
							duration: () => anime.random(1000,3000),
							delay: (t,i) => i*20,
							easing: 'easeOutElastic',
							translateX: t => {
								const tx = anime.random(-250,250);
								t.dataset.tx = tx;
								return [0,tx];
							},
							translateY: t => {
								const ty = anime.random(-250,250);
								t.dataset.ty = ty;
								return [0,ty];
							},
							scale: t => {
								const s = randomBetween(0.1,0.6);
								t.dataset.s = s;
								return [s,s];
							},  
							rotate: () => anime.random(-90,90),
							opacity: {
								value: 0.6, 
								duration: 1000, 
								easing: 'linear'
							}
						}
					}
				},

			];

			class Slideshow {
				constructor(el) {
					this.DOM = {};
					this.DOM.el = el;
					this.DOM.slides = Array.from(this.DOM.el.querySelectorAll('.slide'));
					this.DOM.bgs = Array.from(this.DOM.el.querySelectorAll('.slide__bg'));
					this.DOM.words = Array.from(this.DOM.el.querySelectorAll('.word'));
					this.slidesTotal = this.DOM.slides.length;
					this.current = 0;
					this.words = [];
					this.DOM.words.forEach((word, pos) => {
						this.words.push(new Word(word, effects[pos].options));
					});
					
					this.isAnimating = true;
					this.words[this.current].show(effects[this.current].show).then(() => this.isAnimating = false);
				}
				show(direction) {
					if ( this.isAnimating ) return;
					this.isAnimating = true;
					
					let newPos;
					let currentPos = this.current;
					if ( direction === 'next' ) {
						newPos = currentPos < this.slidesTotal - 1 ? currentPos+1 : 0;
					}
					else if ( direction === 'prev' ) {
						newPos = currentPos > 0 ? currentPos-1 : this.slidesTotal - 1;
					}

					this.DOM.slides[newPos].style.opacity = 1;
					this.DOM.bgs[newPos].style.transform = 'none';
					anime({
						targets: this.DOM.bgs[currentPos],
						duration: 600,
						easing: [0.2,1,0.3,1],
						translateY: ['0%', direction === 'next' ? '-100%' : '100%'],
						complete: () => {
							this.DOM.slides[currentPos].classList.remove('slide--current');
							this.DOM.slides[currentPos].style.opacity = 0;
							this.DOM.slides[newPos].classList.add('slide--current');
							this.words[newPos].show(effects[newPos].show).then(() => this.isAnimating = false);
						}
					});

					this.words[newPos].hide();
					this.words[this.current].hide(effects[currentPos].hide).then(() => {
						
						this.current = newPos;
					});
				}
			}

			const slideshow = new Slideshow(document.querySelector('.slideshow'));
			document.querySelector('.slidenav__item--prev').addEventListener('click', () => slideshow.show('prev') );
			document.querySelector('.slidenav__item--next').addEventListener('click', () => slideshow.show('next') );
			document.addEventListener('keydown', (ev) => {
				const keyCode = ev.keyCode || ev.which;
				if ( keyCode === 37 ) {
					slideshow.show('prev');
				}
				else if ( keyCode === 39 ) {
					slideshow.show('next');
				}
			});
		}
	</script>
    <script src="assets/js/aos.js"></script>
    <script>
		AOS.init({
		  duration: 1200,
		  disable: window.innerWidth < 992
		})
    </script>
  	<script src='assets/js/blob/zkeddv.js'></script>
	<script src='assets/js/blob/lwgowr.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/r83/three.min.js'></script>
	<script src='assets/js/blob/jbvxyp.js'></script>
	<script  src="assets/js/blob/index.js"></script>
	</body>
</html>