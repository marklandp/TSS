<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TblInventoryType;

/**
 * SearchTblInventoryType represents the model behind the search form about `common\models\TblInventoryType`.
 */
class SearchTblInventoryType extends TblInventoryType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'setup_loan', 'test_day', 'optimal_storage_level', 'storage_point'], 'integer'],
            [['name', 'prefix', 'test_table', 'controller'], 'safe'],
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
        $query = TblInventoryType::find();

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
            'setup_loan' => $this->setup_loan,
            'test_day' => $this->test_day,
            'optimal_storage_level' => $this->optimal_storage_level,
            'storage_point' => $this->storage_point,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'prefix', $this->prefix])
            ->andFilterWhere(['like', 'test_table', $this->test_table])
            ->andFilterWhere(['like', 'controller', $this->controller]);

        return $dataProvider;
    }
}
