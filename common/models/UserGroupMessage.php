<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_group_message".
 *
 * @property integer $id
 * @property integer $author_id
 * @property integer $group_id
 * @property integer $createtime
 * @property string $title
 * @property string $message
 */
class UserGroupMessage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_group_message';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['author_id', 'group_id', 'createtime', 'title', 'message'], 'required'],
            [['author_id', 'group_id', 'createtime'], 'integer'],
            [['message'], 'string'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author_id' => 'Author ID',
            'group_id' => 'Group ID',
            'createtime' => 'Createtime',
            'title' => 'Title',
            'message' => 'Message',
        ];
    }
}
