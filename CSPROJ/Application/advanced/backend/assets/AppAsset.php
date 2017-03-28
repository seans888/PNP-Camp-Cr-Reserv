<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    //public $basePath = '@webroot';
    ///public $baseUrl = '@web';
    public $sourcePath = '@bower/backend/'; 
    public $css = [ 
        'bootstrap/css/bootstrap.min.css',
        'plugins/font-awesome/4.5.0/css/font-awesome.min.css',  
        'plugins/ionicons/2.0.1/css/ionicons.min.css',
        'dist/css/AdminLTE.min.css',
        'dist/css/skins/_all-skins.min.css',
        'plugins/iCheck/flat/blue.css',
        'plugins/morris/morris.css',
        'plugins/jvectormap/jquery-jvectormap-1.2.2.css',
        'plugins/datepicker/datepicker3.css',
        'plugins/daterangepicker/daterangepicker.css',
        'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
    ];
    public $js = [
        'plugins/jQuery/jquery-2.2.3.min.js',
        'plugins/input-mask/jquery.inputmask.js',
        'plugins/input-mask/jquery.inputmask.date.extensions.js',
        'plugins/input-mask/jquery.inputmask.extensions.js',
        'dist/js/satusoftware_datemask.js',
        'dist/js/jquery-ui.min.js',
        'dist/js/satusoftware.js',
        'bootstrap/js/bootstrap.min.js',
        'dist/js/raphael-min.js',
        'plugins/morris/morris.min.js',
        'plugins/sparkline/jquery.sparkline.min.js',
        'plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
        'plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
        'plugins/knob/jquery.knob.js',
        'dist/js/moment.min.js',
        'plugins/daterangepicker/daterangepicker.js',
        'plugins/datepicker/bootstrap-datepicker.js',
        'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
        'plugins/slimScroll/jquery.slimscroll.min.js',
        'plugins/fastclick/fastclick.js',
        'dist/js/app.min.js',
        'plugins/ckeditor/ckeditor.js',
        'dist/js/app.min.js',
        'plugins/ckeditor/ckeditor.js',
        'dist/js/satusoftware_editor1.js',
        'dist/js/satusoftware_editor2.js',
        'dist/js/pages/dashboard.js',
        'dist/js/demo.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
