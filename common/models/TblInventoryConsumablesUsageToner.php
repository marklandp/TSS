<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_inventory_consumables_usage_toner".
 *
 * @property integer $id
 * @property integer $inventory_id
 * @property integer $used_quantity
 * @property integer $assigned_to
 * @property string $date
 * @property integer $user
 */
class TblInventoryConsumablesUsageToner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_inventory_consumables_usage_toner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inventory_id', 'used_quantity', 'assigned_to', 'date', 'user'], 'required'],
            [['inventory_id', 'used_quantity', 'assigned_to', 'user'], 'integer'],
            [['date'], 'safe']
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
            'used_quantity' => 'Used Quantity',
            'assigned_to' => 'Assigned To',
            'date' => 'Date',
            'user' => 'User',
        ];
    }
}
