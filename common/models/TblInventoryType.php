<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_inventory_type".
 *
 * @property integer $id
 * @property string $name
 * @property string $prefix
 * @property string $test_table
 * @property string $controller
 * @property integer $setup_loan
 * @property integer $test_day
 * @property integer $optimal_storage_level
 * @property integer $storage_point
 */
class TblInventoryType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_inventory_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'prefix', 'test_table', 'controller', 'setup_loan', 'test_day', 'optimal_storage_level', 'storage_point'], 'required'],
            [['setup_loan', 'test_day', 'optimal_storage_level', 'storage_point'], 'integer'],
            [['name', 'test_table'], 'string', 'max' => 30],
            [['prefix'], 'string', 'max' => 10],
            [['controller'], 'string', 'max' => 50]
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
            'prefix' => 'Prefix',
            'test_table' => 'Test Table',
            'controller' => 'Controller',
            'setup_loan' => 'Setup Loan',
            'test_day' => 'Test Day',
            'optimal_storage_level' => 'Optimal Storage Level',
            'storage_point' => 'Storage Point',
        ];
    }
}
