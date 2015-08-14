<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_courses".
 *
 * @property integer $id
 * @property string $course_code
 * @property string $course_name
 */
class TblCourses extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_courses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['course_code', 'course_name'], 'required'],
            [['course_name'], 'string'],
            [['course_code'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'course_code' => 'Course Code',
            'course_name' => 'Course Name',
        ];
    }
}
