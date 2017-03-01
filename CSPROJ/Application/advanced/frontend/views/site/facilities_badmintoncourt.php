<?php

/* @var $this yii\web\View */

$this->title = 'PNP Camp Crame Sports Center';
?>



<!-- Styles -->
<style>
.btn {
    display: inline-block;
    padding: 10px 15px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
</style>



    <!-- Half Page Image Background Carousel Header -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

        <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
            <div class="fill">
                <img class ="slideshow" src="<?= yii\helpers\Url::to('@web/images/badmintoncourt.jpg') ?>" />
            </div>
        </div>
        <div class="item">
                <!-- Set the second background image using inline CSS below. -->
            <div class="fill">
                <img class ="slideshow" src="<?= yii\helpers\Url::to('@web/images/badmintoncourt1.jpg') ?>" />
             </div>
        </div>
        <div class="item">
                <!-- Set the third background image using inline CSS below. -->
            <div class="fill">
                <img class ="slideshow" src="<?= yii\helpers\Url::to('@web/images/badmintoncourt2.jpg') ?>" />

            </div>
        </div>
        <div class="item">
                <!-- Set the second background image using inline CSS below. -->
            <div class="fill">
                <img class ="slideshow" src="<?= yii\helpers\Url::to('@web/images/badmintoncourt3.jpg') ?>" />

            </div>
        </div>
        <div class="item">
                <!-- Set the third background image using inline CSS below. -->
            <div class="fill">
                <img class ="slideshow" src="<?= yii\helpers\Url::to('@web/images/badmintoncourt4.jpg') ?>" />

            </div>
        </div>
        <div class="item">
                <!-- Set the third background image using inline CSS below. -->
            <div class="fill">
                <img class ="slideshow" src="<?= yii\helpers\Url::to('@web/images/badmintoncourt5.jpg') ?>" />

            </div>
        </div>
    </div>

        <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>

    <center>
        <div class="row" >
            <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="about-div">
                    <img src="<?= Yii::$app->request->baseUrl ?>/images/time.jpg" width="90" height="90"></i>
                    <h3 >Time</h3>
                <hr />
                <h4 >
                    6:00 am to 6:00 pm weekdays<br>
                    8:00 am to 12:00 pm weekends
                 </h4 >           
            </div>
        </div>
        <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
            <div class="about-div">
                <img src="<?= Yii::$app->request->baseUrl ?>/images/badmintonicon.jpg" width="90" height="90"></i>
                   <h3 >Type</h3>
                <hr />
                <h4 >
                    Indoor
                 </h4 >
            </div>
        </div>
        <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
            <div class="about-div">
                <img src="<?= Yii::$app->request->baseUrl ?>/images/price.png" width="90" height="90"></i>
                <h3 >Rate</h3>
                <hr />
                <h4 >
                    P 2,500.00 / PER COURT           
                </h4 >
            </div>
    </div>
</div>
    <div data-scroll-reveal="enter from the bottom after 0.7s">
        <center><a href="http://localhost/advanced/frontend/web/index.php?r=site%2Flogin" class="btn btn-info btn-set"  >RESERVE NOW</a></center>
    </div>
</div>














