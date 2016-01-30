<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_inventory_status_details".
 *
 * @property integer $id
 * @property integer $missing
 * @property integer $repair
 * @property integer $replace
 */
class TblInventoryStatusDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_inventory_status_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'missing', 'repair', 'replace'], 'required'],
            [['id', 'missing', 'repair', 'replace'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'missing' => 'Missing',
            'repair' => 'Repair',
            'replace' => 'Replace',
        ];
    }
}
