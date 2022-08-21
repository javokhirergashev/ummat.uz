<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\LoginAsset;

use yii\bootstrap4\Html;


LoginAsset::register($this);
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
<body class="bg-theme bg-theme9">
    <?php $this->beginBody() ?>
        <div class="wrapper">
            <div class="page-wrapper" style="margin: auto auto!important;">
                <div class="page-content">
                    <div class="row">
                        <div class="col-xl-6 mx-auto">

                            <div class="card border-top border-0 border-4 border-white" style="margin-bottom: 0rem!important;">
                                <div class="card-body p-5">
                                    <div class="card-title  align-items-center">
                                        <?= $content ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

