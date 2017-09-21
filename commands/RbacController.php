<?php
namespace app\commands;

use yii\console\Controller;
use app\models\User;
//use yii\behaviors\TimestampBehavior;
use yii;
use app\components\MyActiveRecord;

class RbacController extends Controller
{

    public function actionInit()
    {
      $user = new User();
      $user->full_name = 'admin';
      $user->email = 'admin@gmail.com';
      $user->password=('admin@123');
      if ($user->validate()) {
      $user->save();
}
}

  public function actionRole(){

         $auth = Yii::$app->authManager;

         $managePost = $auth->createPermission('managePost');
         $managePost->description = 'create and update post';
         $auth->add($managePost);

         $manageUsers = $auth->createPermission('manageUsers');
         $manageUsers->description = 'Manage users';
         $auth->add($manageUsers);

         $contentWriter = $auth->createRole('contentWriter');
         $contentWriter->description = 'contentWriter';
         $auth->add($contentWriter);
         $auth->addChild($contentWriter, $managePost);

         $admin = $auth->createRole('admin');
         $admin->description = 'Administrator';
         $auth->add($admin);
         $auth->addChild($admin, $contentWriter);
         $auth->addChild($admin, $manageUsers);
     }
     public function actionAssign($role, $username)
   {
       $user = User::find()->where(['full_name' => $username])->one();
       if (!$user) {
           throw new InvalidParamException("There is no user \"$username\".");
       }

       $auth = Yii::$app->authManager;
       $roleObject = $auth->getRole($role);
       if (!$roleObject) {
           throw new InvalidParamException("There is no role \"$role\".");
       }

       $auth->assign($roleObject, $user->id);
   }
}
