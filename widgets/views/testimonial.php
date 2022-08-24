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



            <h1>Our amazing people</h1>

            <div class="containerslide">
                <div class="faders">
                    <div class="left"></div>
                    <div class="right"></div>
                </div>

                <div class="items">
                    <?php if (!empty($models)):?>
                   <?php foreach ($models as $model):?>

                   <?php
                        $img = \app\models\StaticFunctions::getImage("testimonials", $model->id, $model->images);
                    ?>
                    <div class="entry">
                        <p class="name"><?=$model->name?><br><?=$model->email?></p>
                        <img src="<?=$img?>" alt="Smiling chick">
                        <p class="quote"><?=$model["comment_".Yii::$app->language]?></p>
                    </div>

                    <?php endforeach;?>
                    <?php endif;?>
<!--                    <div class="entry">-->
<!--                        <p class="name">John Doe</p>-->
<!--                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/2621168/person.png" alt="Smiling chick">-->
<!--                        <p class="quote">"Man, I think this app freaking rocks and stuff. Dude."</p>-->
<!--                    </div>-->
<!--                    <div class="entry">-->
<!--                        <p class="name">John Doe</p>-->
<!--                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/2621168/person.png" alt="Smiling chick">-->
<!--                        <p class="quote">"Man, I think this app freaking rocks and stuff. Dude."</p>-->
<!--                    </div>-->
<!--                    <div class="entry">-->
<!--                        <p class="name">John Doe</p>-->
<!--                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/2621168/person.png" alt="Smiling chick">-->
<!--                        <p class="quote">"Man, I think this app freaking rocks and stuff. Dude."</p>-->
<!--                    </div>-->
<!--                    <div class="entry">-->
<!--                        <p class="name">John Doe</p>-->
<!--                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/2621168/person.png" alt="Smiling chick">-->
<!--                        <p class="quote">"Man, I think this app freaking rocks and stuff. Dude."</p>-->
<!--                    </div>-->
<!--                    <div class="entry">-->
<!--                        <p class="name">John Doe</p>-->
<!--                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/2621168/person.png" alt="Smiling chick">-->
<!--                        <p class="quote">"Man, I think this app freaking rocks and stuff. Dude."</p>-->
<!--                    </div>-->
<!--                    <div class="entry">-->
<!--                        <p class="name">John Doe</p>-->
<!--                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/2621168/person.png" alt="Smiling chick">-->
<!--                        <p class="quote">"Man, I think this app freaking rocks and stuff. Dude."</p>-->
<!--                    </div>-->
<!--                    <div class="entry">-->
<!--                        <p class="name">John Doe</p>-->
<!--                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/2621168/person.png" alt="Smiling chick">-->
<!--                        <p class="quote">"Man, I think this app freaking rocks and stuff. Dude."</p>-->
<!--                    </div>-->
                </div>
            </div>

















            <!--            <div class="col-xl-12 carousel slide text-center" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">-->
<!---->
<!---->
<!--                <div class="container">-->
<!---->
<!--                    <div class="carousel-inner">-->
<!--                        --><?php //if (!empty($models)):?>
<!--                        --><?php //foreach ($models as $model):?>
<!---->
<!--                        --><?php
//                        $img = \app\models\StaticFunctions::getImage("testimonials", $model->id, $model->images);
//                        ?>
<!--                        <div class="item active">-->
<!--                            <p>--><?//=$model["comment_".Yii::$app->language]?><!--</p>-->
<!--                            <div class="profile-circle"><img src="--><?//=$img?><!--" alt="avtar"></div>-->
<!--                            <p class="person">--><?//=$model->name?><!--</p>-->
<!--                            <p class="per-den">--><?//=$model->email?><!--</p>-->
<!--                        </div>-->
<!---->
<!---->
<!--                            --><?php //endforeach;?>
<!--                        --><?php //endif;?>
<!--                    </div>-->
<!---->
<!--                </div>-->
<!---->
<!--            </div>-->
        </div>
    </div>
</section>