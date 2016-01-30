<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "action".
 *
 * @property integer $id
 * @property string $title
 * @property string $comment
 * @property string $subject
 */
class Action extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'action';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['comment'], 'string'],
            [['title', 'subject'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'comment' => 'Comment',
            'subject' => 'Subject',
        ];
    }
}
