<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "permission".
 *
 * @property integer $principal_id
 * @property integer $subordinate_id
 * @property string $type
 * @property integer $action
 * @property string $controller
 * @property integer $template
 * @property string $comment
 */
class Permission extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'permission';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['principal_id', 'subordinate_id', 'type', 'action', 'controller', 'template'], 'required'],
            [['principal_id', 'subordinate_id', 'action', 'template'], 'integer'],
            [['type', 'controller', 'comment'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'principal_id' => 'Principal ID',
            'subordinate_id' => 'Subordinate ID',
            'type' => 'Type',
            'action' => 'Action',
            'controller' => 'Controller',
            'template' => 'Template',
            'comment' => 'Comment',
        ];
    }
}
