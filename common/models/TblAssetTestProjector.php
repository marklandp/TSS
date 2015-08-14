<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_asset_test_projector".
 *
 * @property integer $id
 * @property integer $inventory_id
 * @property integer $check_projector
 * @property integer $total_projector_bulb_life
 * @property integer $total_bulb_life_used
 * @property integer $total_bulb_life_remaining
 * @property integer $created_date
 * @property integer $update_date
 * @property string $service_period
 * @property integer $status
 * @property string $comment
 */
class TblAssetTestProjector extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_asset_test_projector';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inventory_id', 'check_projector', 'total_projector_bulb_life', 'total_bulb_life_used', 'total_bulb_life_remaining', 'created_date', 'update_date', 'service_period', 'status', 'comment'], 'required'],
            [['inventory_id', 'check_projector', 'total_projector_bulb_life', 'total_bulb_life_used', 'total_bulb_life_remaining', 'created_date', 'update_date', 'status'], 'integer'],
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
            'check_projector' => 'Check Projector',
            'total_projector_bulb_life' => 'Total Projector Bulb Life',
            'total_bulb_life_used' => 'Total Bulb Life Used',
            'total_bulb_life_remaining' => 'Total Bulb Life Remaining',
            'created_date' => 'Created Date',
            'update_date' => 'Update Date',
            'service_period' => 'Service Period',
            'status' => 'Status',
            'comment' => 'Comment',
        ];
    }
}
