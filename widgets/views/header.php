<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <div class="logo-wrapper navbar-brand valign">
            <a href="index2.html">
                <div class="logo"> <img src="/frontend-files/img/logo-light.png" class="logo-img" alt=""> </div>
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon-bar"><i class="ti-line-double"></i></span> </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <?php if (!empty($models)) :?>
                    <?php foreach ($models as $model): ?>
                        <li class="nav-item"><a class="nav-link" href="<?=$model->link?>"><?=$model['name_'.Yii::$app->language];?></a></li>
                    <?php endforeach; ?>
                <?php endif; ?>
                <li class="nav-item dropdown" style="margin-left: 50px"> <span class="nav-link"> <?=Yii::$app->language?></span>
                    <ul class="dropdown-menu last">
                        <?php
                        foreach (Yii::$app->params['language'] as $key => $value){
                            echo "<li class='dropdown-item'><a href='".\yii\helpers\Url::to(['site/ozgar',"til"=>$key])."'>".$value."</a></li>";
                        }
                        ?>

                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- Slider -->
<header class="header slider-fade">
    <div class="owl-carousel owl-theme">
        <div class="text-center item bg-img" data-overlay-dark="5" data-background="/frontend-files/img/slider/1.jpg">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <h4><?=Yii::t("app", "letsgo")?></h4>
                            <h1><?=Yii::t("app", "world1")?> <span><?=Yii::t("app", "travel1")?></span> </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center item bg-img" data-overlay-dark="5" data-background="/frontend-files/img/slider/2.jpg">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <h4><?=Yii::t("app", "letsgo")?></h4>
                            <h1><?=Yii::t("app", "roma")?> <span><?=Yii::t("app", "travel")?></span> </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center item bg-img" data-overlay-dark="5" data-background="/frontend-files/img/slider/3.jpg">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <h4><?=Yii::t("app", "letsgo")?></h4>
                            <h1><span><?=Yii::t("app", "discover")?> </span><?=Yii::t("app", "world")?> </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Tour Search -->


<!-- Tour Search -->
<div class="booking-wrapper">
    <div class="container">
        <div class="tour-inner clearfix form-inline justify-content-center">
            <form action="https://duruthemes.com/demo/html/travol/tours.html" class="form1 clearfix">
                <div class="col1 c1">
                    <div class="input2_wrapper">
                        <label>Where to?</label>
                        <div class="input2_inner">
                            <input type="text" class="form-control input" placeholder="Where to?">
                        </div>
                    </div>
                </div>
                <div class="col1 c2">
                    <div class="select1_wrapper">
                        <label>Destinations</label>
                        <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                                <option value="0">Destinations</option>
                                <option value="1">Greece</option>
                                <option value="2">London</option>
                                <option value="3">Maldives</option>
                                <option value="4">Paris</option>
                                <option value="5">Rome</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col1 c4">
                    <div class="select1_wrapper">
                        <label>Duration</label>
                        <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                                <option value="0">Duration</option>
                                <option value="1">1 Day Tour</option>
                                <option value="2">2-4 Days Tour</option>
                                <option value="3">5-7 Days Tour</option>
                                <option value="4">7+ Days Tour</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col1 c5">
                    <button type="submit" class="btn-form1-submit"><i class="ti-search"></i> Find Now</button>
                </div>
            </form>
        </div>
    </div>
</div>