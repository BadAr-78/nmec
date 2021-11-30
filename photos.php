<?php
require('./layouts/header.php');
require('./layouts/nav.php');

        $photos = array(
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
        '11.jpg',
        '12.jpg',
        '13.jpg',
        );
        ?>
        <div class="container">
            <div class="row">

            <h3 style="text-align:center;margin-top:15px;margin-bottom:10px;" class="col-md-12">Photos</h3>
        <?php
        foreach($photos as $photo){
          ?>
          <div class="col-md-4" style="margin-bottom:10px;">
                <img style="height:250px;width:100%;" src="imgs/slider/<?php echo $photo; ?>" style>
          </div>
<?php
        }
        ?>
        </div>
        </div>
<div style="display:flex;justify-content:center;align-items:center;">
<a href="index.php"><button class="btn btn-primary" style="margin-top:20px;margin-bottom:20px;width:200px;font-size:25px;">Go Home</button></a>

</div>

<?php
require('./layouts/footer.php');
?>