<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="top">
    <?php $this->beginBody() ?>

        <?= \app\widgets\Navigation::widget()?>
        <?= \app\widgets\Slider::widget()?>
        <?= $content ?>
        <?=\app\widgets\Footer::widget()?>
    <?php $this->endBody() ?>
    <script type="text/javascript">

        var slider = new MasterSlider();

        slider.control('bullets');

        slider.setup('masterslider' , {
            width:1024,
            height:768,
            space:5,
            view:'fade',
            layout:'fullscreen',
            speed:20,
            overPause:false,
            autoplay:true
        });

    </script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-76890900-3', 'auto');
        ga('send', 'pageview');

    </script>

</body>
</html>
<?php $this->endPage() ?>
