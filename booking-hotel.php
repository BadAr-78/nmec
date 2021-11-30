<?php ob_start();
session_start(); ?>
<?php require('./layouts/header.php'); ?>
<?php require('./layouts/nav.php'); ?>

<br>

<!-- Contact Form-->
 <section class="section section-sm section-last bg-default text-left">
        <div class="container">
          <article class="title-classic">
            <div class="title-classic-title">
              <h3>Book a hotel</h3>
            </div>
          </article>
          <br>
          <form method="post" action="bookingform-hotel.php">
            <div class="row row-14 gutters-14">
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-your-name-2" type="text" name="name" data-constraints="@Required">
                  <label class="form-label" for="contact-your-name-2">Your Name</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-email-2" type="email" name="email" data-constraints="@Email @Required">
                  <label class="form-label" for="contact-email-2">E-mail</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-phone-2" type="text" name="phone" data-constraints="@Numeric">
                  <label class="form-label" for="contact-phone-2">Phone</label>
                </div>
              </div>
              <?php 
              $hotels = array(
                array(
                  'title' => 'Sofitel Cairo Nile El Gezirah',
                  'price' => '2,687 EGP'
                ),
                array(
                  'title' => 'Fairmont Nile City',
                  'price' => '4,713 EGP'
                ),
                array(
                  'title' => 'Grand Nile Tower',
                  'price' => '1,940 EGP'
                ),
                array(
                    'title' => 'InterContinental Cairo Semiramis',
                    'price' => '1500 EGP'
                  ),
                  array(
                    'title' => 'Kempinski Nile Hotel Garden City Cairo',
                    'price' => '1750 EGP'
                  ),
                  array(
                    'title' => 'Four Seasons Hotel Cairo at the First Residence',
                    'price' => '2350 EGP'
                  ),
              );
              ?>
              <div class="col-12">
                <select name="hotel" class="form-input">
                    <?php 
                    
                    foreach($hotels as $hotel){
                        ?>
                        <option value="<?php echo $hotel['title']; ?>"><?php echo $hotel['title'] . " " . "( " . $hotel['price'] . " )"; ?></option>
                        <?php
                    }

                    ?>
                </select>
              </div>

              <?php 
              
                if(isset($_SESSION['message'])){
                    ?>
                    <div style="width:100%;background-color:green;color:white;height:50px;padding:5px;font-weight:bold;display:flex;justify-content:center;align-items:center;border-radius:5px;"><?php echo $_SESSION['message']; ?></div>
                    <?php
                    session_destroy();
                }

              ?>
            </div>
            <button class="button button-primary button-pipaluk" name="submit" type="submit">Send Message</button>
          </form>
        </div>
      </section>

      
     
<?php require('./layouts/footer.php'); ?>