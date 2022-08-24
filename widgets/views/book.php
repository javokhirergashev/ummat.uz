<section  class="contact" id="contact"><!-- section id -->
    <div class="container">
        <div class="row">
            <div class="col-lg-push-6 col-lg-6"><!-- contact info -->
                <div class="section-title wow fadeInDown">
                    <h1 class="section-heading"><?=Yii::t("app", "contactinfo")?></h1>
                </div>
                <div class="contact-form wow fadeInLeft"><!-- contact form -->
                    <form action="https://html-templates.multipurposethemes.com/traveltwo/send_email.php" id="contact" name="contact" method="post">
                        <div class="form-group">
                            <input class="form-control" name="InputName" id="InputName" placeholder="<?=Yii::t("app", "name")?>" required="" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="InputName" id="InputSurname" placeholder="<?=Yii::t("app", "surname")?>" required="" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="InputEmail" id="InputEmail" placeholder="<?=Yii::t("app", "email")?>" required="" type="email">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="InputPhone" id="InputPhone" placeholder="<?=Yii::t("app", "tel")?>" required="" type="text">
                        </div>
                        <div class="form-group">
                            <select id="select" class="form-control" data-aos="fade-up">
                                <option disabled selected><?= Yii::t("app", "category1")?></option>
                                <?php if(!empty($models)):?>
                                    <?php foreach ($models as $model):?>
                                        <option><?=$model["title_".Yii::$app->language];?></option>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="InputPhone" id="InputData" placeholder="<?=Yii::t("app", "tel")?>" required="" type="datetime-local">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="InputMessage" id="InputMessage" rows="4" placeholder="<?=Yii::t("app", "message")?>" required=""></textarea>
                        </div>

                        <button name="submit" type="submit" id="submit" onclick="getValue()" class="btn btn-default fs-18"><?=Yii::t("app", "send")?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>