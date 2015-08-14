<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TblClassroom;

/**
 * SearchTblClassroom represents the model behind the search form about `common\models\TblClassroom`.
 */
class SearchTblClassroom extends TblClassroom
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'serviceable', 'last_date_serviced'], 'integer'],
            [['classroom_name'], 'safe'],
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
        $query = TblClassroom::find();

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
            'serviceable' => $this->serviceable,
            'last_date_serviced' => $this->last_date_serviced,
        ]);

        $query->andFilterWhere(['like', 'classroom_name', $this->classroom_name]);

        return $dataProvider;
    }
}
