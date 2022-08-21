<?php

namespace app\assets;

use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/admin-files';
    public $css = [
        "assets/images/favicon-32x32.png",
        "assets/plugins/vectormap/jquery-jvectormap-2.0.2.css",
        "assets/plugins/simplebar/css/simplebar.css",
        "assets/plugins/fancy-file-uploader/fancy_fileupload.css",
        "plugins/file-upload/file-upload-with-preview.min.css",
        "assets/plugins/datetimepicker/css/classic.css",
        "assets/plugins/datetimepicker/css/classic.time.css",
        "assets/plugins/datetimepicker/css/classic.date.css",
        "assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css",
        "assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css",
        "assets/plugins/fontawesome/css/all.css",
        "assets/plugins/fontawesome/css/fontawesome.css",
        "assets/plugins/metismenu/css/metisMenu.min.css",
        "assets/css/pace.min.css",
        "assets/js/pace.min.js",
        "assets/css/bootstrap.min.css",
        "assets/css/bootstrap-extended.css",
        "assets/css/bootstrap-extended.css",
        "https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap",
        "assets/css/app.css",
        "assets/css/icons.css",
    ];
    public $js = [
        "assets/js/index.js",
        "assets/js/app.js",
        "assets/js/bootstrap.bundle.min.js",
//	    "assets/js/jquery.min.js",
        "assets/plugins/simplebar/js/simplebar.min.js",
        "assets/plugins/metismenu/js/metisMenu.min.js",
        "assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js",
        "assets/plugins/chartjs/js/Chart.min.js",
        "assets/plugins/datetimepicker/js/legacy.js",
        "assets/plugins/datetimepicker/js/picker.js",
        "assets/plugins/datetimepicker/js/picker.time.js",
        "assets/plugins/datetimepicker/js/picker.date.js",
//        "assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js",
//        "assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js",
//        "assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js",
        "assets/plugins/jquery-knob/excanvas.js",
        "assets/plugins/jquery-knob/jquery.knob.js",
        "assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js",
        "assets/plugins/file-upload/file-upload-with-preview.min.js",
        "assets/ckeditor/ckeditor.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
//       'yii\bootstrap4\BootstrapAsset',
    ];
}