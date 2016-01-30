<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_classroom_setup_status".
 *
 * @property integer $id
 * @property integer $form_id
 * @property integer $inventory_id
 * @property integer $received_by
 * @property integer $status
 */
class TblClassroomSetupStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_classroom_setup_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['form_id', 'inventory_id', 'status'], 'required'],
            [['form_id', 'inventory_id', 'received_by', 'status'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'form_id' => 'Form ID',
            'inventory_id' => 'Inventory ID',
            'received_by' => 'Received By',
            'status' => 'Status',
        ];
    }
}
