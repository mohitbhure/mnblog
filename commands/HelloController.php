<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;
use yii;
use yii\console\Controller;
use app\models\User;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class HelloController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     */


        /*     public function actionIndex( $name,$mail,$paswd)
    {
            $user= new User;

            $user->full_name=$name;
           $user->email=$mail;
           $user->password=$paswd;

           $user->save();

    } */
    public function actionIndex(){
       $user = new User();
      // $auth = Yii::$app->authManager;
       $user->full_name = 'aainq';
       $user->email = 'admin@gmail.com';
       $user->password='admin@123q';
       $user->save();
}
    //    $user->username = 'content writer';
    //    $user->email = 'writer@gmail.com';
    //    $user->setPassword('writer@123');
    //    $user->save();
     //
    //         $auth->removeAll();
     //
    //           $createPost = $auth->createPermission('createPost');
    //           $createPost->description = 'create post';
    //           $auth->add($createPost);
     //
    //           $updatePost = $auth->createPermission('updatePost');
    //           $updatePost->description = 'Manage users';
    //           $auth->add($updatePost);
     //
    //           $contentWriter = $auth->createRole('moderator');
    //           $contentWriter->description = 'Moderator';
    //           $auth->add($contentWriter);
    //           $auth->addChild($contentWriter, $createPost);
    //           $auth->addChild($contentWriter, $updatePost);
     //
    //           $admin = $auth->createRole('admin');
    //           $admin->description = 'Administrator';
    //           $auth->add($admin);
    //           $auth->addChild($admin, $contentWriter);
    //  }
}
