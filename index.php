<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">
        <title>HOME DECOR BY JOANNIE</title>
		<script src="js/jquery-1.11.2.js"></script>
		<script>
		    $(document).on("mobileinit", function(evt) {
		      // Change some settings
		    	$.mobile.defaultPageTransition = "flip";
		    	$.mobile.pageLoadErrorMessage = "Whoops!";
		    	$.mobile.pageLoadErrorMessageTheme = "b";
			});
		</script>
		<script src="js/jquery.mobile-1.4.5.js"></script>
		<link rel="stylesheet" href="css/slicknav.css" />
		<script src="js/jquery.slicknav.js"></script>
		<script type="text/javascript" src="js/responsiveslides.js"></script>
		<link rel="stylesheet" href="css/style-mobile.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script>
			
			$(function(){
			   	$( "[data-role='header'], [data-role='footer']" ).toolbar();
			});	    	
		   	$(function(){
				$('#menu').slicknav({
					prependTo:'#navigation-menu'
				});
			});
				$(function(){
				$('#menu1').slicknav({
					prependTo:'#navigation-menu1'
				});
			});
					$(function(){
				$('#menu2').slicknav({
					prependTo:'#navigation-menu2'
				});
			});
					$(function(){
				$('#menu3').slicknav({
					prependTo:'#navigation-menu3'
				});
			});
					$(function(){
				$('#menu4').slicknav({
					prependTo:'#navigation-menu4'
				});
			});
					$(function(){
				$('#menu5').slicknav({
					prependTo:'#navigation-menu5'
				});
			});
					$(function(){
				$('#menu6').slicknav({
					prependTo:'#navigation-menu6'
				});
			});
					$(function(){
				$('#menu7').slicknav({
					prependTo:'#navigation-menu7'
				});
			});
					$(function(){
				$('#menu8').slicknav({
					prependTo:'#navigation-menu8'
				});
			});
					$(function(){
				$('#menu9').slicknav({
					prependTo:'#navigation-menu9'
				});
			});
					$(function(){
				$('#menu10').slicknav({
					prependTo:'#navigation-menu10'
				});
			});
					$(function(){
				$('#menu11').slicknav({
					prependTo:'#navigation-menu11'
				});
			});
					$(function(){
				$('#menu12').slicknav({
					prependTo:'#navigation-menu12'
				});
			});
					$(function(){
				$('#menu13').slicknav({
					prependTo:'#navigation-menu13'
				});
			});
			$(function(){
				$('#menu-contact').slicknav({
					prependTo:'#navigation-menu-contact'
				});
			});
			$(function(){
				$('#menu-seo').slicknav({
					prependTo:'#navigation-menu-seo'
				});
			});
			$(function () {

		      // Slideshow 4
		      	$("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		    $(function () {

		      // Slideshow web
		      	$("#slider-web").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		    $(function() { 
		    	var s = document.createElement("script");s.async = true;s.onload = s.onreadystatechange = function(){getYelpWidget("boo-boo-records-inc-san-luis-obispo","300","RED","y","y","2");};s.src='http://chrisawren.com/widgets/yelp/yelpv2.js' ;var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);})
		    ();
    	</script>
    	<div id="fb-root"></div>
		    <script>
		   $(function(d, s, id) {
      			var js, fjs = d.getElementsByTagName(s)[0];
      			if (d.getElementById(id)) return;
      			js = d.createElement(s); js.id = id;
      			js.src = "//connect.facebook.net/en_EN/sdk.js#xfbml=1&version=v2.0";
      			fjs.parentNode.insertBefore(js, fjs);
    		}(document, 'script', 'facebook-jssdk'));</script>

	</head>
	<body>
		
		<?php 
			include 'settings.php';
		?>

		<div id="header-image" data-role="header" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1><a href="#page1"><img src="img/logo.png" alt="LOGO"></a></h1>
		</div>
		<div data-role="footer" data-theme="<?php echo $theme ?>" data-position="fixed">
			<h1>Powered by <a href="http://mobilegrows.com/" rel="external">MobileGrows</a> | <a href="http://furniturestorenaples.com/" rel="external">Desktop Site</a></h1>
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">
		  

		  <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		  		<!-- Jssor Slider Begin -->
			  	<div class="callbacks_container">
				    <ul class="rslides" id="slider4">
				      <li>
				        <img src="img/slider-images/slider1.jpg" alt="">
				        <!-- <p class="caption">This is a caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/slider2.jpg" alt="">
				        <!-- <p class="caption">This is another caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/slider3.jpg" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
                        <li>
                            <img src="img/slider-images/slider4.jpg" alt="">
                            <!-- <p class="caption">This is a caption</p> -->
                        </li>
                        <li>
                            <img src="img/slider-images/slider5.jpg" alt="">
                            <!-- <p class="caption">This is a caption</p> -->
                        </li>
                        <li>
                            <img src="img/slider-images/slider6.jpg" alt="">
                            <!-- <p class="caption">This is a caption</p> -->
                        </li>
				    </ul>
			    </div>
			    <!-- Jssor Slider End -->
				<fieldset class="ui-grid-b" data-theme="<?php echo $theme ?>">
					<!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI  -->
					<div class="ui-block-a"><a class="ui-btn velikodugme buttons-radius" href="tel:<?php echo $telephone ?>"><img src="img/call-01.png" alt="" style="width: 37px; padding-top: 5px;"></a></div>
					<!-- ovdje se upisuje grad i adresa iz koje  -->
					<div class="ui-block-b" id="findUS">
						<script>
							var ua = navigator.userAgent;
							if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
								console.log("Android uslo");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn velikodugme buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="<img src='img/location.png' style='width: 37px; padding-top: 5px;'>";
								prostordugme.appendChild(dugme);
							}
							else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
								console.log("Iphone ");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn velikodugme buttons-radius");
								dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
								dugme.innerHTML="<img src='img/location.png' style='width: 37px; padding-top: 5px;'>";
								prostordugme.appendChild(dugme);
							}
							else if (ua.indexOf("BlackBerry") >= 0) {

									console.log("Blakberu je prosao ")
									var prostordugme=document.getElementById('findUS');
									var dugme= document.createElement('a');
									dugme.setAttribute('class', "ui-btn velikodugme buttons-radius");
									dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
									dugme.innerHTML="<img src='img/location.png' style='width: 37px; padding-top: 5px;'>";
									prostordugme.appendChild(dugme);
									}		
							else {
								console.log("nije nigdje uslo default ")
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn velikodugme buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="<img src='img/location.png' style='width: 37px; padding-top: 5px;'>";
								prostordugme.appendChild(dugme);
							}

							

							// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							// // some code..
							// }

						</script>
						
						

					</div>	
					<div class="ui-block-c"><a class="ui-btn velikodugme buttons-radius" href="#contactform" data-transition="<?php echo $transitionefect ?>"><img src='img/mail.png' style='width: 37px; padding-top: 10px;'></a></div>   
				</fieldset>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#our" data-transition="<?php echo $transitionefect ?>">Our Store</a>
                  </div>
              </div>

              <div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
                                <h3>Collections</h3>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#accessories" data-transition="<?php echo $transitionefect ?>">Accessories</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#chairs" data-transition="<?php echo $transitionefect ?>">Chairs and Seatings</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#furniture" data-transition="<?php echo $transitionefect ?>">Furniture</a>
                                 <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#lighting" data-transition="<?php echo $transitionefect ?>">Lighting</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#mirrors" data-transition="<?php echo $transitionefect ?>">Mirrors</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#rugs" data-transition="<?php echo $transitionefect ?>">Rugs</a>
                                 <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#tables" data-transition="<?php echo $transitionefect ?>">Tables</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#wall" data-transition="<?php echo $transitionefect ?>">Wall Decor</a>
                            </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#design" data-transition="<?php echo $transitionefect ?>">Design</a>
                  </div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#blog" data-transition="<?php echo $transitionefect ?>">Blog</a>
                  </div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#clearance" data-transition="<?php echo $transitionefect ?>">Clearance</a>
                  </div>
              </div>
		  </div>
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- our ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="our" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu">
						<ul id="menu">
							<li><a href="#our" data-transition="<?php echo $transitionefect ?>">Our Store</a></li>
							<li><a href="#collections" data-transition="<?php echo $transitionefect ?>">Collections</a></li>
                          	<li><a href="#design" data-transition="<?php echo $transitionefect ?>">Design</a></li>
                            <li><a href="#blog" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                            <li><a href="#clearance" data-transition="<?php echo $transitionefect ?>">Clearance</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
					<h3>HAVE NOTHING IN YOUR HOME THAT YOU DONT KNOW TO BE USEFUL OR BELIEVE TO BE BEAUTIFUL. WILLIAM MORRIS</h3>
                    <p>HOME DECOR BY JOANNIE COASTAL CONTEMPORARY FURNITURE</p>
                    <p>Create your own coastal living retreat with furniture from Home Decor by Joannie</b></p>
                    <p>Home Decor by Joannie houses a stylish Collection of Contemporary Coastal Living Furniture and Accessories. Our coastal furniture collection reflects the casual, relaxed mood of life by the sea in Naples, Florida. Inspired by natures elements; marine life, sandy beaches and ocean splendor, we specialize in turning your Florida home into a tranquil haven. Stop in today, meet with one of our interior designers, and shop our high quality collection of coastal contemporary furniture.</p>
                    <img src="img/slika1.jpg" alt style="padding-left:10px;">
                    <img src="img/slika2.jpg" alt style="padding-left:10px;">
                    <img src="img/slika3.jpg" alt style="padding-left:10px;">

                </div>

			</div>	
				
				
		</div>
		
		<!-- our ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- collections ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="collections" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu1">
						<ul id="menu1">
							<li><a href="#our" data-transition="<?php echo $transitionefect ?>">Our Store</a></li>
                            <li><a href="#design" data-transition="<?php echo $transitionefect ?>">Design</a></li>
                            <li><a href="#blog" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                            <li><a href="#clearance" data-transition="<?php echo $transitionefect ?>">Clearance</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
					<h3>Collections</h3>
					<p>CREATIVITY IS ALLOWING YOURSELF TO MAKE MISTAKES. DESIGN IS KNOWING WHICH ONES TO KEEP. SCOTT ADAMS</p>
					<p>Our trained buyers select only superior brands to carry in our store. Each piece meets our high standard of style and comfort. In addition to what is displayed on our floor showroom we can order any items from our featured suppliers. We also custom upholster any chair, ottoman or sectional.</p>
                   	<img src="img/slika9.jpg" alt style="padding-left:10px;">
                   	<img src="img/slika10.jpg" alt style="padding-left:10px;">
                   	<img src="img/slika11.jpg" alt style="padding-left:10px;">
      

                </div>

			</div>	
				
				
		</div>
		
		<!-- end collections ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- design ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="design" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu2">
						<ul id="menu2">
							<li><a href="#our" data-transition="<?php echo $transitionefect ?>">Our Store</a></li>
							<li><a href="#collections" data-transition="<?php echo $transitionefect ?>">Collections</a></li>
                         
                            <li><a href="#blog" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                            <li><a href="#clearance" data-transition="<?php echo $transitionefect ?>">Clearance</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
					<h3>Design Services</h3>
                    <p>A DESIGNER KNOWS WHEN HE HAS REACHED PERFECTION NOT WHEN THERE IS NOTHING LEFT TO ADD BUT WHEN THERE IS NOTHING LEFT TO TAKE AWAY. ANTIONE DE SAINTE EXUPERY</p>
                    <p>Our Interior Design staff specializes in coastal homes. Our goal is to transfer your home into your personal coastal paradise. Whether creating an ocean inspired palette or furnishing your home with contemporary coastal elegance we are available to consult on your decorating needs and budget. Our designers are available for in-store or home consultation. Contact us today to schedule an initial visit.</b></p>
                    <img src="img/design.jpg"  alt style="padding-left:10px;">

                </div>

			</div>	
				
				
		</div>
		
		<!--end design ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- blog ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="blog" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu3">
						<ul id="menu3">
							<li><a href="#our" data-transition="<?php echo $transitionefect ?>">Our Store</a></li>
							<li><a href="#collections" data-transition="<?php echo $transitionefect ?>">Collections</a></li>
                            <li><a href="#design" data-transition="<?php echo $transitionefect ?>">Design</a></li>
                         
                            <li><a href="#clearance" data-transition="<?php echo $transitionefect ?>">Clearance</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
					<h3>Blog</h3>
					 <img src="img/blog.jpg"  alt style="padding-left:10px;">

                    <p>WELCOME NEIGHBORS! PARAGON THEATERS!</p>
                    <p>By KALHAN ROSENBLATT
Posted May 1, 2014 at 8:52 p.m., updated May 1, 2014 at 10:44 p.m.

David Ambeau remembers seeing movies at the old Pavilion Cinema in North Naples.

As one of the first patrons to enter the theater Thursday after its change in ownership and an extensive makeover, Ambeau said the theater is now more spacious and clean.

So far, its better than it used to be, said Ambeau, who caught a screening of The Amazing SpiderMan 2. Id put it up there with (Silverspot). It’s nice to have movie theaters like this.”

About 60 people showed up for the opening night of the Paragon Pavilion cinema, at the northwest corner of U.S. 41 and Vanderbilt Beach Road.

The 30-year-old theater underwent a $3 million makeover, which included upgrading the seating, putting in new air conditioning and a new lobby, and the addition of The Lot Bar & Lounge.

It is Paragon’s first location on the west coast of Florida. The company owns and operates nine other theaters, including four others in Florida: Coconut Grove, Daytona Beach, Deerfield Beach and Jupiter.

Carl And Beth Siemon were enjoying glasses of white wine with a Caesar salad and flatbread with a side of hummus for dinner before the movie.

We have been waiting for a long time for this to open, Carl Siemon said. We didnt want to miss opening night.

Paragon sold 45 presale tickets for SpiderMan, and as guests waited for the film to start, they chatted over drinks and dinner.

Everything is going very well for opening day, said Niki Wilson, Paragon Theaters vice president of marketing. The staff is fantastic.”

Naples resident Jen Damasco usually goes to Silverspot Cinema in Mercato but said she might head to the six-theater Paragon from now on.

Its a nice theater. Ill probably come here more than Silverspot from now on, especially because there’s a rewards card. That’s a nice perk,” she said.

The free card, for which patrons register online, allows them to earn one point per ticket purchased and use the points to purchase items such as popcorn, soda or a movie ticket.

Ticket prices for non-matinee movies are $12.50 for adults, $11 for student, and $9.50 for children, senior citizens and military personnel, General Manager Dalton Brown said.

Those prices put Paragon between ticket prices at Silverspot and the Regal Hollywood Stadium 20, a traditional cinema that is less than 5 miles away in North Naples. Tickets for regular, non-matinee movies at Silverspot are $16 for adults, $13.25 for seniors and $10.50 for children; at Hollywood 20, they are $12 for adults and $8.50 for seniors and children.

Because of a studio-mandated film allocation, Paragon Pavilion and Silverspot will not duplicate films being shown.

Bill and Trish Reilley said although they think Silverspot is a nicer theater, they were impressed with Paragon.

This theater is very nice. It’s obvious they put a lot of thought into it, Bill Reilley said. “I think it will be very well-received by the community.”

As 7 p.m. rolled around, patrons gathered in their seats  some with popcorn, some with beer  for both the latest chapter of the “Spider-Man” series and Naples moviegoing.</p>

                </div>

			</div>	
				
				
		</div>
		
		<!-- end blog ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!--clearance ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="clearance" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu4">
						<ul id="menu4">
							<li><a href="#our" data-transition="<?php echo $transitionefect ?>">Our Store</a></li>
                            <li><a href="#collections" data-transition="<?php echo $transitionefect ?>">Collections</a></li>
                            <li><a href="#design" data-transition="<?php echo $transitionefect ?>">Design</a></li>
                            <li><a href="#blog" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                            
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
					<h3>Clearance</h3>
                    <p>DESIGN IS COMING TO GRIPS WITH ONES REAL LIFESTYLE, ONES REAL PLACE IN THE WORLD. ROOMS SHOULD NOT BE PUT TOGETHER FOR SHOW BUT TO NOURISH ONES WELL BEING. ALBERT HADLEY</p>
                     <img src="img/slika6.jpg" alt style="padding-left:10px;">
                   	 <img src="img/slika7.jpg" alt style="padding-left:10px;">
                   	 <img src="img/slika8.jpg" alt style="padding-left:10px;">

                </div>

			</div>	
				
				
		</div>
		
		<!-- end clearance ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- accessories ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="accessories" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu6">
						<ul id="menu6">
							<li><a href="#our" data-transition="<?php echo $transitionefect ?>">Our Store</a></li>
                            <li><a href="#collections" data-transition="<?php echo $transitionefect ?>">Collections</a></li>
                            <li><a href="#design" data-transition="<?php echo $transitionefect ?>">Design</a></li>
                            <li><a href="#blog" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                            <li><a href="#clearance" data-transition="<?php echo $transitionefect ?>">Clearance</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
					<h3>Accessories</h3>
                    <p>I TRY NOT TO BRING IN ANYTHING I DONT LOVE LOOKING AT. ITS ABOUT RESTRAINT  THERE IS SOMETHING ABOUT AN UNFINISHED QUALITY THAT LEAVES WITHIN YOU THAT SENSE OF POSSIBILITY.ARTIST CAIO FONSECA</p>
                   <img src="img/accesories.jpg" alt style="padding-left:10px;">

                </div>

			</div>	
				
				
		</div>
		
		<!-- end accessories ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- chairs ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="chairs" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu7">
						<ul id="menu7">
							<li><a href="#our" data-transition="<?php echo $transitionefect ?>">Our Store</a></li>
                          	<li><a href="#collections" data-transition="<?php echo $transitionefect ?>">Collections</a></li>
                            <li><a href="#design" data-transition="<?php echo $transitionefect ?>">Design</a></li>
                            <li><a href="#blog" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                            <li><a href="#clearance" data-transition="<?php echo $transitionefect ?>">Clearance</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
					<h3>Chairs & Seating</h3>
                    <p>I LIKE TO SET PEOPLE FREE. I GIVE THEM A HINT AND ENCOURAGE THEM TO GO WITH THEIR IMAGINATIONS. IT IS THE ONLY WAY THAT NEW THINGS CAN COME TRUE.DESIGNER MURIEL BRANDOLINI</p>
                   <img src="img/chairs.jpg" alt style="padding-left:10px;">
                </div>

			</div>	
				
				
		</div>
		
		<!-- end chairs ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- furnitures ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="furniture" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu8">
						<ul id="menu8">
							<li><a href="#our" data-transition="<?php echo $transitionefect ?>">Our Store</a></li>
                         	<li><a href="#collections" data-transition="<?php echo $transitionefect ?>">Collections</a></li>
                            <li><a href="#design" data-transition="<?php echo $transitionefect ?>">Design</a></li>
                            <li><a href="#blog" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                            <li><a href="#clearance" data-transition="<?php echo $transitionefect ?>">Clearance</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
					<h3>FURNITURE</h3>
                    <p>THE DESIGN PROCESS IS HARD WORK, BUT IN THE END I WANT MY INTERIORS TO LOOK INSPIRED AND RELAXED, NOT STUDIED.INTERIOR DESIGNER KATIE RIDDER</p>
                   <img src="img/furnitures.jpg" alt style="padding-left:10px;">

                </div>

			</div>	
				
				
		</div>
		
		<!-- end furnitures ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- lighting ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="lighting" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu9">
						<ul id="menu9">
							<li><a href="#our" data-transition="<?php echo $transitionefect ?>">Our Store</a></li>
                           	<li><a href="#collections" data-transition="<?php echo $transitionefect ?>">Collections</a></li>
                            <li><a href="#design" data-transition="<?php echo $transitionefect ?>">Design</a></li>
                            <li><a href="#blog" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                            <li><a href="#clearance" data-transition="<?php echo $transitionefect ?>">Clearance</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
					<h3>Lighting (Lamps & Chandeliers)</h3>
                    <p>LIGHT IS THE MAGICAL INGREDIENT THAT MAKES OR BREAKS A SPACE; ITS ONE OF THE MOST IMPORTANT ELEMENTS IN ALL MY INTERIORS.INTERIOR DESIGNER BENJAMIN NORIEGA ORTIZ</p>
                    <img src="img/lighting.jpg" alt style="padding-left:10px;">

                </div>

			</div>	
				
				
		</div>
		
		<!-- end blog ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- mirrors ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="mirrors" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu10">
						<ul id="menu10">
							<li><a href="#our" data-transition="<?php echo $transitionefect ?>">Our Store</a></li>
                            <li><a href="#collections" data-transition="<?php echo $transitionefect ?>">Collections</a></li>
                            <li><a href="#design" data-transition="<?php echo $transitionefect ?>">Design</a></li>
                            <li><a href="#blog" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                            <li><a href="#clearance" data-transition="<?php echo $transitionefect ?>">Clearance</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
					<h3>Mirrors</h3>
                    <p>IN THE MOST SUCCESSFUL SPACES, YOU DONT SEE EVERYTHING AT ONCE. THE MORE TIME YOU SPEND IN THEM, THE MORE YOU DISCOVER. THEY OPEN UP LIKE FLOWERS.INTERIOR DESIGNER VICENTE WOLF</p>
                     <img src="img/mirrors.jpg" alt style="padding-left:10px;">

                </div>

			</div>	
				
				
		</div>
		
		<!-- end mirrors ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- rugs ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="rugs" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu11">
						<ul id="menu11">
							<li><a href="#our" data-transition="<?php echo $transitionefect ?>">Our Store</a></li>
                            <li><a href="#collections" data-transition="<?php echo $transitionefect ?>">Collections</a></li>
                            <li><a href="#design" data-transition="<?php echo $transitionefect ?>">Design</a></li>
                            <li><a href="#blog" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                            <li><a href="#clearance" data-transition="<?php echo $transitionefect ?>">Clearance</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
					<h3>Rugs</h3>
                    <p>THERE IS A CONCEPTION IN THIS COUNTRY ABOUT LUXURIOUS THINGS THAT WE HAVE TO SAVE THEM FOR A TIME THATS RIGHT. BUT AN OBJECT IS TRULY LUXURIOUS IF YOU ALLOW IT TO BE, IF YOU USE IT. WHEN YOU LIVE WITH BEAUTIFUL THINGS YOU STIMULATE YOUR MIND, YOU ENJOY LIFE A LITTLE BIT MORE.FASHION DESIGNER RALPH RUCCI</p>
                    <img src="img/rugs.jpg" alt style="padding-left:10px;">

                </div>

			</div>	
				
				
		</div>
		
		<!-- end rugs ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- tables ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="tables" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu12">
						<ul id="menu12">
							<li><a href="#our" data-transition="<?php echo $transitionefect ?>">Our Store</a></li>
                          	<li><a href="#collections" data-transition="<?php echo $transitionefect ?>">Collections</a></li>
                            <li><a href="#design" data-transition="<?php echo $transitionefect ?>">Design</a></li>
                            <li><a href="#blog" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                            <li><a href="#clearance" data-transition="<?php echo $transitionefect ?>">Clearance</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
					<h3>Tables</h3>
                    <p>ITS NOT HARD TO MAKE A SPACE THAT LOOKS GOOD BY ITSELF. THE TRICK IS TO CRAFT A ROOM THATS EVEN MORE ATTRACTIVE WHEN ITS OCCUPIED. THATS WHEN IT BECOMES MAGICAL.INTERIOR DESIGNER KERRY JOYCE</p>
                   <img src="img/tables.jpg" alt style="padding-left:10px;">

                </div>

			</div>	
				
				
		</div>
		
		<!-- end tables ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- wall ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="wall" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu13">
						<ul id="menu13">
							<li><a href="#our" data-transition="<?php echo $transitionefect ?>">Our Store</a></li>
                            <li><a href="#collections" data-transition="<?php echo $transitionefect ?>">Collections</a></li>
                            <li><a href="#design" data-transition="<?php echo $transitionefect ?>">Design</a></li>
                            <li><a href="#blog" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                            <li><a href="#clearance" data-transition="<?php echo $transitionefect ?>">Clearance</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
					<h3>Wall Decor</h3>
                    <p>WHEN IT COMES TO ART, BUY WITH YOUR EYES, NOT YOUR EARS. I TRIED VERY HARD NOT TO DECORATE WITH ART. ART SHOULD BE REFLECTIVE OF YOUR PERSONALITY AND WHATS GOING ON IN YOUR HEAD NOT REFLECTIVE OF THE COLORS OF A SOFA.HOTELIER JASON POMERANC</p>
                    <img src="img/wall.jpg" alt style="padding-left:10px;">

                </div>

			</div>	
				
				
		</div>
		
		<!-- end wall ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		
		<!-- contact us ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		
		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-contact">
							<ul id="menu-contact">
                               <li><a href="#our" data-transition="<?php echo $transitionefect ?>">Our Store</a></li>
                            <li><a href="#collections" data-transition="<?php echo $transitionefect ?>">Collections</a></li>
                            <li><a href="#design" data-transition="<?php echo $transitionefect ?>">Design</a></li>
                            <li><a href="#blog" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                            <li><a href="#clearance" data-transition="<?php echo $transitionefect ?>">Clearance</a></li>
							</ul>
					</section>
					<div>	
						<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
							Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/><br>
							E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/><br>
							Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/><br>
							Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/><br>
							Message:<br>
							<textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea> <br />
							<input type="submit" value="Send" name="submit" class="btn" id="input-dugme">
						</form>
					</div>
				</div>
			</div>
		
		</div>
<!--contact us///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- page seo ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div id="seopage" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-seo">
							<ul id="menu-seo">
								<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Web Design</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Local SE0</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Web Analytics</a></li>
							</ul>
					</section>
					
				</div>
			</div>
		
		</div>
<!--page seo///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="succes" data-role="page" data-theme="<?php echo $theme ?>" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
			 <p>The contact form was sent succesful!</p>
			
			</div>
		
		</div>
<!--page succes ends here///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="error" data-role="page" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
				<p>The contact form was sent because of an error!</p>
			</div>
		
		</div>
<!--erroor ends here////////////////////////////////////////////////////////////////////////////////////////////////////
	<!-- page 3 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!-- SLIDER ZA MOBILNI SAJT POCINJE OVDJEE -->
		<!-- it works the same with all jquery version from 1.x to 2.x -->
	
		<script type="text/javascript" src="js/responsiveslides.js"></script>    
	
	   
		<!-- Slajder se zavrsava -->
		<script src="js/easing.js" type="text/javascript"></script>
		<!-- UItoTop plugin -->
		<script src="js/jquery.ui.totop.js" type="text/javascript"></script>
		<!-- Starting the plugin -->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				*/
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
	</body>
</html>
