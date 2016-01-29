<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_asset_test_assignment".
 *
 * @property integer $id
 * @property integer $inventory_item
 * @property integer $user
 */
class TblAssetTestAssignment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_asset_test_assignment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inventory_item', 'user'], 'required'],
            [['inventory_item', 'user'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'inventory_item' => 'Inventory Item',
            'user' => 'User',
        ];
    }
}
