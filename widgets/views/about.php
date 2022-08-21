<!-- About -->
<section class="about cover section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                <div class="section-subtitle"><?=Yii::t("app", "best")?></div>
                <div class="section-title"><?=Yii::t("app", "aboutDis")?> <span><?=Yii::t("app", "aboutW")?></span> <?=Yii::t("app", "aboutg")?></div>
                <p><?=Yii::t("app", "aboutp1")?></p>
                <p><?=Yii::t("app", "aboutp2")?></p>
                <ul class="list-unstyled about-list mb-30">
                    <li>
                        <div class="about-list-icon"> <span class="ti-check"></span> </div>
                        <div class="about-list-text">
                            <p>20 <?=Yii::t("app", "experience")?></p>
                        </div>
                    </li>
                    <li>
                        <div class="about-list-icon"> <span class="ti-check"></span> </div>
                        <div class="about-list-text">
                            <p>150+ <?=Yii::t("app", "tourdes")?></p>
                        </div>
                    </li>
                </ul>
                <!-- Info -->
                <div class="phone-call mb-30">
                    <div class="icon"><span class="flaticon-phone-call"></span></div>
                    <div class="text">
                        <p><?=Yii::t("app", "information")?></p> <a href="tel:855-333-4444">855 333 4444</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 offset-md-1 animate-box" data-animate-effect="fadeInUp">
                <div class="img-exp">
                    <div class="about-img">
                        <div class="img"> <img src="frontend-files/img/about.jpg" class="img-fluid" alt=""> </div>
                    </div>
                    <div id="circle">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
                                <defs>
                                    <path id="circlePath" d=" M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 " />
                                </defs>
                            <circle cx="150" cy="100" r="75" fill="none" />
                            <g>
                                <use xlink:href="#circlePath" fill="none" />
                                <text fill="#0f2454">
                                    <textPath xlink:href="#circlePath"> . planeta travel  . planeta travel </textPath>
                                </text>
                            </g>
                            </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>