<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_asset_test_power_strip".
 *
 * @property integer $id
 * @property integer $inventory_id
 * @property integer $check_prongs
 * @property integer $check_power_indicator
 * @property integer $check_sockets
 * @property integer $length
 * @property integer $created_date
 * @property integer $update_date
 * @property string $service_period
 * @property integer $status
 * @property string $comment
 */
class TblAssetTestPowerStrip extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_asset_test_power_strip';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inventory_id', 'check_prongs', 'check_power_indicator', 'check_sockets', 'length', 'created_date', 'update_date', 'service_period', 'status', 'comment'], 'required'],
            [['inventory_id', 'check_prongs', 'check_power_indicator', 'check_sockets', 'length', 'created_date', 'update_date', 'status'], 'integer'],
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
            'check_prongs' => 'Check Prongs',
            'check_power_indicator' => 'Check Power Indicator',
            'check_sockets' => 'Check Sockets',
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
    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getpRongs()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'status']);
    }
    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getpwrInd()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'status']);
    }
    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getsocKets()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'status']);
    }
}
