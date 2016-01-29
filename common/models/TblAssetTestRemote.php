<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_asset_test_remote".
 *
 * @property integer $id
 * @property integer $inventory_id
 * @property integer $test_power_button
 * @property integer $enter_menu_options
 * @property integer $make_screen_blank_button
 * @property integer $choose_source_button
 * @property integer $test_battery_1
 * @property integer $test_battery_2
 * @property string $battery_type
 * @property integer $up_elt_mount_remote
 * @property integer $down_elt_mount_remote
 * @property integer $stop_elt_mount_remote
 * @property integer $created_date
 * @property integer $update_date
 * @property string $service_period
 * @property integer $status
 * @property string $comment
 */
class TblAssetTestRemote extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_asset_test_remote';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inventory_id', 'test_power_button', 'enter_menu_options', 'make_screen_blank_button', 'choose_source_button', 'test_battery_1', 'test_battery_2', 'battery_type', 'up_elt_mount_remote', 'down_elt_mount_remote', 'stop_elt_mount_remote', 'created_date', 'update_date', 'service_period', 'status', 'comment'], 'required'],
            [['inventory_id', 'test_power_button', 'enter_menu_options', 'make_screen_blank_button', 'choose_source_button', 'test_battery_1', 'test_battery_2', 'up_elt_mount_remote', 'down_elt_mount_remote', 'stop_elt_mount_remote', 'created_date', 'update_date', 'status'], 'integer'],
            [['battery_type'], 'string'],
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
            'test_power_button' => 'Test Power Button',
            'enter_menu_options' => 'Enter Menu Options',
            'make_screen_blank_button' => 'Make Screen Blank Button',
            'choose_source_button' => 'Choose Source Button',
            'test_battery_1' => 'Test Battery 1',
            'test_battery_2' => 'Test Battery 2',
            'battery_type' => 'Battery Type',
            'up_elt_mount_remote' => 'Up Elt Mount Remote',
            'down_elt_mount_remote' => 'Down Elt Mount Remote',
            'stop_elt_mount_remote' => 'Stop Elt Mount Remote',
            'created_date' => 'Created Date',
            'update_date' => 'Update Date',
            'service_period' => 'Service Period',
            'status' => 'Status',
            'comment' => 'Comment',
        ];
    }
}
