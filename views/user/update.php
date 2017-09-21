<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'User',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
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
