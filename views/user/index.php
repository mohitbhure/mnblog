<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\components\BaseWidget;
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
    <?=       Html::button("<span class='glyphicon glyphicon-plus' aria-hidden='true'></span>",
                               ['class'=>'kv-action-btn',
                                   'onclick'=>"window.location.href = '" . \Yii::$app->urlManager->createUrl(['/user/create']) . "';",
                                   'data-toggle'=>'tooltip',
                                   'title'=>Yii::t('app', 'Create New Record'),
                               ]
                           )?>
         </div>
       </div>
     </div>
   </div>
<div class="col-md-10">
       <div class="row">
 <div class="content-box-large">
         <div class="panel-heading">
       </div>
         <div class="panel-body">
           <?php Pjax::begin(); ?>    <?= GridView::widget([
                   'dataProvider' => $dataProvider,
                   'filterModel' => $searchModel,
                   'columns' => [
                       ['class' => 'yii\grid\SerialColumn'],

                       'id',
                       'full_name',
                       'email:email',
                       'password',
                      // 'email_verified:email',
                       // 'image_file',
                       // 'timezone',
                       // 'state_id',
                        'create_user_id',
                       // 'create_time',
                       // 'update_time',

                       ['class' => 'yii\grid\ActionColumn'],
                   ],
               ]); ?>
           <?php Pjax::end(); ?></div>


       </div>

</div>


   </div>
