<?php

namespace app\components;


use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\db\ActiveRecord;

class BaseActiveRecord extends ActiveRecord
{
  public function behaviors()
  {
      return [
          [
              'class' => TimestampBehavior::className(),
              'createdAtAttribute' => 'create_time',
              'updatedAtAttribute' => 'update_time',
              'value' => new Expression('NOW()'),
          ],
      ];
  }
}
