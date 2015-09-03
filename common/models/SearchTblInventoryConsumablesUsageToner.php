<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TblInventoryConsumablesUsageToner;

/**
 * SearchTblInventoryConsumablesUsageToner represents the model behind the search form about `common\models\TblInventoryConsumablesUsageToner`.
 */
class SearchTblInventoryConsumablesUsageToner extends TblInventoryConsumablesUsageToner
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'inventory_id', 'used_quantity', 'assigned_to', 'user'], 'integer'],
            [['date'], 'safe'],
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
        $query = TblInventoryConsumablesUsageToner::find();

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
            'inventory_id' => $this->inventory_id,
            'used_quantity' => $this->used_quantity,
            'assigned_to' => $this->assigned_to,
            'date' => $this->date,
            'user' => $this->user,
        ]);

        return $dataProvider;
    }
}
