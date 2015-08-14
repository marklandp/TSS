<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_classroom_setup_setting".
 *
 * @property integer $id
 * @property integer $inventory_id
 */
class TblClassroomSetupSetting extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_classroom_setup_setting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inventory_id'], 'required'],
            [['inventory_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'inventory_id' => 'Inventory ID',
        ];
    }
}
