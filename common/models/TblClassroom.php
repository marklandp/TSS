<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_classroom".
 *
 * @property integer $id
 * @property string $classroom_name
 * @property integer $serviceable
 * @property integer $last_date_serviced
 */
class TblClassroom extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_classroom';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['classroom_name', 'serviceable', 'last_date_serviced'], 'required'],
            [['serviceable', 'last_date_serviced'], 'integer'],
            [['classroom_name'], 'string', 'max' => 40]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'classroom_name' => 'Classroom Name',
            'serviceable' => 'Serviceable',
            'last_date_serviced' => 'Last Date Serviced',
        ];
    }
}
