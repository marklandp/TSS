<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_asset_tests".
 *
 * @property integer $id
 * @property integer $inventory_type
 * @property string $test_name
 */
class TblAssetTests extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_asset_tests';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inventory_type', 'test_name'], 'required'],
            [['inventory_type'], 'integer'],
            [['test_name'], 'string', 'max' => 40]
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
            'test_name' => 'Test Name',
        ];
    }
}
