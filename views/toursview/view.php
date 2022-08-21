<style>
    
    .target_blank{
        width: 100%;
        /*height: 100vh;*/
        background-color: #ededed;
    }

    .target_blank img{
        width: 500px;
        padding-top: 40px;
        margin: 0 auto 2rem auto;
        display: block;
    }

    .target_blank h1{
        text-align: center;
        color: #111;
        padding-top: 20px;
    }

    .target_blank p{
        /*color: white;*/
        
    }



    .service-area-two .single-service a {
        /*background: transparent;*/
        border: 2px solid #f7ea00;
        color: #010101;
        font-weight: 600;
        float: left;
    }

    .service-area-four .single-service a {
        background: transparent;
        border: 1px solid #F24848;
        position: relative;
        z-index: 5;
    }

    .service-area-five .single-service a {
        border-color: #f7ea00;
    }

    .service-area-four .single-service a:before {
        position: absolute;
        content: "";
        top: 0;
        left: 0;
        width: 0;
        height: 100%;
        background: #F24848;
        z-index: -1;
        transition: all .4s ease;
    }

    .service-area-five .single-service a:before {
        background: #f7ea00;
    }

    .service-area-four .single-service a:after {
        position: absolute;
        content: "";
        top: 0;
        right: 0;
        width: 0;
        height: 100%;
        background: #F24848;
        z-index: -1;
        transition: all .4s ease;
    }

    .service-area-five .single-service a:after {
        background: #f7ea00;
    }

    .service-area-four .single-service a:hover:before,
    .service-area-five .single-service a:hover:before,
    .service-area-four .single-service a:hover:after,
    .service-area-five .single-service a:hover:after {
        width: 50%;
    }

    .service-area-four .single-service a:hover {
        color: #ffffff;
    }

    .service-area-five .single-service a:hover {
        color: #010101;
    }


</style>


<section class="target_blank">
    <div class="container">

        <h1><?=$model["title_".Yii::$app->language]?></h1>
        <img src="<?=$image?>" alt="">
        <h1><?=$model["description_".Yii::$app->language]?></h1>
        <h1 style="font-size: 22px">Narxi: <?=$model->price?> UZS</h1>
        <p><?=$model['body_'.Yii::$app->language]?></p>
<!--        <button><a href="https://payme.uz/fallback/merchant/?id=62a0a872aa40a686d47cf910" class="btn" target="_blank">online to'lov qilish <i class="fas fa-angle-right"></i></a></button>-->
        <button><a href="https://payme.uz/fallback/merchant/?id=62b7430ecb6e753eb77aadc1" class="btn" target="_blank">online to'lov qilish <i class="fas fa-angle-right"></i></a></button>
    </div>
</section>