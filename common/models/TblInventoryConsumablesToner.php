<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_inventory_consumables_toner".
 *
 * @property integer $id
 * @property string $name
 * @property string $color
 * @property integer $optimal_storage_level
 * @property double $storage_point
 * @property integer $current_stock
 */
class TblInventoryConsumablesToner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_inventory_consumables_toner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'color', 'optimal_storage_level', 'storage_point'], 'required'],
            [['color'], 'string'],
            [['optimal_storage_level', 'current_stock'], 'integer'],
            [['storage_point'], 'number'],
            [['name'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'color' => 'Color',
            'optimal_storage_level' => 'Optimal Storage Level',
            'storage_point' => 'Storage Point',
            'current_stock' => 'Current Stock',
        ];
    }
}
