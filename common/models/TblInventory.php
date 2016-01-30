<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_inventory".
 *
 * @property integer $inventory_id
 * @property string $inventory_name
 * @property integer $status
 * @property integer $type
 * @property integer $owner
 * @property string $start_date
 * @property string $end_date
 */
class TblInventory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_inventory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inventory_id', 'inventory_name', 'status', 'type', 'owner', 'start_date', 'end_date'], 'required'],
            [['inventory_id', 'status', 'type', 'owner'], 'integer'],
            [['start_date', 'end_date'], 'safe'],
            [['inventory_name'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'inventory_id' => 'Inventory ID',
            'inventory_name' => 'Inventory Name',
            'status' => 'Status',
            'type' => 'Type',
            'owner' => 'Owner',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
        ];
    }
}
