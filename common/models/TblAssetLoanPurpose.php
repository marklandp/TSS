<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_asset_loan_purpose".
 *
 * @property integer $id
 * @property string $purpose
 */
class TblAssetLoanPurpose extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_asset_loan_purpose';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['purpose'], 'required'],
            [['purpose'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'purpose' => 'Purpose',
        ];
    }
}
