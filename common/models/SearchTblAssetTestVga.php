<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TblAssetTestVga;

/**
 * SearchTblAssetTestVga represents the model behind the search form about `common\models\TblAssetTestVga`.
 */
class SearchTblAssetTestVga extends TblAssetTestVga
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'inventory_id', 'test_cable', 'length', 'created_date', 'update_date', 'status'], 'integer'],
            [['service_period', 'comment'], 'safe'],
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
        $query = TblAssetTestVga::find();

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
            'test_cable' => $this->test_cable,
            'length' => $this->length,
            'created_date' => $this->created_date,
            'update_date' => $this->update_date,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'service_period', $this->service_period])
            ->andFilterWhere(['like', 'comment', $this->comment]);

        return $dataProvider;
    }
}
