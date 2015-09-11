<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_controllers".
 *
 * @property integer $id
 * @property string $controller_name
 * @property string $display_name
 */
class TblControllers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_controllers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['controller_name', 'display_name'], 'required'],
            [['controller_name', 'display_name'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'controller_name' => 'Controller Name',
            'display_name' => 'Display Name',
        ];
    }
}
