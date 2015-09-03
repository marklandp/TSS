<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TblInventory;

/**
 * SearchTblInventory represents the model behind the search form about `common\models\TblInventory`.
 */
class SearchTblInventory extends TblInventory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inventory_id', 'status', 'type', 'owner'], 'integer'],
            [['inventory_name', 'start_date', 'end_date'], 'safe'],
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
        $query = TblInventory::find();

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
            'inventory_id' => $this->inventory_id,
            'status' => $this->status,
            'type' => $this->type,
            'owner' => $this->owner,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
        ]);

        $query->andFilterWhere(['like', 'inventory_name', $this->inventory_name]);

        return $dataProvider;
    }
}
