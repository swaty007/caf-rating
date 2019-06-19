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
        '//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css',
        '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',
        'css/slick/slick-theme.css',
        'css/site.css',
    ];
    public $js = [
        '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
        '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
        'js/main.js',
    ];
    public $jsOptions = array(
//        'position' => \yii\web\View::POS_END
//        'position' => \yii\web\View::POS_HEAD
    );
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
