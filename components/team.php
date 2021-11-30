<?php 

$team = array(
    array(
        'name' => 'Ahmed Samir',
        'img' => 'samir-team.jpg'
    ),
    array(
        'name' => 'Omar El Dbeky',
        'img' => 'dbeky-team.jpg'
    ),
    array(
        'name' => 'Tasneem Hamed',
        'img' => 'tasneem-team.jpg'
    ),
    array(
        'name' => 'Saad Essam',
        'img' => 'saad-team.jpg'
    ),
    array(
        'name' => 'Ahmed Maged',
        'img' => 'maged-team.jpg'
    )
    );

?>
<section class="section section-sm">
        <div class="container">
          <h3 class="title-block find-car oh"><span class="d-inline-block wow slideInUp">Our Team</span></h3>
          <div class="row row-30 justify-content-center box-ordered">
              <?php
              foreach($team as $member){
                ?>
                <div class="col-sm-6 col-md-5 col-lg-2">
              <!-- Team Modern-->
              <article class="team-modern">
                <div class="team-modern-header"><div class="team-modern-figure"><img class="img-circles" src="imgs/team/<?php echo $member['img']; ?>" alt="" width="118" height="118"/></div>
                  <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                    <g>
                      <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                    </g>
                  </svg>
                </div>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><?php echo $member['name']; ?></h6>
                </div>
              </article>
            </div>
                <?php
              }
              ?>
          </div>
        </div>
      </section>