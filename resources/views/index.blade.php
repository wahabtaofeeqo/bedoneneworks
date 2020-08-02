<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
  	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Be Done Networks| Buy Bitcoin, Gifcard from exchange made easy!</title>

	@include("partials.cssFiles")
</head>
<body>

	@include("partials.header")

	<main id="main">
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
             <strong>Be Done Networks</strong> is a platform that enables customers to convert their bitcoins to preferred local currency. What will do mainly are:
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Bitcoin Exchange</li>
              <li><i class="ri-check-double-line"></i> Giftcard Exchange</li>
              <li><i class="ri-check-double-line"></i> All crypto coins</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
             	Customers can however sell their bitcoins and have money from the sales of the btc sent to their bank account.
				      Banks don’t support bitcoin but we offer a secure medium of exchange where bitcoins would be exchanged with local currency.
            </p>
            <a href="#contact" class="btn-learn-more">Contact Us</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content mb-4">
              <h3>Bitcoin Exchange <strong>At easy</strong></h3>
              <p class="">
                Using <strong>Be Done Networks</strong> provides quite a lot benefits. Some of the key ones are:
              </p>
            </div>

            <div class="accordion-list">
               <ul>
                <li>
                  	<a data-toggle="" class="" href="#">
                  		<span>01</span> Ease of Access </a>
                  	<div class="" data-parent="">
                    	<p>
                      	Our service has been designed such that it becomes very easy for potential client and user to find it very convinience.
                    	</p>
                  	</div>
                </li>

                <li>
                  <a href="#">
                  	<span>02</span> Good Rate </a>
                  <div id="accordion-list-2" data-parent=".accordion-list">
                    <p>
                      The rate of our exchange for all cryptocurrency related busness is of high quality and that is our market strategy.
                    </p>
                  </div>
                </li>

                <li>
                  	<a href="#">
                  		<span>03</span> Fast Payment </a>
                  	
                  		
                  	<div id="accordion-list-3" data-parent=".accordion-list">
                    	<p>
                    		Our payment is termed <strong>Pay As You Go</strong> which means no delay at all. Once the business is done, you get the alert.
                    	</p>
                  	</div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/bh.png");' data-aos="zoom-in" data-aos-delay="150">
          	
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
         <!--  <div class="col-lg-4 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/skills.png" class="img-fluid" alt="">
          </div> -->
          <div class="col-lg-12 px-0 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3 class="mb-4 text-center-md">Market Today</h3>

            <div class="card table-responsive" style="border-left: none; border-right: none; border-bottom: none;">
            	<table class="table table-striped">
            	<thead>
            		<tr>
            			<th>#</th>
            			<th>Name</th>
            			<th>Symbol</th>
            			<th>Price</th>
            			<th>Market Cap</th>
            			<th>Total Volume</th>
            		</tr>
            	</thead>
            	<tbody>
       
            		@foreach($data as $key => $row) 
            			<tr>
            				<td>
            					{{$key + 1}}
            				</td>
            				<td>
            					<img src="{{$row['image']}}" style="height: 35px; height: 35px;">
            					<span class="px-4">
            						{{$row['name']}}
            					</span>
            				</td>

            				<td class="text-uppercase">
            					{{$row['symbol']}}
            				</td>

            				<td>
            					${{$row['current_price']}}
            				</td>

            				<td>
            					${{$row['market_cap']}}
            				</td>

            				<td>
            					${{$row['total_volume']}}
            				</td>
            			</tr>

            			<?php if ($key == 10): ?>
            				<?php break ?>
            			<?php endif ?>
            		@endforeach
            	</tbody>
            </table>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Services Section ======= -->
    <section id="testimonials" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>What People say about us</h2>
          <p>
          	From our ever growing customer satisfaction, we have be able to gain trust of some of our potential customers. <strong>Give Us A Try</strong>
          </p>
        </div>

        <div class="owl-carousel col-12 text-center">

          <?php if (isset($testimonials) && !empty($testimonials)): ?>
            @foreach($testimonials as $row) 
              <div class="" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box" style="overflow-x: hidden;">
                  <h4><a href="">{{$row['name']}}</a></h4>
                  <blockquote style="font-style: italic;">
                    {{$row['content']}}
                  </blockquote>
                </div>
              </div>
            @endforeach
          <?php endif ?>

        </div>

        <div class="row d-none">
          
        
        </div>

      </div>
    </section><!-- End Services Section -->

 
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>
          	Our business center is open 24/7 to serve you better. Use The contact info and Get to us.
          </p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Available at your request</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>belloalaba6@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+234 8020833029</p>
              </div>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="contact" method="POST" role="form" class="php-email-form" id="contactForm">
            	@csrf   
              <div class="form-group">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" required="" name="email"/>
              </div>

              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" required="" rows="10"></textarea>
              </div>

              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>

              <div class="text-center">
                <button type="submit">Send Message</button>
              </div>

            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  	</main><!-- End #main -->

  	@include("partials.footer")

	@include("partials.jsFiles")
</body>
</html>