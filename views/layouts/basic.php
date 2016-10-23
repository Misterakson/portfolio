
<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;


/*
 * @var $content string
 * @var $this \yii\web\view
 */
AppAsset::register($this);
$this->beginPage();

?>

<!doctype html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->language ?>">
    <?php $this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1']) ?>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=Yii::$app->name ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="navbar navbar-default navbar-fixed-top" id="nav" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><span id="menu"><i class="fa fa-bars" aria-hidden="true"></i> MENU</span></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

<div id="openModal" class="modalDialog">

    <div class="container">
        <p><a href="index.html">HOME</a></p>
        <p><a href="about.html">ABOUT</a></p>
        <p><a href="#works">WORKS</a></p>
<!--        <p><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></p>-->

    </div>


</div>


<?= $content ?>


<div id="footerwrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-4">
                <p><b>WEB DEVELOPER</b></p>
            </div>

            <div class="col-lg-4">
                <p>Living in Kiev.</p>
            </div>
            <div class="col-lg-4">
                <p>merenkovkonst@gmail.com</p>
            </div>
        </div>
    </div>
</div>
<?php $this->endBody(); ?>
</body>
</html>
<?php
$this->endPage();
?>