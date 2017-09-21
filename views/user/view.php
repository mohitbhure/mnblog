<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-md-10">
       <div class="row">
         <div class="content-box-large">
         <div class="panel-heading">
       </div>
         <div class="panel-body">
           <p>
               <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
               <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
                   'class' => 'btn btn-danger',
                   'data' => [
                       'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                       'method' => 'post',
                   ],
               ]) ?>
           </p>
           <?= DetailView::widget([
               'model' => $model,
               'attributes' => [
                 'id',
                 'password:html',
                   'email_verified:email',
                //   'image_file',
                //   'timezone',
                //   'state_id',
                   'create_user_id',
                   'create_time',
                   'update_time',
               ],
           ]) ?>



       </div>

       </div>

</div>


   </div>
