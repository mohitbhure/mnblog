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
class HomeAsset extends AssetBundle
{
    public $sourcePath = '@app/themes/dashboard';

    public $css = [
          '//fonts.googleapis.com/css?family=Raleway:400,600,700',
          'css/style.css',
          'css/animate.min.css',
    ];
    public $js = [
     'js/wow.min.js',
    // 'https://code.jquery.com/jquery.js'

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
  //  public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
}
