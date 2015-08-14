<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_asset_test_classroom".
 *
 * @property integer $id
 * @property integer $inventory_id
 * @property integer $test_electrical_socket
 * @property integer $test_vga_socket
 * @property integer $test_audio_and_video_ports
 * @property integer $test_ethernet_port_1
 * @property integer $test_ethernet_port_2
 * @property integer $check_retractable_screen
 * @property integer $check_projector_retraction
 * @property integer $check_projector
 * @property integer $check_projector_alignment
 * @property integer $total_projector_bulb_life
 * @property integer $total_bulb_life_used
 * @property integer $total_bulb_life_remaining
 * @property integer $created_date
 * @property integer $update_date
 * @property string $service_period
 * @property integer $status
 * @property string $comment
 */
class TblAssetTestClassroom extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_asset_test_classroom';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inventory_id', 'test_electrical_socket', 'test_vga_socket', 'test_audio_and_video_ports', 'test_ethernet_port_1', 'test_ethernet_port_2', 'check_retractable_screen', 'check_projector_retraction', 'check_projector', 'check_projector_alignment', 'total_projector_bulb_life', 'total_bulb_life_used', 'total_bulb_life_remaining', 'created_date', 'update_date', 'service_period', 'status', 'comment'], 'required'],
            [['inventory_id', 'test_electrical_socket', 'test_vga_socket', 'test_audio_and_video_ports', 'test_ethernet_port_1', 'test_ethernet_port_2', 'check_retractable_screen', 'check_projector_retraction', 'check_projector', 'check_projector_alignment', 'total_projector_bulb_life', 'total_bulb_life_used', 'total_bulb_life_remaining', 'created_date', 'update_date', 'status'], 'integer'],
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
            'test_electrical_socket' => 'Test Electrical Socket',
            'test_vga_socket' => 'Test Vga Socket',
            'test_audio_and_video_ports' => 'Test Audio And Video Ports',
            'test_ethernet_port_1' => 'Test Ethernet Port 1',
            'test_ethernet_port_2' => 'Test Ethernet Port 2',
            'check_retractable_screen' => 'Check Retractable Screen',
            'check_projector_retraction' => 'Check Projector Retraction',
            'check_projector' => 'Check Projector',
            'check_projector_alignment' => 'Check Projector Alignment',
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
