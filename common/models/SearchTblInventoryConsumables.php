<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TblInventoryConsumables;

/**
 * SearchTblInventoryConsumables represents the model behind the search form about `common\models\TblInventoryConsumables`.
 */
class SearchTblInventoryConsumables extends TblInventoryConsumables
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'optimal_storage_level', 'current_stock'], 'integer'],
            [['device_type', 'consumable'], 'safe'],
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
        $query = TblInventoryConsumables::find();

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

        $query->andFilterWhere(['like', 'device_type', $this->device_type])
            ->andFilterWhere(['like', 'consumable', $this->consumable]);

        return $dataProvider;
    }
}
