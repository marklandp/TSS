<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_external_user".
 *
 * @property integer $external_user
 * @property integer $id_number
 * @property string $first_name
 * @property string $last_name
 * @property integer $status
 * @property integer $phone_number
 * @property string $email
 */
class TblExternalUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_external_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_number', 'first_name', 'last_name', 'status', 'phone_number', 'email'], 'required'],
            [['id_number', 'status', 'phone_number'], 'integer'],
            [['first_name', 'last_name'], 'string'],
            [['email'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'external_user' => 'External User',
            'id_number' => 'Id Number',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'status' => 'Status',
            'phone_number' => 'Phone Number',
            'email' => 'Email',
        ];
    }
}
