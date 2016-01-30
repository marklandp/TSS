<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_permissions".
 *
 * @property integer $id
 * @property integer $role
 * @property integer $controller_name
 * @property integer $action
 */
class TblPermissions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_permissions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['role', 'controller_name', 'action'], 'required'],
            [['role', 'controller_name', 'action'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'role' => 'Role',
            'controller_name' => 'Controller Name',
            'action' => 'Action',
        ];
    }
}
