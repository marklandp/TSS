<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "translation".
 *
 * @property string $message
 * @property string $translation
 * @property string $language
 * @property string $category
 */
class Translation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'translation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['message', 'translation', 'language', 'category'], 'required'],
            [['message', 'translation', 'category'], 'string', 'max' => 255],
            [['language'], 'string', 'max' => 5]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'message' => 'Message',
            'translation' => 'Translation',
            'language' => 'Language',
            'category' => 'Category',
        ];
    }
}
