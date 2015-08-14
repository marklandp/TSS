<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_email_list".
 *
 * @property integer $id
 * @property string $fullname
 * @property string $email
 * @property string $status
 * @property integer $frequency
 * @property string $last_date_sent
 * @property string $description
 */
class TblEmailList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_email_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fullname', 'email', 'status', 'frequency', 'last_date_sent', 'description'], 'required'],
            [['fullname', 'status'], 'string'],
            [['frequency'], 'integer'],
            [['last_date_sent'], 'safe'],
            [['email'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fullname' => 'Fullname',
            'email' => 'Email',
            'status' => 'Status',
            'frequency' => 'Frequency',
            'last_date_sent' => 'Last Date Sent',
            'description' => 'Description',
        ];
    }
}
