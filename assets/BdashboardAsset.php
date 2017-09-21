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
class BdashboardAsset extends AssetBundle
{
  //  public $basePath = '@webroot';
  //  public $baseUrl = '@web/themes/brilnt';
    public $sourcePath = '@app/themes/brilnt';
    public $css = [
        //'css/bootstrap.css',
        'css/font-awesome.css',
        'js/morris/morris-0.4.3.min.css',
        'css/custom-styles.css',
        'http://fonts.googleapis.com/css?family=Open+Sans',
       'js/Lightweight-Chart/cssCharts.css'
    ];
    public $js = [
   'js/Lightweight-Chart/jquery.chart.js',
    'js/custom-scripts.js',
    'js/Chart.min.js',
    'js/chartjs.js',
    'js/easypiechart-data.js',
    'js/easypiechart.js',
    'js/morris/morris.js',
    'js/morris/raphael-2.1.0.min.js',
    'js/jquery.metisMenu.js',
    'js/bootstrap.min.js',
    //'js/jquery-1.10.2.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
