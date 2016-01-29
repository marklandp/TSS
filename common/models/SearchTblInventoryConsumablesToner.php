<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TblInventoryConsumablesToner;

/**
 * SearchTblInventoryConsumablesToner represents the model behind the search form about `common\models\TblInventoryConsumablesToner`.
 */
class SearchTblInventoryConsumablesToner extends TblInventoryConsumablesToner
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'optimal_storage_level', 'current_stock'], 'integer'],
            [['name', 'color'], 'safe'],
            [['storage_point'], 'number'],
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
        $query = TblInventoryConsumablesToner::find();

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
            'optimal_storage_level' => $this->optimal_storage_level,
            'storage_point' => $this->storage_point,
            'current_stock' => $this->current_stock,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'color', $this->color]);

        return $dataProvider;
    }
}
