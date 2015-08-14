<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ActiveRecordLog".
 *
 * @property integer $id
 * @property string $action
 * @property string $model
 * @property integer $idModel
 * @property string $field
 * @property string $From
 * @property string $To
 * @property string $creationdate
 * @property string $userid
 */
class ActiveRecordLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ActiveRecordLog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idModel'], 'integer'],
            [['creationdate'], 'safe'],
            [['action'], 'string', 'max' => 20],
            [['model', 'field', 'userid'], 'string', 'max' => 45],
            [['From', 'To'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'action' => 'Action',
            'model' => 'Model',
            'idModel' => 'Id Model',
            'field' => 'Field',
            'From' => 'From',
            'To' => 'To',
            'creationdate' => 'Creationdate',
            'userid' => 'Userid',
        ];
    }
}
