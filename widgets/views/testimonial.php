<!-- Testimonial Section -->
<section class="testimonials" id="testimonial"><!-- section id -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center"><!-- section title -->
                <div class="section-title">
                    <h1 class="section-heading"><?=Yii::t("app", "testmon")?></h1>
                    <span class="divider"><img src="/frontend-files/images/sep-1.png" alt="Divider"></span>
                </div>
            </div>
            <div class="carousel slide text-center" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">


                <!-- Carousel items -->
                <div class="container">
                    <?php if (!empty($models)):?>
                    <?php foreach ($models as $model):?>

                    <?php
                    $img = \app\models\StaticFunctions::getImage("testimonials", $model->id, $model->images);
                    ?>
                    <div class="carousel-inner">

                        <div class="item active">
                            <p><?=$model["comment_".Yii::$app->language]?></p>
                            <div class="profile-circle"><img src="<?=$img?>" alt="avtar"></div>
                            <p class="person"><?=$model->name?></p>
                            <p class="per-den"><?=$model->email?></p>
                        </div>

<!--                        <div class="item">-->
<!--                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.<br>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of sprin</p>-->
<!--                            <div class="profile-circle"><img src="frontend-files/images/avtar-1.png" alt="avtar"></div>-->
<!--                            <p class="person">Jone deo</p>-->
<!--                            <p class="per-den"> Traveler</p>-->
<!--                        </div>-->
                    </div>
                        <?php endforeach;?>
                    <?php endif;?>
                </div>

            </div>
        </div>
    </div>
</section>