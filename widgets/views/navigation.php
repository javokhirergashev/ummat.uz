<!-- Navigation Section -->
<nav id="mainnav" class="navbar navbar-default navbar-fixed navbar-scrollspy divinnav no-background white" data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">
    <div class="container-fluid">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#home"><img src="/frontend-files/images/logo-white.png" class="logo logo-display img-responsive" alt=""></a>
            <a class="navbar-brand" href="#home"><img src="/frontend-files/images/logo-black.png" class="logo logo-scrolled img-responsive" alt=""></a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
                <?php if (!empty($models)):?>
                    <?php foreach ($models as $model):?>
                        <li class=" scroll"><a href="<?=$model->link?>"><?=$model['name_'.Yii::$app->language]?></a></li>
                    <?php endforeach;?>
                <?php endif;?>
            </ul>
        </div>
    </div>
</nav>