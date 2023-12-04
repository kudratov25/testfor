<?php

/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class UserAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/resources/user/assets/vendors/mdi/css/materialdesignicons.min.css',
        '/resources/user/assets/vendors/flag-icon-css/css/flag-icon.min.css',
        '/resources/user/assets/vendors/css/vendor.bundle.base.css',
        '/resources/user/assets/vendors/font-awesome/css/font-awesome.min.css',
        '/resources/user/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css',
        '/resources/user/assets/css/style.css',

    ];
    public $js = [
        '/resources/user/assets/vendors/js/vendor.bundle.base.js',
        '/resources/user/assets/vendors/chart.js/Chart.min.js',
        '/resources/user/assets/vendors/jquery-circle-progress/js/circle-progress.min.js',
        '/resources/user/assets/js/off-canvas.js',
        '/resources/user/assets/js/hoverable-collapse.js',
        '/resources/user/assets/js/misc.js',
        '/resources/user/assets/js/dashboard.js'        

    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap5\BootstrapAsset'
    ];
    public function init()
    {
        // parent::init();
        // // resetting BootstrapAsset to not load own css files
        // \Yii::$app->assetManager->bundles['yii\\bootstrap\\BootstrapAsset'] = [
        //     'css' => [],
        //     'js' => []
        // ];
    }
}
