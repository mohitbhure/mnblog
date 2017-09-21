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
class DashboardAsset extends AssetBundle
{
    public $sourcePath = '@app/themes/boot_admin';
    public $css = [
       'https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css',
        'css/bootstrap.min.css',
       'css/dataTables.bootstrap.css',
        'css/styles.css',
    ];
    public $js = [
  //  'https://code.jquery.com/jquery.js',
    'js/bootstrap.min.js',
    'js/jquery.dataTables.min.js',
  //  'js/dataTables.bootstrap.js',
  // 'js/custom.js',
    'js/tables.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
