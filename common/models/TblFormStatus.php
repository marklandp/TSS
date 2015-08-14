<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_form_status".
 *
 * @property integer $id
 * @property string $status_name
 */
class TblFormStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_form_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status_name'], 'required'],
            [['id'], 'integer'],
            [['status_name'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status_name' => 'Status Name',
        ];
    }
}
