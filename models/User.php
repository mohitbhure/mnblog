<?php

namespace app\models;

use Yii;

use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use app\components\BaseActiveRecord;
use yii\web\IdentityInterface;
/**
 * This is the model class for table "{{%user}}".
 *
 * @property integer $id
 * @property string $full_name
 * @property string $email
 * @property string $password
 * @property integer $email_verified
 * @property string $image_file
 * @property string $timezone
 * @property integer $state_id
 * @property integer $create_user_id
 * @property string $create_time
 * @property string $update_time
 *
 * @property Blog[] $blogs
 * @property Category[] $categories
 * @property Comment[] $comments
 * @property Page[] $pages
 */
class User extends BaseActiveRecord  implements IdentityInterface

{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['full_name', 'email', 'password'], 'required'],
            [['email_verified', 'state_id', 'create_user_id'], 'integer'],
            [['create_time', 'update_time'], 'safe'],
            [['full_name'], 'string', 'max' => 256],
            [['email'], 'string', 'max' => 128],
            [['password'], 'string', 'max' => 512],
            [['image_file', 'timezone'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'full_name' => Yii::t('app', 'Full Name'),
            'email' => Yii::t('app', 'Email'),
            'password' => Yii::t('app', 'Password'),
            'email_verified' => Yii::t('app', 'Email Verified'),
            'image_file' => Yii::t('app', 'Image File'),
            'timezone' => Yii::t('app', 'Timezone'),
            'state_id' => Yii::t('app', 'State ID'),
            'create_user_id' => Yii::t('app', 'Create User ID'),
            'create_time' => Yii::t('app', 'Create Time'),
            'update_time' => Yii::t('app', 'Update Time'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBlogs()
    {
        return $this->hasMany(Blog::className(), ['create_user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Category::className(), ['create_user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['create_user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPages()
    {
        return $this->hasMany(Page::className(), ['create_user_id' => 'id']);
    }

public function getAuthKey()
{

}

public function getId()
{
return $this->id;
}

public static function findIdentityByAccessToken($token, $type = null)
{

}

public static function findIdentity($id)
{
return static::findOne($id);
}

public function validateAuthKey($authKey)
{

}
public static function findByUsername($email)
{
 return self::findOne(['full_name'=>$email]);
}

public  function validatePassword($password)
{
 return $this->password === $password;
}
}
