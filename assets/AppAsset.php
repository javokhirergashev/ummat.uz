<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/frontend-files';
    public $css = [
        "img/favicon.png",
        "https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500&amp;family=Poppins:wght@300;400;500;600;700&amp;display=swap",
        "css/plugins.css",
        "css/plugins.css",
        "fontawesome/css/all.css",
        "fontawesome/css/fontawesome.css",
        "css/style.css",
        ];
    public $js = [
        "https://www.googletagmanager.com/gtag/js?id=UA-144098545-1",
        "js/jquery-3.6.0.min.js",
        "js/jquery-migrate-3.0.0.min.js",
        "js/modernizr-2.6.2.min.js",
        "js/imagesloaded.pkgd.min.js",
        "js/jquery.isotope.v3.0.2.js",
        "js/pace.js",
        "js/popper.min.js",
        "js/bootstrap.min.js",
        "js/scrollIt.min.js",
        "js/jquery.waypoints.min.js",
        "js/owl.carousel.min.js",
        "js/jquery.stellar.min.js",
        "js/jquery.magnific-popup.js",
        "js/YouTubePopUp.js",
        "js/select2.js",
        "js/datepicker.js",
        "js/jquery.counterup.min.js",
        "js/smooth-scroll.min.js",
        "js/custom.js",

    ];
  public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap4\BootstrapAsset',
    ];
}
