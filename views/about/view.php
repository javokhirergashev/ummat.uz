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
                            <input class="form-control" name="InputName1" id="InputName1" placeholder="<?=Yii::t("app", "name")?>" required="" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="InputName1" id="InputSurname1" placeholder="<?=Yii::t("app", "surname")?>" required="" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="InputEmail1" id="InputEmail1" placeholder="<?=Yii::t("app", "email")?>" required="" type="email">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="InputPhone1" id="InputPhone1" placeholder="<?=Yii::t("app", "tel")?>" required="" type="text">
                        </div>


                        <div class="form-group">
                            <textarea class="form-control" name="InputMessage" id="InputMessage1" rows="4" placeholder="<?=Yii::t("app", "message")?>" required=""></textarea>
                        </div>

                        <button name="submit" type="submit" id="submit1" onclick="getValue()" class="btn btn-default fs-18"><?=Yii::t("app", "send")?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>


