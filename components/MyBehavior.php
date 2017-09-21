<?

namespace app\components;

use yii\db\ActiveRecord;
use yii\base\Behavior;

class MyBehavior extends Behavior
{
    // ...

    public function events()
    {
        return [
            ActiveRecord::EVENT_BEFORE_LOGIN => 'beforeLogin',
        ];
    }

    public function beforeLogin($event)
    {
      $this->layout='admin';
    }
}
