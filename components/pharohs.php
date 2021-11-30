<?php

$pharoahs = array(
    array(
        'img' => 'Ahmose-Nefertari-A.jpg',
        'name' => 'Ahmose Nefertari'
    ),
    array(
      'img' => 'Amenhotep-1-1.jpg',
      'name' => 'Amenhotep I'
  ),
  array(
    'img' => 'Amenhotep-II-1.jpg',
    'name' => 'Amenhotep II'
),
array(
  'img' => 'Amenhotep-III-1.jpg',
  'name' => 'Amenhotep III'
),
array(
  'img' => 'Hatshepsut-A.jpg',
  'name' => 'Hatshepsut'
),
array(
  'img' => 'Merenptah-B.jpg',
  'name' => 'Merenptah'
),
array(
  'img' => 'Ramses-II-1-85x300.jpg',
  'name' => 'Ramses II'
),
array(
  'img' => 'Ramses-III-2.jpg',
  'name' => 'Ramses III'
),
array(
  'img' => 'Ramses-IV-1.jpg',
  'name' => 'Ramses IV'
),
array(
  'img' => 'Ramses-IX-B-2.jpg',
  'name' => 'Ramses IX'
),
array(
  'img' => 'Ramses-V-B-1-90x300.jpg',
  'name' => 'Ramses V'
),
array(
  'img' => 'Ramses-VI-1.jpg',
  'name' => 'Ramses VI'
),
array(
  'img' => 'Seqenenre-Taa-II.jpg',
  'name' => 'Seqenenre-Taa II'
),
array(
  'img' => 'Seti-I.jpg',
  'name' => 'Seti I'
),
array(
  'img' => 'Seti-II-1-1.jpg',
  'name' => 'Seti II'
),
array(
  'img' => 'Siptah-Akhenre-1.jpg',
  'name' => 'Siptah Akhenre'
),
array(
  'img' => 'Thutmose-I-B.jpg',
  'name' => 'Thutmose I'
),
array(
  'img' => 'Thutmose-II--97x300.jpg',
  'name' => 'Thutmose II'
),
array(
  'img' => 'Thutmose-III-B.jpg',
  'name' => 'Thutmose III'
),
array(
  'img' => 'Thutmose-IV-1.jpg',
  'name' => 'Thutmose IV'
),
);

?>

<section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4" id="pharoahs">
        <div class="container-fluid">
          <h6 class="gallery-title" style="margin-top:30px;background-color:black;color:white;font-size:25px;">Pharaohs</h6>
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-classic owl-dots-secondary" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-xl-items="5" data-xxl-items="6" data-stage-padding="15" data-xxl-stage-padding="0" data-margin="30" data-autoplay="true" data-nav="true" data-dots="true">
            <!-- Thumbnail Classic-->
            <?php
              foreach($pharoahs as $pharoh){
                ?>
                <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="imgs/<?php echo $pharoh['img']; ?>" alt="" style="height:250px;padding:20px;object-fit:contain;" />
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="imgs/<?php echo $pharoh['img']; ?>" data-lightgallery="item"><img src="images/gallery-image-1-270x195.jpg" alt="" width="270" height="195"/></a>
              </div>
              <h4><?php echo $pharoh['name']; ?></h4>
              <a href="pharoah.php?key=<?php echo $pharoh['name']; ?>"><button class="btn btn-primary" style="margin-top:30px;">Read more</button></a>

            </article>
                <?php
              }
            ?>
          </div>
        </div>
</section>