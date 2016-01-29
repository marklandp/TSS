<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TblAssetTestSettings;

/**
 * SearchTblAssetTestSettings represents the model behind the search form about `common\models\TblAssetTestSettings`.
 */
class SearchTblAssetTestSettings extends TblAssetTestSettings
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'start_day', 'end_day'], 'integer'],
            [['current_period'], 'safe'],
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
        $query = TblAssetTestSettings::find();

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
            'start_day' => $this->start_day,
            'end_day' => $this->end_day,
        ]);

        $query->andFilterWhere(['like', 'current_period', $this->current_period]);

        return $dataProvider;
    }
}
