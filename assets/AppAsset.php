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
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
        'lib/bootstrap/css/bootstrap.min.css',
        'lib/owlcarousel/owl.carousel.min.css',
        'lib/owlcarousel/owl.theme.default.min.css',
        'font/style.css'

    ];
    public $js = [
        'js/jquery.min.js',
        'lib/bootstrap/js/bootstrap.min.js',
        'js/popper.min.js',
        'lib/owlcarousel/owl.carousel.min.js',
        'js/tilt.jquery.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap5\BootstrapAsset'
    ];
}
