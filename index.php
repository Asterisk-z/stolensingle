<?php include('inc/header.php'); ?>

	<div class="hero">
		<div class="map">
			<img src="images/world-dotted-map.png" alt="Image" class="img-fluid">
		</div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7">
					<h1 class="heading" data-aos="fade-up">Track Your Package</h1>
					<p class="lead" data-aos="fade-up" data-aos-delay="100">Track shipments by number or reference, get status notifications and obtain proof of delivery.
						Want to keep track of shipment history? Register for BlueBridge+ today!</p>

					<form action="Inc/Track.php" method="POST" class="form-search d-flex align-items-stretch mb-5" data-aos="fade-up" data-aos-delay="200">
						<input type="text" name="trk" class="form-control" placeholder="Your Tracking ID  or Reference Code. e.g. 12346558E">
						<?php
                if(isset($_GET["error"])){
                    if($_GET["error"] == "Null") {
                        echo "<p style='color:Red;'>Please Provide Tracking ID</p>";
                    }
                    elseif($_GET["error"] == "wronglogin"){
                        echo "<p style='color:Red;'>Incorrect Tracking ID</p>";
                    }
                    elseif($_GET["error"] == "Welcome"){
                        echo "<p>Login Successful</p>";
                    }
    

            
                }

        ?>
						<button type="submit" name="submit" class="btn btn-primary">Search</button>
						
					</form>


					<div class="row section-counter">
						<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
							<div class="counter-wrap">
								<span class="number"><span class="countup">2917</span></span>
								<span class="caption"># of Companies</span>
							</div>
						</div>
						<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
							<div class="counter-wrap">
								<span class="number"><span class="countup">3918</span></span>
								<span class="caption"># of Roag Freight</span>
							</div>
						</div>
						<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
							<div class="counter-wrap">
								<span class="number"><span class="countup">38928</span></span>
								<span class="caption"># of Air Freight</span>
							</div>
						</div>
						<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
							<div class="counter-wrap">
								<span class="number"><span class="countup">7192</span></span>
								<span class="caption"># of Sea Freight</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="section section-1">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
					<div class="feature box-shadow d-flex">
						<div class="icon">
							<img src="images/svg/001-airplane.svg" alt="Image" class="img-fluid">
						</div>
						<div class="text">
							<h3 class="heading">Air Freight</h3>
							<p>Only with BlueBridge can you prepay for imported items to be delivered right to your door from anywhere in the world.</p>
							<p><a href="#" class="more active dark">Read more <span class="icon-arrow_forward"></span></a></p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
					<div class="feature box-shadow d-flex">
						<div class="icon">
							<img src="images/svg/002-cargo-ship.svg" alt="Image" class="img-fluid">
						</div>
						<div class="text">
							<h3 class="heading">Sea Freight</h3>
							<p>At BlueBridge we offer thousands of shipping container rates for your shipment needs. Get a qoute today, we have got you covered.</p>
							<p><a href="#" class="more active dark">Read more <span class="icon-arrow_forward"></span></a></p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
					<div class="feature box-shadow d-flex">
						<div class="icon">
							<img src="images/svg/003-truck.svg" alt="Image" class="img-fluid">
						</div>
						<div class="text">
							<h3 class="heading">Land Freight</h3>
							<p>we make it possible to load up to 35,000 liters, giving us the possibility of transporting chemical, petrochemical and liquid products.</p>
							<p><a href="#" class="more active dark">Read more <span class="icon-arrow_forward"></span></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	


	<div class="section pt-0">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-6 order-lg-2" data-aos="fade-left">


					<a href="https://vimeo.com/342333493" class="video-wrap glightbox">
						<span class="play-wrap"><span class="icon-play"></span></span>
						<img src="images/hero_bg_1.jpg" alt="Image" class="img-fluid rounded">
					</a>

				</div>
				<div class="col-lg-5">
					<div class="">
						<span class="subheading d-block"  data-aos="fade-right" data-aos-delay="0">Mission</span>
						<h2 class="heading text-black mb-4"  data-aos="fade-right" data-aos-delay="0">About Us</h2>
						<p class="mb-5" data-aos="fade-right" data-aos-delay="100">Beyond offering solutions, BlueBridge offers a wide range of possibilities, based on a exceptional customer service, with a solid financial support to cover any needs.
							We are well prepared to provide solutions supported in efficient processes.</p>

						<div class="feature d-flex mb-5" data-aos="fade-right" data-aos-delay="200">
							<div class="icon">
								<img src="images/svg/001-airplane.svg" alt="Image" class="img-fluid">
							</div>
							<div class="text">
								<h3 class="heading">Air Freight</h3>
								<p>Only with BlueBridge can you prepay for imported items to be delivered right to your....</p>
							</div>
						</div>

						<div class="feature d-flex" data-aos="fade-right" data-aos-delay="300">
							<div class="icon">
								<img src="images/svg/002-cargo-ship.svg" alt="Image" class="img-fluid">
							</div>
							<div class="text">
								<h3 class="heading">Sea Freight</h3>
								<p>At BlueBridge we offer thousands of shipping container rates for your shipment needs....</p>
							</div>
						</div>


					</div>
				</div>		

				
			</div>		
		</div>		
	</div>

	<div class="section pt-0 bg-img py-5 overlay" style="background-image: url('images/hero_bg_1.jpg');">
		<div class="container">
			<div class="row align-items-center justify-content-center text-center">
				<div class="col-lg-7">
					<h2 class="text-white mb-3" data-aos="fade-up" data-aos-delay="0">One Solution, Many Benefits</h2>
					<p class="text-white h5 mb-4" data-aos="fade-up" data-aos-delay="100">BlueBridge+ makes it easier than ever to ship online, get quotes, schedule pickups, find locations, track shipments and more!</p>
					<p><a href="#" class="btn btn-secondary" data-aos="fade-up" data-aos-delay="200">Get started - Create a shipment</a></p>
				</div>
			</div>
		</div>  
	</div> <!-- /.untree_co-section -->


	<div class="section bg-light">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-5" data-aos="fade-up">
					<span class="subheading d-block">Testimonials</span>
					<h2 class="heading mb-5">Happy Customer</h2>


					<div class="testimonial-slide-wrap">



						<div class="testimonial-slide">
							
							<div class="item">
								<blockquote class="block-testimonial">
									<div class="author">
										<img src="images/person_1.jpg">
										<h3>John Doe</h3>
										<p class="position">Columbus, Ohio</p>
									</div>
									<p>
									&ldquo;I have been using BlueBridge regularly for about 3.5 years and they consistently deliver a fast efficient service. Both import and export shipments usually take only 2-3 days. UK domestic nearly always delivered next-day. I have had a few issues but they have always been very easy to sort out. Compared with UPS which is terribly slow and unreliable..&rdquo;</p>
									
								</blockquote>
							</div>

							<div class="item">
								<blockquote class="block-testimonial">
									<div class="author">
										<img src="images/person_2.jpg">
										<h3>James Woodland</h3>
										<p class="position">Chicago, Illinois</p>
									</div>
									<p>
									&ldquo;Great service, driver Gavin McDermott on route SF2P (16/11/2021) left easy instructions and was very helpful! Thank you.&rdquo;</p>
									
								</blockquote>
							</div>

							<div class="item">
								<blockquote class="block-testimonial">
									<div class="author">
										<img src="images/person_3.jpg">
										<h3>Rob Smith</h3>
										<p class="position">Rochester, New York</p>
									</div>
									<p>
									&ldquo;Lovely experience with Daniel and Joanne today, very professional and polite. Kept me up to date with tracking till they arrived to collect my item. Thank you.&rdquo;</p>
									
								</blockquote>
							</div>

						</div>

						<div id="prevnext-testimonial">
							<span class="prev"><span class="icon-keyboard_arrow_left"></span></span>
							<span class="next"><span class="icon-keyboard_arrow_right"></span></span>
						</div>
					</div>
				</div>		
				<div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
					<span class="subheading d-block">Why Us</span>
					<h2 class="heading mb-5">Why Choose Us</h2>


					<div class="custom-accordion" id="accordion_1">
						<div class="accordion-item">
							<h2 class="mb-0">
								<button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">24/7 Customer Service</button>
							</h2>

							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion_1">
								<div class="accordion-body">
									<div class="d-flex">

										<div>
											<p>We have the same expectation of support on a $10-a-month cloud service as we do to the $100 a </p>
											<p>month we pay for home utilities or the $1000 a month for a high-end B2B service.</p>
										</div>
									</div>
								</div>
							</div>
						</div> <!-- .accordion-item -->

						<div class="accordion-item">
							<h2 class="mb-0">
								<button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Delivering Results for Industry Leaders</button>
							</h2>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion_1">
								<div class="accordion-body">
									<div class="d-flex">

										<div>
											<p>Over the last decde we've been dedicated to creating state of of the art delivery channels</p>
											<p>Weither you need to send a package, a gift or a Shipment we're fully kitted to bridge you to your clients.</p>
										</div>
									</div>
								</div>
							</div>
						</div> <!-- .accordion-item -->
						<div class="accordion-item">
							<h2 class="mb-0">
								<button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Fast and Secure Transportation</button>
							</h2>

							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion_1">
								<div class="accordion-body">
									<div class="d-flex">

										<div>
											<p>Secure Transportation is an experienced passenger transportation company devoted to providing the absolute highest level of service and professionalism for its clients.</p>
											<p>We offer a full range of services including transportation planning, assistance and reservations throughout California and across the U.S.</p>
										</div>
									</div>

								</div>
							</div>

						</div> <!-- .accordion-item -->

					</div>

				</div>		
			</div>		
		</div>		
	</div>



	<div class="section">
		<div class="container">
			<div class="row  mb-5 text-center" data-aos="fade-up">
				<span class="subheading d-block">BlueBridge+</span>
				<h2 class="heading">Special Offers</h2>
			</div>
			<div class="row">

				<div class="col-sm-6 col-md-6 col-lg-3 blog-entry" data-aos="fade-up" data-aos-delay="100">
					<a href="news-single.html" class="media-thumb rounded">
						<img src="images/img_3.jpg" alt="Image" class="img-fluid">
					</a> 
					<h3 class="post-title mb-0"><a href="news-single.html">Rearrange a Delivery</a></h3>
					<span class="meta d-block mb-3"></span>
					<p class="text-black-50">Received a notification or card and need to change when your delivery arrives? You can easily rearrange your delivery online to a day that suits you better or to your local DHL ServicePoint.</p>
					<p><a href="news-single.html">Find Out More</a></p>
				</div>	
				<div class="col-sm-6 col-md-6 col-lg-3 blog-entry" data-aos="fade-up" data-aos-delay="200">
					<a href="news-single.html" class="media-thumb rounded">
						<img src="images/img_1.jpg" alt="Image" class="img-fluid">
					</a> 
					<h3 class="post-title mb-0"><a href="news-single.html">Sales Enquiry</a></h3>
					<span class="meta d-block mb-3"></span>
					<p class="text-black-50">Prices are dependent on volume, so it’s best to arrange a call with one of our experienced sales advisors who will be happy to discuss your requirements and provide you with a quote.</p>
					<p><a href="news-single.html">Scale Prices</a></p>
				</div>	
				<div class="col-sm-6 col-md-6 col-lg-3 blog-entry" data-aos="fade-up" data-aos-delay="300">
					<a href="news-single.html" class="media-thumb rounded">
						<img src="images/img_2.jpg" alt="Image" class="img-fluid">
					</a>
					<h3 class="post-title mb-0"><a href="news-single.html">BlueBridge ServicePoints</a></h3> 
					<span class="meta d-block mb-3"></span>

					<p class="text-black-50">Offer customers the convenience of collecting their parcel from 3,500 local stores nationwide with the DHL ServicePoint network – provide the flexibility demanded by today’s online shoppers.</p>
					<p><a href="news-single.html">Find Out more</a></p>
				</div>	
				<div class="col-sm-6 col-md-6 col-lg-3 blog-entry" data-aos="fade-up" data-aos-delay="400">
					<a href="news-single.html" class="media-thumb rounded">
						<img src="images/Gift.jfif" alt="Image" class="img-fluid">
					</a> 
					<h3 class="post-title mb-0"><a href="news-single.html">Gift it. Pack it. Bridge it.</a></h3>
					<span class="meta d-block mb-3"></span>

					<p class="text-black-50">Sending a gift to a friend or loved one? We offer next day UK delivery from just £2.79  and international delivery to 160 countries worldwide.  Get 15% off your first order when you sign up to receive our email newsletter.</p>
					<p><a href="news-single.html">Find Out more</a></p>
				</div>	

			</div>		
		</div>		
	</div>
	
	<?php include 'inc/footer.php'; ?>