<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_asset_test_status".
 *
 * @property integer $form_id
 * @property integer $user_id
 * @property integer $form_type
 * @property string $closed_by
 * @property string $start_date
 * @property string $end_date
 * @property integer $assigned_to
 * @property integer $inventory
 * @property integer $status
 * @property integer $asset_test
 * @property string $comments
 */
class TblAssetTestStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_asset_test_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'form_type', 'closed_by', 'start_date', 'end_date', 'assigned_to', 'inventory', 'status', 'asset_test', 'comments'], 'required'],
            [['user_id', 'form_type', 'assigned_to', 'inventory', 'status', 'asset_test'], 'integer'],
            [['closed_by', 'start_date', 'end_date'], 'safe'],
            [['comments'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'form_id' => 'Form ID',
            'user_id' => 'User ID',
            'form_type' => 'Form Type',
            'closed_by' => 'Closed By',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'assigned_to' => 'Assigned To',
            'inventory' => 'Inventory',
            'status' => 'Status',
            'asset_test' => 'Asset Test',
            'comments' => 'Comments',
        ];
    }
}
