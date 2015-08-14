<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_toner_inventory".
 *
 * @property integer $form_id
 * @property integer $user_id
 * @property integer $form_type
 * @property string $color
 * @property string $tag
 * @property string $closed_by
 * @property integer $start_date
 * @property integer $end_date
 * @property integer $assigned_to
 * @property integer $inventory
 * @property string $comments
 */
class TblTonerInventory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_toner_inventory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'form_type', 'color', 'tag', 'closed_by', 'start_date', 'end_date', 'assigned_to', 'inventory', 'comments'], 'required'],
            [['user_id', 'form_type', 'start_date', 'end_date', 'assigned_to', 'inventory'], 'integer'],
            [['color'], 'string'],
            [['closed_by'], 'safe'],
            [['tag'], 'string', 'max' => 50],
            [['comments'], 'string', 'max' => 200]
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
            'color' => 'Color',
            'tag' => 'Tag',
            'closed_by' => 'Closed By',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'assigned_to' => 'Assigned To',
            'inventory' => 'Inventory',
            'comments' => 'Comments',
        ];
    }
}
