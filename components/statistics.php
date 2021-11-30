<?php 

$statistics = array(
    array(
        'title' => 'Visitors per day',
        'number' => 5000
    ),
    array(
        'title' => 'Mummies',
        'number' => 20
    ),
    array(
        'title' => 'Near Hotels',
        'number' => 30
    ),
)

?>
<section class="section section-sm">
        <div class="container">
          <h3>Our Statistics</h3>
          <div class="row row-30">
            <?php
              foreach($statistics as $statistic){
                ?>
                <div class="col-sm-6 col-lg-4">
              <article class="box-icon-classic">
                <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon fl-bigmug-line-equalization3"></div>
                  </div>
                  <div class="unit-body">
                    <h3 class="box-icon-classic-title"><?php echo $statistic['number']; ?></h3>
                    <h5><?php echo $statistic['title']; ?></h5>
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