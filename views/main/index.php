<?php
use yii\helpers\Url;
?>

<div id="headerwrap">

    <div class="container">
<!--        <h1 style="z-index: 15000; color: #353535" class="pull-left" id="48h">48 часов</h1>-->

<!--        <article class="clock">-->
<!--            <div class="hours-container">-->
<!--                <div class="hours"></div>-->
<!--            </div>-->
<!--            <div class="minutes-container">-->
<!--                <div class="minutes"></div>-->
<!--            </div>-->
<!--            <div class="seconds-container">-->
<!--                <div class="seconds"></div>-->
<!--            </div>-->

<!--        </article>-->
        <div class="row" style="display: none">
            <div class="col-lg-6 col-lg-offset-3">
                <h1 style="opacity: 0.6">MERENKOV'S</h1>
                <h2>PORTFOLIO</h2>
            </div>
        </div>
    </div> <!-- /container -->
</div><! --/headerwrap -->
<section id="works">
<div class="container">
    <div class="row centered mt mb">
        <h1 id="projects_title">PROJECTS</h1>
        <div class="col-lg-6 col-md-6 col-sm-6 gallery">
            <a href="work.html"><img src="<?=Url::to('@web/img/portfolio/promopark.jpg') ?>" class="img-responsive"></a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 gallery">
            <a href="work.html"><img src="<?=Url::to('@web/img/portfolio/klimat.jpg') ?>" class="img-responsive"></a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 gallery">
            <a href="work.html"><img src="<?=Url::to('@web/img/portfolio/lucky-market.jpg') ?>" class="img-responsive"></a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 gallery">
            <a href="work.html"><img src="<?=Url::to('@web/img/portfolio/kazan.jpg') ?>" class="img-responsive"></a>
        </div>
    </div><! --/row -->
</div><! --/container -->
</section>

<div id="social">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-2">
                <a href="#"><i class="fa fa-dribbble"></i></a>
            </div>
            <div class="col-lg-2">
                <a href="#"><i class="fa fa-facebook"></i></a>
            </div>
            <div class="col-lg-2">
                <a href="#"><i class="fa fa-twitter"></i></a>
            </div>
            <div class="col-lg-2">
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
            <div class="col-lg-2">
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
            <div class="col-lg-2">
                <a href="#"><i class="fa fa-tumblr"></i></a>
            </div>

        </div><! --/row -->
    </div><! --/container -->
</div><! --/social -->
