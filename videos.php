<?php
require('./layouts/header.php');
require('./layouts/nav.php');

        $videos = array(
        'video.mp4',
        'video2.mp4',
        'video3.mp4',
        );
        ?>
        <div class="container">
            <div class="row">

            <h3 style="text-align:center;margin-top:15px;margin-bottom:10px;" class="col-md-12">Videos</h3>
        <?php
        foreach($videos as $video){
          ?>
          <div class="col-md-4" style="margin-bottom:10px;">
          <iframe src="imgs/slider/<?php echo $video; ?>" style="width:100%;height:280px;border:none;"></iframe>
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