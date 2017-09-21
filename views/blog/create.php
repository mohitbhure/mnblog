<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Blog */

$this->title = Yii::t('app', 'Create Blog');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Blogs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="col-md-10">
       <div class="row">
         <div class="content-box-large">
         <div class="panel-heading"></div>
         <div class="panel-body">
              <h1><?= Html::encode($this->title) ?></h1>
                  <?= $this->render('_form', [
                      'model' => $model,
                  ]) ?>
         </div>
         </div>
      </div>
</div>
