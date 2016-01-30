<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "role".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property integer $is_membership_possible
 * @property double $price
 * @property integer $duration
 */
class Role extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'role';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['is_membership_possible', 'duration'], 'integer'],
            [['price'], 'number'],
            [['title', 'description'], 'string', 'max' => 255]
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
            'description' => 'Description',
            'is_membership_possible' => 'Is Membership Possible',
            'price' => 'Price',
            'duration' => 'Duration',
        ];
    }
}
