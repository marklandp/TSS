<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TblIsInventory;

/**
 * SearchTblIsInventory represents the model behind the search form about `common\models\TblIsInventory`.
 */
class SearchTblIsInventory extends TblIsInventory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['form_id', 'user_id', 'type', 'closed_by', 'start_date', 'end_date', 'assigned_to', 'last_date_serviced', 'status'], 'integer'],
            [['tag', 'inventory', 'purpose', 'comments'], 'safe'],
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
        $query = TblIsInventory::find();

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
            'form_id' => $this->form_id,
            'user_id' => $this->user_id,
            'type' => $this->type,
            'closed_by' => $this->closed_by,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'assigned_to' => $this->assigned_to,
            'last_date_serviced' => $this->last_date_serviced,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'tag', $this->tag])
            ->andFilterWhere(['like', 'inventory', $this->inventory])
            ->andFilterWhere(['like', 'purpose', $this->purpose])
            ->andFilterWhere(['like', 'comments', $this->comments]);

        return $dataProvider;
    }
}
