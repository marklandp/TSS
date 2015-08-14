<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TblInventoryStatus;

/**
 * SearchTblInventoryStatus represents the model behind the search form about `common\models\TblInventoryStatus`.
 */
class SearchTblInventoryStatus extends TblInventoryStatus
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'inventory_type', 'user_current_stock', 'generated_current_stock'], 'integer'],
            [['inventory_date'], 'safe'],
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
        $query = TblInventoryStatus::find();

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
            'inventory_type' => $this->inventory_type,
            'user_current_stock' => $this->user_current_stock,
            'generated_current_stock' => $this->generated_current_stock,
        ]);

        $query->andFilterWhere(['like', 'inventory_date', $this->inventory_date]);

        return $dataProvider;
    }
}
