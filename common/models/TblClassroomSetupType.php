<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_classroom_setup_type".
 *
 * @property integer $id
 * @property string $setup_name
 */
class TblClassroomSetupType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_classroom_setup_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['setup_name'], 'required'],
            [['setup_name'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'setup_name' => 'Setup Name',
        ];
    }
}
