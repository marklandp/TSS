<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TblAssetTestStatus;

/**
 * SearchTblAssetTestStatus represents the model behind the search form about `common\models\TblAssetTestStatus`.
 */
class SearchTblAssetTestStatus extends TblAssetTestStatus
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['form_id', 'user_id', 'form_type', 'assigned_to', 'inventory', 'status', 'asset_test'], 'integer'],
            [['closed_by', 'start_date', 'end_date', 'comments'], 'safe'],
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
        $query = TblAssetTestStatus::find();

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
            'form_type' => $this->form_type,
            'closed_by' => $this->closed_by,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'assigned_to' => $this->assigned_to,
            'inventory' => $this->inventory,
            'status' => $this->status,
            'asset_test' => $this->asset_test,
        ]);

        $query->andFilterWhere(['like', 'comments', $this->comments]);

        return $dataProvider;
    }
}
