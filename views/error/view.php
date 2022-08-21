<!--<section class="page-section">-->
<!--    <div class="container relative">-->
<!--       <div class="row masonry" style="position: relative; height: 2568.05px;">-->
<!--           <div class="alert alert-danger alert-dismissible" role="alert">-->
<!--               <i class="fa  fa-times-circle" aria-hidden="true"></i> --><?//=Yii::t('app','error')?>
<!--           </div>-->
<!--       </div>-->
<!--</section>-->




<style>
    *{
        margin: 0;
        padding: 0;

    }
    #error{
        height: 100vh;
        background: -webkit-repeating-linear-gradient(-45deg, #71b7e6, #69a6ce, #b98acc, #ee8176, #b98acc, #69a6ce, #9b59b6);
        background-size: 400%;
        animation: animate 10s ease-in-out infinite;
        position: relative;
    }


    #error-page{
        position: absolute;
        top: 10%;
        left: 15%;
        right: 15%;
        bottom: 10%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #fff;
        box-shadow: 0px 5px 10px rgba(0,0,0,0.1);
    }
    #error-page .content{
        max-width: 620px;
        text-align: center;
    }
    .content h2.header{
        font-size: 40px;
        line-height: 1em;
        position: relative;
        margin-bottom: 20px;
    }
    .content h2.header:after{
        position: absolute;
        content: attr(data-text);
        top: 0;
        left: 0;
        right: 0;
        background: -webkit-repeating-linear-gradient(-45deg, #71b7e6, #69a6ce, #b98acc, #ee8176, #b98acc, #69a6ce, #9b59b6);
        background-size: 400%;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-shadow: 1px 1px 2px rgba(255,255,255,0.25);
        animation: animate 10s ease-in-out infinite;
    }
    @keyframes animate {
        0%{
            background-position: 0 0;
        }
        25%{
            background-position: 100% 0;
        }
        50%{
            background-position: 100% 100%;
        }
        75%{
            background-position: 0% 100%;
        }
        100%{
            background-position: 0% 0%;
        }
    }
    .content h4{
        margin-bottom: 20px;
        text-transform: uppercase;
        color: #000;
        font-size: 30px;
        max-width: 600px;
        position: relative;
    }
    .content h4:after{
        position: absolute;
        content: attr(data-text);
        top: 0;
        left: 0;
        right: 0;
        text-shadow: 1px 1px 2px rgba(255,255,255,0.4);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .content p{
        font-size: 1.2em;
        color: #0d0d0d;
    }
    .content .btns{
        margin: 25px 0;
        display: inline-flex;
    }
    .content .btns a{
        display: inline-block;
        margin: 0 10px;
        text-decoration: none;
        border: 2px solid #69a6ce;
        color: #69a6ce;
        font-weight: 500;
        padding: 10px 25px;
        border-radius: 25px;
        text-transform: uppercase;
        transition: all 0.3s ease;
    }
    .content .btns a:hover{
        background: #69a6ce;
        color: #fff;
    }
</style>

<section id="error">
    <div id="error-page">
        <div class="content">
            <h2 class="header" data-text="<?=Yii::t("app", "error_text1")?>"><?=Yii::t("app", "error_text1")?></h2>
            <h4 data-text="iltimos boshqa kategoriya tanlang!"><?=Yii::t("app", "error_text2")?></h4>
            <p><?=Yii::t("app", "error_text3")?></p>
            <div class="btns">
                <a href="https://marmaratravel.uz"><?=Yii::t("app", "return_home")?></a>

            </div>
        </div>
    </div>
</section>