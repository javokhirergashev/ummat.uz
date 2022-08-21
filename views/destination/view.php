<!-- Team Start -->
<section id="team-area" class="team-area-two">
    <div class="container">
        <div id="category_info">
            <h1><?=Yii::t("app", "category_info")?></h1>
            <p><?=Yii::t("app", "category_info2")?></p>
        </div>
        <div class="row">
            <?php if (!empty($models)): ?>
                <?php foreach ($models as $model): ?>
                    <?php
                    $image = \app\models\StaticFunctions::getImage('tours_category',$model->id,$model->images);
                    if (is_file($image)){
                        $image = "images/no_photo.png";
                    }
                    ?>
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <div class="single-team">
                            <img src="<?=$image?>" alt="Team">
                            <div class="team-overlay">
                                <h4><a href="<?=\yii\helpers\Url::to(['category/view', 'id'=>$model->id])?>"><?=$model['name_'.Yii::$app->language];?></a></h4>
                                <!--<span>Web developer</span>-->
                                <!--<ul>-->
                                <!--    <li><a href="<?=Yii::t('app','more')?>"><?=Yii::t('app','more')?></a></li>-->
                                <!--    <li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>-->
                                <!--    <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>-->
                                <!--</ul>-->
                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

        </div>
    </div>
</section>
<!-- Team End -->
