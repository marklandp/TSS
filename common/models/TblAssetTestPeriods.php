<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_asset_test_periods".
 *
 * @property integer $id
 * @property string $periods
 */
class TblAssetTestPeriods extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_asset_test_periods';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['periods'], 'required'],
            [['periods'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'periods' => 'Periods',
        ];
    }
}
