<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_asset_test_laptop_bag".
 *
 * @property integer $id
 * @property integer $inventory_id
 * @property integer $empty_bag
 * @property integer $test_strap
 * @property integer $clean_bag_monthly
 * @property integer $created_date
 * @property integer $update_date
 * @property string $service_period
 * @property integer $status
 * @property string $comment
 */
class TblAssetTestLaptopBag extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_asset_test_laptop_bag';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inventory_id', 'empty_bag', 'test_strap', 'clean_bag_monthly', 'created_date', 'update_date', 'service_period', 'status', 'comment'], 'required'],
            [['inventory_id', 'empty_bag', 'test_strap', 'clean_bag_monthly', 'created_date', 'update_date', 'status'], 'integer'],
            [['service_period'], 'string', 'max' => 30],
            [['comment'], 'string', 'max' => 200]
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
            'empty_bag' => 'Empty Bag',
            'test_strap' => 'Test Strap',
            'clean_bag_monthly' => 'Clean Bag Monthly',
            'created_date' => 'Created Date',
            'update_date' => 'Update Date',
            'service_period' => 'Service Period',
            'status' => 'Status',
            'comment' => 'Comment',
        ];
    }
    /**
     *
     * used to associate inventory ID to asset tags
     */
    public function getTagName()
    {
       return $this->hasOne(TblIsInventory::classname(),['form_id'=>'inventory_id']);
    }
    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatuS()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'status']);
    }/**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getemptyBag()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'status']);
    }/**
     *
     * @return \yii\db\ActiveQuery
     */
    public function gettestStrap()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'status']);
    }/**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getcleanBag()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'status']);
    }
}
