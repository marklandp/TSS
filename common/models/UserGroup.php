<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_group".
 *
 * @property integer $id
 * @property integer $owner_id
 * @property string $participants
 * @property string $title
 * @property string $description
 */
class UserGroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_group';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['owner_id', 'title', 'description'], 'required'],
            [['owner_id'], 'integer'],
            [['participants', 'description'], 'string'],
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
            'owner_id' => 'Owner ID',
            'participants' => 'Participants',
            'title' => 'Title',
            'description' => 'Description',
        ];
    }
}
