<style>
    .container-fluid{
        width: 100%;
        min-height: 70vh;
        background-color: #111;

    }
    .contactrow .col{
        margin-top: 30px;
        text-align: center;
    }

    .contactrow .col #message{
        font-size: 1rem;
        color: aqua;
    }

    .contactrow .col h3{
        color: white;
        margin-bottom: 20px;
        font-size: 50px;
    }

    .contactrow .col p{
        color: #aaa;
        font-size: 17px;
    }
    .contactrow .contact_links,
    .contactrow .network_links{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        margin-bottom: 20px;
    }
    .contactrow .contact_links p{
        margin-left: 30px;
    }


    .contactrow .network_links i{
        color: white;
        font-size: 30px;
        margin-left: 25px;
    }

    .partner1{
        width: 100%;
        background-color: rgb(27, 27, 27);
        min-height: 43vh;
    }



    .partner1 h3{
        padding-top: 20px;
        color: white;
        font-size: 30px;
        text-align: center;
    }

    .partner1 .row1 img{
        width: 150px;
        margin-top: 40px;
    }

    .partner1 .row1 .partners1{
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        flex-wrap: wrap;
    }
</style>


<div class="container-fluid">
    <div class="row contactrow">
        <div class="col">
            <h3><?=Yii::t("app", "contact_us")?></h3>

            <div class="contact_links">
                <p><i class="uil uil-phone"></i> +9989XXXXXXXX</p>
                <p><i class="uil uil-envelope-edit"></i> example@gmail.com </p>
                <p><i class="uil uil-map-marker"></i> Namangan tumani</p>
            </div>

            <div class="network_links">
                <?php if(!empty($models)):?>
                    <?php foreach ($models as $model):?>
                        <a href="<?=$model->telegram_link?>"><i class="uil uil-telegram-alt"></i></a>
                        <a href="<?=$model->instagram_link?>"><i class="uil uil-instagram"></i></a>
                        <a href="<?=$model->facebook_link?>"><i class="uil uil-facebook"></i></a>
                        <a href="<?=$model->tweetter_link?>"><i class="uil uil-twitter"></i></a>
                    <?php endforeach;?>
                <?php endif;?>
            </div>
        </div>
    </div>

</div>


<div class="container-fluid partner1">

    <div class="row1">
        <h3>Bizning Hamkorlar</h3>
        <div class="partners1">

            <?php if(!empty($sponsors)):?>
                <?php foreach ($sponsors as $sponsor):?>
                    <?php
                    $img = \app\models\StaticFunctions::getImage("sponsors", $sponsor->id, $sponsor->images);
                    ?>

                    <img src="<?=$img?>" alt="">

            <?php endforeach;?>
            <?php endif;?>
        </div>
    </div>

</div>