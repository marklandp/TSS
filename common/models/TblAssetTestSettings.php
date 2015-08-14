<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_asset_test_settings".
 *
 * @property integer $id
 * @property integer $start_day
 * @property integer $end_day
 * @property string $current_period
 */
class TblAssetTestSettings extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_asset_test_settings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['start_day', 'end_day', 'current_period'], 'required'],
            [['start_day', 'end_day'], 'integer'],
            [['current_period'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'start_day' => 'Start Day',
            'end_day' => 'End Day',
            'current_period' => 'Current Period',
        ];
    }
}
