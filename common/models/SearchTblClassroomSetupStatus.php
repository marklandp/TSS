<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TblClassroomSetupStatus;

/**
 * SearchTblClassroomSetupStatus represents the model behind the search form about `common\models\TblClassroomSetupStatus`.
 */
class SearchTblClassroomSetupStatus extends TblClassroomSetupStatus
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'form_id', 'inventory_id', 'received_by', 'status'], 'integer'],
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
        $query = TblClassroomSetupStatus::find();

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
            'form_id' => $this->form_id,
            'inventory_id' => $this->inventory_id,
            'received_by' => $this->received_by,
            'status' => $this->status,
        ]);

        return $dataProvider;
    }
}
