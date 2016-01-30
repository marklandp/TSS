<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TblAssetLoanStatus;

/**
 * SearchTblAssetLoanStatus represents the model behind the search form about `common\models\TblAssetLoanStatus`.
 */
class SearchTblAssetLoanStatus extends TblAssetLoanStatus
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'entry_id', 'inventory_id', 'received_by', 'status'], 'integer'],
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
        $query = TblAssetLoanStatus::find();

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
            'entry_id' => $this->entry_id,
            'inventory_id' => $this->inventory_id,
            'received_by' => $this->received_by,
            'status' => $this->status,
        ]);

        return $dataProvider;
    }
}
