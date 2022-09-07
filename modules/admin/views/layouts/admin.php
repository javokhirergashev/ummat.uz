<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AdminAsset;

use yii\bootstrap4\Html;


AdminAsset::register($this);
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
<body class="bg-theme bg-theme11">
<?php $this->beginBody() ?>

<div class="wrapper">

    <?php echo app\modules\admin\widgets\Sidebar::widget()?>
    <?php echo app\modules\admin\widgets\Header::widget()?>


    <div class="page-wrapper">
        <div class="page-content">
            <?= $content ?>
        </div>
    </div>
    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
</div>

<?php $this->endBody() ?>
<script>
    $('#fancy-file-upload').FancyFileUpload({
        params: {
            action: 'fileuploader'
        },
        maxfilesize: 1000000
    });
</script>
<script>
    $(function() {
        $(".knob").knob();
    });
</script>
</body>
</html>
<?php $this->endPage() ?>

