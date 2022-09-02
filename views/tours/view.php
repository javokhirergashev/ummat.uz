<!--Tours Section Here-->
<section class="news" id="news">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center"><!-- section title -->
                <div class="section-title">
                    <h1 class="section-heading"><?=Yii::t("app", "tours")?></h1>
                    <span class="divider"><img src="/frontend-files/images/sep-1.png" alt="Divider"></span>
                </div>
            </div>
        </div>
        <div class="row">

            <?php if (!empty($models)):?>
                <?php foreach ($models as $model):?>

                    <?php
                    $img = \app\models\StaticFunctions::getImage("tours", $model->id, $model->images);
                    ?>

                    <div class="col-md-4 col-sm-4 wow fadeInDown">
                        <article class="blog-post-container clearfix">
                            <div class="post-thumbnail">
                                <img src="<?=$img?>" class="img-responsive " alt="Image">
                                <div class="post-date">
                                    <span class="dart-fs-26 dart-fw-500"><?=$model->period?></span>
                                    <!--                            <span class="dart-fs-14">AUG</span>-->
                                </div>
                            </div><!-- /.post-thumbnail -->

                            <div class="blog-content">
                                <div class="dart-header">
                                    <h4 class="dart-title"><a href="blog-single.html"><?=$model["title_".Yii::$app->language]?></a></h4>
                                    <div class="dart-meta">
                                        <ul class="list-unstyled">
                                            <li><span class="author"><?=$model->price?></a></span></li>
                                            <!--                                    <li><span><a href="#">IN WEB DESIGN</a></span></li>-->
                                        </ul>
                                    </div><!-- /.dart-meta -->
                                </div><!-- /.dart-header -->

                                <div class="dart-content">
                                    <p><?=$model["description_".Yii::$app->language]?></p>
                                </div><!-- /.dart-content -->

                                <div class="dart-footer light-gray">
                                    <ul class="dart-meta clearfix list-unstyled">
                                        <li><a class="pull-left" href="#"><i class="fa fa-heart"></i> &nbsp; 30</a></li>
                                        <li><a class="pull-left" href="#"><i class="fa fa-comment"></i> &nbsp; 30</a></li>
                                        <li><a class="pull-right btn-more" href="<?=\yii\helpers\Url::to(["toursview/view", "id"=>$model->id])?>"> <i class="fa fa-long-arrow-right"> <?=Yii::t("app", "more")?> </i></a></li>
                                    </ul>
                                </div><!-- /.dart-footer -->
                            </div><!-- /.blog-content -->
                        </article>
                    </div>
                <?php endforeach;?>
            <?php endif;?>
        </div><!-- /.row -->
    </div>
</section>