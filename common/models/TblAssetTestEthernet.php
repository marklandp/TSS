<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_asset_test_ethernet".
 *
 * @property integer $id
 * @property integer $inventory_id
 * @property integer $test_cable
 * @property integer $check_connector_tag_side
 * @property integer $check_connector_far_side
 * @property integer $length
 * @property integer $created_date
 * @property integer $update_date
 * @property string $service_period
 * @property integer $status
 * @property string $comment
 */
class TblAssetTestEthernet extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_asset_test_ethernet';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inventory_id', 'test_cable', 'check_connector_tag_side', 'check_connector_far_side', 'length', 'created_date', 'update_date', 'service_period', 'status', 'comment'], 'required'],
            [['inventory_id', 'test_cable', 'check_connector_tag_side', 'check_connector_far_side', 'length', 'created_date', 'update_date', 'status'], 'integer'],
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
            'test_cable' => 'Test Cable',
            'check_connector_tag_side' => 'Check Connector Tag Side',
            'check_connector_far_side' => 'Check Connector Far Side',
            'length' => 'Length',
            'created_date' => 'Created Date',
            'update_date' => 'Update Date',
            'service_period' => 'Service Period',
            'status' => 'Status',
            'comment' => 'Comment',
        ];
    }
    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatuS()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'status']);
    }
    /**
     *
     * used to associate inventory ID to asset tags
     */
    public function getTagName()
    {
       return $this->hasOne(TblIsInventory::classname(),['form_id'=>'inventory_id']);
    }
}
