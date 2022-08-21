<!-- Footer -->
<footer class="footer clearfix">
    <div class="container">
        <!-- First footer -->
        <div class="first-footer">
            <div class="row">
                <div class="col-md-12">
                    <div class="links dark footer-contact-links">
                        <div class="footer-contact-links-wrapper">
                            <div class="footer-contact-link-wrapper">
                                <div class="image-wrapper footer-contact-link-icon">
                                    <div class="icon-footer"> <i class="flaticon-phone-call"></i> </div>
                                </div>
                                <div class="footer-contact-link-content">
                                    <h6><?=Yii::t("app", "callus")?></h6>
                                    <?php if (!empty($models)) :?>
                                        <?php foreach ($models as $model): ?>
                                            <p><?=$model->first_phone?></p>
                                        <?php endforeach; ?>
                                    <?php endif; ?>

                                </div>
                            </div>
                            <div class="footer-contact-links-divider"></div>
                            <div class="footer-contact-link-wrapper">
                                <div class="image-wrapper footer-contact-link-icon">
                                    <div class="icon-footer"> <i class="flaticon-message"></i> </div>
                                </div>
                                <div class="footer-contact-link-content">
                                    <h6><?=Yii::t("app", "writeus")?></h6>
                                    <?php if (!empty($models)) :?>
                                        <?php foreach ($models as $model): ?>
                                            <p><?=$model->email?></p>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="footer-contact-links-divider"></div>
                            <div class="footer-contact-link-wrapper">
                                <div class="image-wrapper footer-contact-link-icon">
                                    <div class="icon-footer"> <i class="flaticon-placeholder"></i> </div>
                                </div>
                                <div class="footer-contact-link-content">
                                    <h6><?=Yii::t("app", "location")?></h6>
                                    <?php if (!empty($models)) :?>
                                        <?php foreach ($models as $model): ?>
                                            <p><?=$model->email?></p>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Second footer -->
        <div class="second-footer">
            <div class="row">
                <!-- about & social icons -->
                <div class="col-md-4 widget-area">
                    <div class="widget clearfix">
                        <div class="footer-logo"> <img class="img-fluid" src="frontend-files/img/logo-light.png" alt=""> </div>
                        <div class="widget-text">
                            <p><?=Yii::t("app", "infolinks")?></p>
                            <div class="social-icons">
                                <ul class="list-inline">
                                    <?php if (!empty($models)): ?>
                                    <?php foreach ($models as $model): ?>
                                            <li><a href="<?=$model->instagram_link?>"><i class="ti-instagram"></i></a></li>
                                            <li><a href="<?=$model->tweetter_link?>"><i class="ti-twitter"></i></a></li>
                                            <li><a href="<?=$model->facebook_link?>"><i class="ti-facebook"></i></a></li>
                                            <li><a href="<?=$model->telegram_link?>"><i class="ti-youtube"></i></a></li>
                                        <?php endforeach;?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- quick links -->
                <div class="col-md-3 offset-md-1 widget-area">
                    <div class="widget clearfix usful-links">
                        <h3 class="widget-title"><?=Yii::t("app", "menulinks")?></h3>
                        <ul>
                            <?php if (!empty($links)) :?>
                            <?php foreach ($links as $link): ?>
                                    <li><a href="<?=$links->link?>"><?=$link['name_'.Yii::$app->language];?></a></li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <!-- subscribe -->
                <div class="col-md-4 widget-area">
                    <div class="widget clearfix">
                        <h3 class="widget-title"><?=Yii::t("app", "subscribe")?></h3>
                        <p><?=Yii::t("app", "subsinfo")?></p>
                        <div class="widget-newsletter">
                            <form action="#">
                                <input type="email" placeholder="<?=Yii::t("app", "email")?>" required>
                                <button type="submit"><?=Yii::t("app", "send")?></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom footer -->
        <div class="bottom-footer-text">
            <div class="row copyright">
                <div class="col-md-12">
                    <p class="mb-0">©2022 <a href="#">WEBSPACE</a>. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>