<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Translation;

/**
 * SearchTranslation represents the model behind the search form about `common\models\Translation`.
 */
class SearchTranslation extends Translation
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['message', 'translation', 'language', 'category'], 'safe'],
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
        $query = Translation::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'message', $this->message])
            ->andFilterWhere(['like', 'translation', $this->translation])
            ->andFilterWhere(['like', 'language', $this->language])
            ->andFilterWhere(['like', 'category', $this->category]);

        return $dataProvider;
    }
}
