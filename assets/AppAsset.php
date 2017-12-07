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
        'css/main.min.css',
        'css/real-estate.css',
        'css/font-icons.css',
        'css/fonts.css',
        'css/bs-select.css',
        'css/bs-switches.css',
        'css/ion.rangeslider.css',
    ];
    public $js = [
        'js/jquery.js',
        'js/bs-select.js',
        'js/bs-switches.js',
        'js/function.js',
        'js/rangeslider.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
