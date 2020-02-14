<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "/web/public/assets/vendor/animate.css-master/animate.min.css",
        "/web/public/assets/vendor/loadscreen/css/spinkit.css",
        "/web/public/assets/vendor/fontawesome/css/fontawesome-all.min.css",
        "/web/public/assets/custom/css/fables-icons.css",
        "/web/public/assets/vendor/bootstrap/css/bootstrap.min.css",
        "/web/public/assets/vendor/bootstrap/css/bootstrap-4-navbar.css",
        "/web/public/assets/vendor/portfolio-filter-gallery/portfolio-filter-gallery.css",
        "/web/public/assets/vendor/fancybox-master/jquery.fancybox.min.css",
        "/web/public/assets/vendor/range-slider/range-slider.css",
        "/web/public/assets/vendor/owlcarousel/owl.carousel.min.css",
        "/web/public/assets/vendor/owlcarousel/owl.theme.default.min.css",
        "/web/public/assets/custom/css/jquery.countdown.css",
        "/web/public/assets/custom/css/custom.css",
        "/web/public/assets/custom/css/custom-responsive.css",

    ];
    public $js = [
        "/web/public/assets/vendor/jquery/jquery-3.3.1.min.js",
        "/web/public/assets/vendor/loadscreen/js/ju-loading-screen.js",
        "/web/public/assets/vendor/jquery-circle-progress/circle-progress.min.js",
        "/web/public/assets/vendor/popper/popper.min.js",
        "/web/public/assets/vendor/jQuery.countdown-master/jquery.countdown.min.js",
        "/web/public/assets/vendor/timeline/jquery.timelify.js",
        "/web/public/assets/vendor/bootstrap/js/bootstrap.min.js",
        "/web/public/assets/vendor/bootstrap/js/bootstrap-4-navbar.js",
        "/web/public/assets/vendor/WOW-master/dist/wow.min.js",
        "/web/public/assets/vendor/owlcarousel/owl.carousel.min.js",
        "/web/public/assets/custom/js/jquery-data-to.js",
        "/web/public/assets/vendor/jquery-circle-progress/circle.js",
        "/web/public/assets/vendor/portfolio-filter-gallery/jquery.isotope.min.js",
        "/web/public/assets/vendor/portfolio-filter-gallery/portfolio-filter-gallery.js",
        "/web/public/assets/vendor/fancybox-master/jquery.fancybox.min.js",
		"/web/public/assets/custom/js/jquery.countdown.js",
		"/web/public/assets/custom/js/script.js",
        "/web/public/assets/custom/js/custom.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
