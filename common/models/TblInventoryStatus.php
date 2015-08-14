<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_inventory_status".
 *
 * @property integer $id
 * @property integer $inventory_type
 * @property integer $user_current_stock
 * @property integer $generated_current_stock
 * @property string $inventory_date
 */
class TblInventoryStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_inventory_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inventory_type', 'inventory_date'], 'required'],
            [['inventory_type', 'user_current_stock', 'generated_current_stock'], 'integer'],
            [['inventory_date'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'inventory_type' => 'Inventory Type',
            'user_current_stock' => 'User Current Stock',
            'generated_current_stock' => 'Generated Current Stock',
            'inventory_date' => 'Inventory Date',
        ];
    }
}
