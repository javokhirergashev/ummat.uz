<section id="portfolio-area" class="portfolio-area-two" data-scroll-index="2">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-6">
                <div class="section-title section-title-two">
                    <h2><?=Yii::t("app", "package")?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 portfolio-carousel owl-carousel">
                <?php if (!empty($models)): ?>
                    <?php foreach ($models as $model): ?>
                        <?php
                        $image = \app\models\StaticFunctions::getImage('tours',$model->id,$model->images);

                        if (is_file($image)){
                            $image = "assets/images/no_photo.png";
                        }
                        ?>

                        <div class="single-portfolio">
                            <div class="portfolio-img">
                                <img src="<?=$image?>" alt="Portfolio">
                                <a href="<?=$image?>">
                                    <i class="ion-android-search"></i>
                                </a>
                            </div>
                            <div class="overlay-portfolio-text">
                                <h4><?=$model['title_'.Yii::$app->language];?></h4>
                                <p><?=$model['description_'.Yii::$app->language];?></p>
                                <a href="<?=\yii\helpers\Url::to(["toursview/view", "id"=>$model->id])?>"><?=Yii::t("app", "more")?></a>
                            </div>
                        </div>
                    
                    <?php endforeach;?>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>

