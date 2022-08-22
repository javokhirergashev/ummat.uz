<!--Tours Section Here-->
<section class="news" id="news">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center"><!-- section title -->
                <div class="section-title">
                    <h1 class="section-heading">Latest Blog</h1>
                    <span class="divider"><img src="frontend-files/images/sep-1.png" alt="Divider"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if (!empty($models)):?>
                <?php foreach ($models as $model):?>
                    <?php
                        $image = \app\models\StaticFunctions::getImage('tours',$model->id,$model->images);
                    ?>
                    <div class="col-md-4 col-sm-4 wow fadeInLeft">
                <article class="blog-post-container clearfix">
                    <div class="post-thumbnail">
                        <img src="<?=$image?>" class="img-responsive " alt="Image">

                    </div><!-- /.post-thumbnail -->

                    <div class="blog-content">
                        <div class="dart-header">
                            <h4 class="dart-title"><a href="blog-single.html"><?=$model['title_'.Yii::$app->language];?></a></h4>
                            <div class="dart-meta">
                                <ul class="list-unstyled">
                                    <li><span class="author"><a href="#"><?=$model->price?></a></span></li>
                                    <li><span><a href="#"><?=$model->price?></a></span></li>
                                </ul>
                            </div><!-- /.dart-meta -->
                        </div><!-- /.dart-header -->

                        <div class="dart-content">
                            <p><?=$model['description_'.Yii::$app->language];?></p>
                        </div><!-- /.dart-content -->

                        <div class="dart-footer light-gray">
                            <ul class="dart-meta clearfix list-unstyled">
                                <li><a class="pull-right btn-more" href="#"> <i class="fa fa-long-arrow-right"> More </i></a></li>
                            </ul>
                        </div><!-- /.dart-footer -->
                    </div><!-- /.blog-content -->
                </article>
            </div>
                <?php endforeach;?>
            <?endif;?>
        </div><!-- /.row -->
    </div>
</section>