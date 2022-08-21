<?php

use app\models\Contacts;

?>
<!-- Testimonials -->
<section class="testimonials">
    <div class="background bg-img bg-fixed section-padding pb-0" data-background="frontend-files/img/slider/15.jpg" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <!-- Call Now  -->
                <div class="col-md-5 mb-30 mt-30">
                    <p><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></p>
                    <h5><?=Yii::t("app", "testinfo")?></h5>
                    <div class="phone-call mb-10">
                        <div class="icon color-1"><span class="flaticon-phone-call"></span></div>
                        <div class="text">
                            <?php
                                $contact = Contacts::find()->select(["first_phone"])->where(["id" => 1])->one();
                            ?>
                            <p class="color-1"><?=Yii::t("app", "testcall")?></p> <a class="color-1" href="#"><?=$contact->first_phone?></a>
                        </div>
                    </div>
                    <p><i class="ti-check"></i><small><?=Yii::t("app", "testcall1")?></small></p>
                </div>
                <!-- Booking From -->
                <div class="col-md-5 offset-md-2">
                    <div class="testimonials-box">
                        <div class="head-box">
                            <h6><?=Yii::t("app", "testmon")?></h6>
                            <h4><?=Yii::t("app", "test_info")?></h4>
                        </div>
                        <div class="owl-carousel owl-theme">
                            <?php if (!empty($models)) :?>
                            <?php foreach ($models as $model) : ?>
                                <?php
                                    $image = \app\models\StaticFunctions::getImage('testimonials',$model->id,$model->images);
                                ?>
                            <div class="item">
                                <p><?=$model["comment_".Yii::$app->language]?></p>
                                <div class="info">
                                    <div class="author-img"> <img src="<?=$image?>" alt=""> </div>
                                    <div class="cont">
                                        <div class="rating"> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> </div>
                                        <h6><?=$model->name?></h6> <span><?=$model->email?></span>
                                    </div>
                                </div>
                            </div>
                                <?php endforeach;?>
                            <?php endif; ?>
<!--                            <div class="item">-->
<!--                                <p>Travel dapibus asue metus the nec feusiate era the miss hendreri the vemante the lemon insan toleon nectan feugiat erat hendrerit necuis vesaire tours inilla neca ine the sene miss habitan.</p>-->
<!--                                <div class="info">-->
<!--                                    <div class="author-img"> <img src="frontend-files/img/team/05.png" alt=""> </div>-->
<!--                                    <div class="cont">-->
<!--                                        <div class="rating"> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> </div>-->
<!--                                        <h6>Emily Brown</h6> <span>Guest review</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                <p>Travel dapibus asue metus the nec feusiate era the miss hendreri the vemante the lemon insan toleon nectan feugiat erat hendrerit necuis vesaire tours inilla neca ine the sene miss habitan.</p>-->
<!--                                <div class="info">-->
<!--                                    <div class="author-img"> <img src="frontend-files/img/team/06.png" alt=""> </div>-->
<!--                                    <div class="cont">-->
<!--                                        <div class="rating"> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> </div>-->
<!--                                        <h6>Olivia Martin</h6> <span>Guest review</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>