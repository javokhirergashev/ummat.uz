<!--Footer Section-->
<footer class="footer" id="footer"><!-- Section id -->

    <div class="container">

        <div class="row">
            <?php if(!empty($contacts)):?>
            <?php foreach ($contacts as $contact):?>
            <div class="col-lg-12 text-center footer-logo wow fadeInDown"><!-- logo -->
                <a href="#wrapper"><img src="/frontend-files/images/logo-white.png" class="img-responsive" alt=""></a>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInLeft">
                <div class="footer-block"><!-- footer block -->
                    <img src="/frontend-files/images/call-icon.png" alt="Call"><!-- call icon -->
                    <h5>Toll Number</h5>
                    <h4><?=$contact->first_phone?></h4>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInDown">
                <div class="footer-block"><!-- footer block -->
                    <img src="/frontend-files/images/mail-icon.png" alt="Email"><!-- mail icon -->
                    <h5>Info Services</h5>
                    <h4><?=$contact->email?></h4>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInRight">
                <div class="footer-block"><!-- footer block -->
                    <img src="/frontend-files/images/location-icon.png" alt="Location"><!-- location icon -->
                    <h5>Address</h5>
                    <h4><?=$contact->addres?></h4>
                </div>
            </div>
            <div class="col-md-12 wow fadeInUp">
                <div class="footer-social">
                    <ul class="list-inline">
                        <li> <a href="#" class="telegram"><i class="uil uil-telegram"></i></i></a></li>
                        <li> <a href="#" class="facebook"><i class="uil uil-facebook-f"></i></a></li>
                        <li> <a href="#" class="instagram"><i class="uil uil-instagram"></i></a></li>
                        <li> <a href="#" class="youtube"><i class="uil uil-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
                <?php endforeach;?>
            <?php endif;?>
        </div>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 copyright">
                <p>© 2017 Travel Club. All Rights Reserved.</p>
            </div>
        </div>
    </div>

</footer>
