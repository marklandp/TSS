<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_inventory_consumables_details_toner".
 *
 * @property integer $id
 * @property integer $inventory_id
 * @property integer $added_quantity
 * @property string $type
 * @property string $date
 * @property integer $user
 */
class TblInventoryConsumablesDetailsToner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_inventory_consumables_details_toner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inventory_id', 'added_quantity', 'type', 'date', 'user'], 'required'],
            [['inventory_id', 'added_quantity', 'user'], 'integer'],
            [['date'], 'safe'],
            [['type'], 'string', 'max' => 20]
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
            'added_quantity' => 'Added Quantity',
            'type' => 'Type',
            'date' => 'Date',
            'user' => 'User',
        ];
    }
}
