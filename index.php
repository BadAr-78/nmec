<?php require('./layouts/header.php'); ?>
<?php require('./layouts/nav.php'); ?>
      <!-- Swiper-->
      <section class="section swiper-container swiper-slider swiper-slider-corporate swiper-pagination-style-2" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="false" data-direction="vertical">
        <div class="swiper-wrapper text-left">
          
        <?php
        $sliders = array(
        '1.jpg',
        '2.jpg',
        '3.jpg',
        '4.jpg',
        '5.jpg',
        '6.jpg',
        '7.jpg',
        '8.jpg',
        '9.jpg',
        '10.jpg',
        // '11.jpg',
        // '12.jpg',
        // '13.jpg',
        );
        foreach($sliders as $slider){
          ?>
          <div class="swiper-slide context-dark" data-slide-bg="imgs/slider/<?php echo $slider; ?>">
            <div class="swiper-slide-caption section-md">
              <!-- <div class="container">
                <div class="row">
                  <div class="col-md-10">
                    <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">Enjoy the Best Destinations with Our Travel Agency</h6>
                    <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span>Explore</span><span class="font-weight-bold"> The World</span></h2><a class="button button-default-outline button-ujarak" href="#" data-caption-animate="fadeInLeft" data-caption-delay="0">Get in touch</a>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
          <?php
        }
        ?>
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination"></div>
      </section>
      <!-- Section Box Categories-->
      <section class="section section-lg section-top-1 bg-gray-4" id="hotels">
        <div class="container offset-negative-1">
          <div class="box-categories cta-box-wrap">
            <div class="box-categories-content">
              <div class="row justify-content-center">
              <?php
        $hotels = array(
          array(
            'title' => 'InterContinental Cairo Semiramis',
            'img' => 'hotel-1.jpg'
          ),
          array(
            'title' => 'Kempinski Nile Hotel Garden City Cairo',
            'img' => 'hotel-2.jpg'
          ),
          array(
            'title' => 'Four Seasons Hotel Cairo at the First Residence',
            'img' => 'hotel-3.jpg'
          ),
        );
                foreach($hotels as $hotel){
                  ?>
                  <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                  <ul class="list-marked-2 box-categories-list">
                    <li><a href="#"><img src="imgs/hotels/<?php echo $hotel['img']; ?>" alt="" style="width:100%;height:220px;" /></a>
                      <h5 class="box-categories-title"><?php echo $hotel['title']; ?></h5>
                    </li>
                  </ul>
                </div>
                  <?php
                }
                ?>
              </div>
            </div>
          </div>
          <!-- <a class="link-classic wow fadeInUp" href="#">Other Hotels<span></span></a> -->
          <!-- Owl Carousel-->
        </div>
        <br>
        <iframe src="imgs/slider/video.mp4" style="width:60%;height:555px;border:none;"></iframe>
                
      </section>
      <!-- Discover New Horizons-->
      <section class="section section-sm section-first bg-default text-md-left">
        <div class="container">
          <div class="row row-50 align-items-center justify-content-center justify-content-xl-between">
            <div class="col-lg-6 text-center wow fadeInUp"><img src="imgs/about-nmec-image.png" alt="" width="556" height="250"/>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay=".1s">
              <div class="box-width-lg-470">
                <h3>Discover NMEC</h3>
                <!-- Bootstrap tabs-->
                <div class="tabs-custom tabs-horizontal tabs-line tabs-line-big tabs-line-style-2 text-center text-md-left" id="tabs-7">
                  <!-- Nav tabs-->
                  <ul class="nav nav-tabs">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-7-1" data-toggle="tab">About us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-7-2" data-toggle="tab">Vision</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-7-3" data-toggle="tab">Our mission</a></li>
                  </ul>
                  <!-- Tab panes-->
                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabs-7-1">
                      <p>NMEC is the first museum in the Arab world focusing on the earliest civilization in history - the ancient Egyptian civilization. It is the only museum in Egypt that offers the visitor a general overview of all the different historical periods that encompass Egypt. This has been approached as a layered cumulative product regarding the interaction of the Egyptian people with their land throughout history. This has been created via a multidisciplinary thematic approach designed to highlight Egypt’s tangible and intangible heritage. In addition, NMEC is an important cultural, educational, recreational, and research center for local and international visitors and scholars.</p>
                      <!-- <div class="group-md group-middle"><a class="button button-secondary button-pipaluk" href="contact-us.html">Get in Touch</a><a class="button button-black-outline button-md" href="about.html">Read More</a></div> -->
                    </div>
                    <div class="tab-pane fade" id="tabs-7-2">
                      <p>Presenting the tangible and intangible Egyptian heritage within a cultural framework that allows visitors from different backgrounds to easily relate to the objects in the display while acquiring a deeper understanding of the Egyptian culture in a welcoming and exciting environment. Moreover, NMEC aims at becoming a unique cultural hub in the region mixing antiquities with other aspects of culture including music and art.</p>
                      <!-- <div class="group-md group-middle"><a class="button button-secondary button-pipaluk" href="contact-us.html">Get in Touch</a><a class="button button-black-outline button-md" href="about.html">Read More</a></div> -->
                    </div>
                    <div class="tab-pane fade" id="tabs-7-3">
                      <p>
                      <div>
                        <p>As a major New National Egyptian Institution, the NMEC will:</p>
                      <ul>
                        <li>Provide a dynamic and innovative vision of past and current Egyptian civilization.</li>
                        <li>Serve as a world-wide communication center on Egyptian civilization.</li>
                        <li>Display and preserve for future generations exceptional collections belonging to the history of humankind.</li>
                        <li>Develop close cooperation with other Egyptian and international institutions.</li>
                        <li>Promote a new kind of museum with an integrated approach to cultural heritage.</li>
                        <li>Develop national and international exhibitions programs.</li>
                        <li>Host films, concerts, and theatre-like events reflecting the Egyptian civilization.</li>
                        <li>Offer on-site facilities and services: green parks, lakeside cafés, restaurants, handicrafts centers, and bazaars.</li>
                        <li>Host a documentation and collection center for Egypt’s ‘tangible’ and ‘intangible’ heritage.</li>
                        <li>Provide access to educational and research resources through a library, study centers, online data, photographs, archives, teaching resources, and publications.</li>
                      </ul>
                    </div>
                      </p>
                      <!-- <div class="group-md group-middle"><a class="button button-black-outline button-md" href="about.php">Read More</a></div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--	Our statistics-->
      <?php require('./components/statistics.php'); ?>
      <!-- Hot tours-->
      <section class="section section-sm bg-default">
        <div class="container">
          <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Hot Hotels</span></h3>
          <div class="row row-sm row-40 row-md-50">
          <?php
        $hotelsPrice = array(
          array(
            'title' => 'Sofitel Cairo Nile El Gezirah',
            'img' => 'hotel-4.jpg',
            'description' => "On the southern tip of Gezirah Island, the hotel is a corner of paradise in central Cairo, minutes from Cairo’s business districts. Discover a haven of peace during a vacation in Egypt, and a comfortable base to rest after a successful day of business. Relax by the pool, pamper yourself in Sofitel SPA, wine and dine in our international restaurants and bars. Surrender to luxury and come for a day, a weekend, a week…or more.",
            'price' => '2,687 EGP'
          ),
          array(
            'title' => 'Fairmont Nile City',
            'img' => 'hotel-5.jpg',
            'description' => "A melting pot of history and diversity, the city of Cairo is ideal for both business and leisure. Like the city itself, Fairmont Nile City offers a delightful series of contrasts, combining advanced technology and modern design with local flavors and flair. With sweeping panoramas of the river Nile and the Pyramids in the distance, Cairo’s beauty and history are always in sight from your luxury accommodation.",
            'price' => '4,713 EGP'
          ),
          array(
            'title' => 'Grand Nile Tower',
            'img' => 'hotel-6.jpg',
            'description' => "A haven within the cosmopolitan vibrant city of Cairo.One of Cairo's most luxurious hotels,Grand Nile Tower is a family hotel directly situated on the magnificent Nile river with a prime location in central Cairo,close to many cultural and tourist 's attractions.This stunning Kid-friendly Hotel offers you the finest service and experiences,elegantly designed accommodation.",
            'price' => '1,940 EGP'
          ),
        );
        foreach($hotelsPrice as $hotelPrice){
          ?>
          <div class="col-sm-6 col-md-12 wow fadeInRight">
              <!-- Product Big-->
              <article class="product-big">
                <div class="unit flex-column flex-md-row align-items-md-stretch">
                  <div class="unit-left"><a class="product-big-figure" href="#"><img src="imgs/hotels/<?php echo $hotelPrice['img']; ?>" alt="" width="600" height="366"/></a></div>
                  <div class="unit-body">
                    <div class="product-big-body">
                      <h5 class="product-big-title"><a href="#"><?php echo $hotelPrice['title']; ?></a></h5>
                      <div class="group-sm group-middle justify-content-start">
                        <div class="product-big-rating"><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star_half"></span></div><a class="product-big-reviews" href="#">4 customer reviews</a>
                      </div>
                      <p class="product-big-text"><?php echo $hotelPrice['description']; ?></p><a class="button button-black-outline button-ujarak" href="booking-hotel.php">Book now</a>
                      <div class="product-big-price-wrap"><span class="product-big-price"><?php echo $hotelPrice['price']; ?></span></div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          <?php
        }
        ?>
          </div>
        </div>
      </section>
      <!-- Different People-->
      <?php require('./components/team.php'); ?>
      <!-- Section Subscribe-->
      <section class="section bg-default text-center offset-top-50">
        <div class="parallax-container" data-parallax-img="images/parallax-1-1920x850.jpg">
          <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-2-21">
            <div class="container">
              <h2 class="heading-2 oh font-weight-normal wow slideInDown"><span class="d-block font-weight-semi-bold">First-class Impressions</span><span class="d-block font-weight-light">are Waiting for You!</span></h2>
              <a class="button button-secondary button-pipaluk" href="#booking">Book now</a>
            </div>
          </div>
        </div>
      </section>
      <!--	Instagrram wondertour-->
      <?php require('./components/pharohs.php'); ?>      
<?php require('./layouts/footer.php'); ?>