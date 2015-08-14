<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ActiveRecordLog;

/**
 * SearchActiveRecordLog represents the model behind the search form about `common\models\ActiveRecordLog`.
 */
class SearchActiveRecordLog extends ActiveRecordLog
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'idModel'], 'integer'],
            [['action', 'model', 'field', 'From', 'To', 'creationdate', 'userid'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ActiveRecordLog::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'idModel' => $this->idModel,
            'creationdate' => $this->creationdate,
        ]);

        $query->andFilterWhere(['like', 'action', $this->action])
            ->andFilterWhere(['like', 'model', $this->model])
            ->andFilterWhere(['like', 'field', $this->field])
            ->andFilterWhere(['like', 'From', $this->From])
            ->andFilterWhere(['like', 'To', $this->To])
            ->andFilterWhere(['like', 'userid', $this->userid]);

        return $dataProvider;
    }
}
