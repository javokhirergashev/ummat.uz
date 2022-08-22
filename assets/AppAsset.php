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
        "vendor/bootstrap/css/bootstrap.css",
        "vendor/font-awesome/css/font-awesome.min.css",
        "vendor/prettyPhoto/css/prettyPhoto.css",
        "css/style.css",
        "css/custom.css",
        "vendor/masterslider/style/masterslider.css",
        "vendor/masterslider/skins/default/style.css",
        "vendor/masterslider/style/ms-fullscreen.css",
        "vendor/wow-animation/animate.css",
        "https://unicons.iconscout.com/release/v4.0.0/css/line.css"
        ];
    public $js = [
        "js/ie8-responsive-file-warning.js",
        "js/ie-emulation-modes-warning.js",
        "js/ie10-viewport-bug-workaround.js",
        "vendor/jquery/jquery.min.js",
        "vendor/bootstrap/js/bootstrap.min.js",
        "js/divineartnav.js",
        "js/custom.js",
        "vendor/masterslider/jquery.easing.min.js",
        "vendor/masterslider/masterslider.min.js",
        "js/template.js",
        "vendor/prettyPhoto/js/jquery.prettyPhoto.js",
        "vendor/wow-animation/wow.min.js",
    ];
  public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap4\BootstrapAsset',
    ];
}
