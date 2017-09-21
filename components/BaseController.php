<?php


namespace app\components;

use Yii;
use yii\web\Controller;


class BaseController extends Controller
{

  public function beforeAction($action)
        {
            $result = parent::beforeAction($action);
              if(Yii::$app->user->isGuest){
              $this->layout='main';
              }
              else{
                $this->layout='admin';
               }
            return $result;
        }
}
