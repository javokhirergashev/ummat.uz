<section class="package" id="package">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h1 class="section-heading white"><?=Yii::t("app", "choosedes")?></h1>
                    <span class="divider"><img src="frontend-files/images/sep-1.png" alt="Divider"></span>
                </div>
            </div>
        <?php if (!empty($models)):?>
            <?php foreach ($models as $model):?>
            <?php
                    $img = \app\models\StaticFunctions::getImage("tours_category", $model->id, $model->images);
            ?>
                <div class="col-lg-4 col-sm-4 wow fadeInDown">
                    <div class="package-box pack-two">
                        <div class="text-center">
                            <h2 class="package-name text-uppercase"><?=$model["name_".Yii::$app->language]?></h2>
                            <h4 class="package-price">From $499</h4>
                           <div class="boximg">
                               <img src="<?=$img?>" alt="">
                           </div>
                            <a href="<?=\yii\helpers\Url::to(["/category/view", "id"=>$model->id])?>" class="custom-btn contact-us"><?=Yii::t("app", "more")?></a>
                        </div>
                    </div>
                </div>
        <?php endforeach;?>
    <?php endif;?>
        </div>
    </div>
</section>