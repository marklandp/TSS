<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_asset_loan".
 *
 * @property integer $entry_id
 * @property integer $form_id
 * @property integer $user_id
 * @property integer $form_type
 * @property integer $closed_by
 * @property integer $start_date
 * @property integer $end_date
 * @property integer $update_date
 * @property integer $assigned_to
 * @property string $inventory
 * @property string $purpose
 * @property string $purpose_other
 * @property string $comments
 * @property integer $external_user
 * @property integer $expected_return
 * @property integer $loan_date
 * @property integer $status
 */
class TblAssetLoan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_asset_loan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['form_id', 'user_id', 'form_type', 'start_date', 'end_date', 'update_date', 'assigned_to', 'inventory', 'purpose', 'purpose_other', 'comments', 'external_user', 'expected_return', 'loan_date', 'status'], 'required'],
            [['form_id', 'user_id', 'form_type', 'closed_by', 'start_date', 'end_date', 'update_date', 'assigned_to', 'external_user', 'expected_return', 'loan_date', 'status'], 'integer'],
            [['purpose_other'], 'string'],
            [['inventory'], 'string', 'max' => 10],
            [['purpose'], 'string', 'max' => 30],
            [['comments'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'entry_id' => 'Entry ID',
            'form_id' => 'Form ID',
            'user_id' => 'User ID',
            'form_type' => 'Form Type',
            'closed_by' => 'Closed By',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'update_date' => 'Update Date',
            'assigned_to' => 'Assigned To',
            'inventory' => 'Inventory',
            'purpose' => 'Purpose',
            'purpose_other' => 'Purpose Other',
            'comments' => 'Comments',
            'external_user' => 'External User',
            'expected_return' => 'Expected Return',
            'loan_date' => 'Loan Date',
            'status' => 'Status',
        ];
    }
}
