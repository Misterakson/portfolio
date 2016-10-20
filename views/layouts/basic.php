
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

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">INSTANT</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="#works">Works</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>



<?= $content ?>



<div id="footerwrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-4">
                <p><b>WEB DESIGNER, DEVELOPER & GAME ADDICT</b></p>
            </div>

            <div class="col-lg-4">
                <p>Living in the amazing London.</p>
            </div>
            <div class="col-lg-4">
                <p>hello@instant.com</p>
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