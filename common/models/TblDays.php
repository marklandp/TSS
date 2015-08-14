<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_days".
 *
 * @property integer $id
 * @property string $day
 * @property integer $index
 */
class TblDays extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_days';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['day', 'index'], 'required'],
            [['day'], 'string'],
            [['index'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'day' => 'Day',
            'index' => 'Index',
        ];
    }
}
