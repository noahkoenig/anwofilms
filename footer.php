				
				<footer>
					<a class="socialmedia" href="https://www.facebook.com/anwofilms/" target="_blank">
						<img class="socialmediaicon" src="/sources/facebook.png">
					</a>
					<a class="socialmedia" href="https://www.instagram.com/anwofilms/" target="_blank">
						<img class="socialmediaicon" src="/sources/instagram.png">
					</a>
					<a class="socialmedia" href="https://twitter.com/anwofilms" target="_blank">
						<img class="socialmediaicon" src="/sources/twitter.png">
					</a>
					<a class="socialmedia" href="https://www.youtube.com/channel/UC04w0nc44q17T2eZ-1LNk0A/featured" target="_blank">
						<img class="socialmediaicon" src="/sources/youtube.png">
					</a>
					<!--a class="socialmedia" href="https://vimeo.com/anwofilms" target="_blank">
						<img class="socialmediaicon" src="/sources/vimeo.png">
					</a-->
					<p class="calibriheaderfooter">
						<a class="sitenoticelink" href="<?php echo $test_type;?>/sitenotice.php">Site Notice</a> &bull; <a class="privacypolicylink" href="<?php echo $test_type;?>/privacypolicy.php">Privacy Policy</a></p>
					<p class="calibricopyright">
						Copyright &copy; <?php echo date('Y');?> Noah König</p>
				</footer>
				<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
				<!--script src="//code.jquery.com/jquery-1.12.4.js"></script>
				<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script-->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
				<script src='https://www.google.com/recaptcha/api.js?hl=de'></script>
				<script>
					function closeIEerror() {
						document.getElementById("IEerror").style.display="none";
					}
					/*$(".dropbtn").click(function() {
							//$(".dropdown-content").slideToggle(400);
							var effect = "slide"
							var options = { direction: "right" };
							var duration = 500;
							$('.dropdown-content').toggle(effect, options, duration);
							//$(".dropdown-content").toggle("slide", direction: "left");
							//$("html").toggleClass("dropnoscroll");
							//$(".dropbtn").toggleClass("dropbtnrotate");
						});*/
					//$(document).ready(function() {
						$(".dropbtn").click(function() {
							$(".dropdown-content").slideToggle(300);
							//$("html").toggleClass("dropnoscroll");
							$(".dropbtn").toggleClass("dropbtnrotate");
						});
					//});
					$(function(reference) {
						$('a[href*="#"]:not([href="#"])').click(function(reference) {
							if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
								var target = $(this.hash);
								target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
								if (target.length) {
									$('html, body').animate({scrollTop: target.offset().top}, 500);
									return false;
								}
							}
						});
					});
					function cycleImages(){
						var images = $('#mySlides img'),
						now    = images.filter(':visible'),
						next   = now.next().length ? now.next() : images.first(),
						speed  = 750;
						now.fadeOut(speed);
						next.fadeIn(speed);
					}
					$(function(cycle) {
						setInterval(cycleImages, 7500);
					});
					$(function(){
						var $stickytop = $(".stickytop");
						$stickytop.data("status", "hidden");
						$(window).on("scroll", function(){
							var $stickytop = $(".stickytop");
							if (window.pageYOffset === 0 && $stickytop.data("status") !== "hidden") {
								$stickytop.stop(true, true);
								$stickytop.animate({opacity: 0.0}, 250);
								$stickytop.data("status", "hidden");
							} else if (window.pageYOffset > 0 && $stickytop.data("status") === "hidden") {
								$stickytop.stop(true, true);
								$stickytop.animate({opacity: 1.0}, 250);
								$stickytop.data("status", "visible");
							}
						});
					});
					window.onscroll = function() {scrollFunction()};
					function scrollFunction() {
						if ((document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) && (window.innerWidth > 980 || document.documentElement.clientWidth > 980 || document.body.clientWidth > 980)) {
							document.querySelector(".leftmarkimg").style.width = "60px";
							document.querySelector(".leftmarkimg").style.height = "40px";
							document.querySelector(".leftmarkimg").style.margin = "13px 0 0 24px";
							document.querySelector(".leftmarktext").style.top = "26px";
							document.querySelector(".home").style.padding = "4px 8px";
							document.querySelector(".projects").style.padding = "4px 8px";
							document.querySelector(".about").style.padding = "4px 8px";
							document.querySelector(".contact").style.padding = "4px 8px";
							document.querySelector(".header").style.height = "59px";
						} else {
							document.querySelector(".leftmarkimg").style.width = "90px";
							document.querySelector(".leftmarkimg").style.height = "60px";
							document.querySelector(".leftmarkimg").style.margin = "12px 0 0 0";
							document.querySelector(".leftmarktext").style.marginTop = "0px";
							document.querySelector(".leftmarktext").style.top = "32px";
							document.querySelector(".home").style.padding = "14px 8px";
							document.querySelector(".projects").style.padding = "14px 8px";
							document.querySelector(".about").style.padding = "14px 8px";
							document.querySelector(".contact").style.padding = "14px 8px";
							document.querySelector(".header").style.height = "79px";
						}
					} 
				</script>
	