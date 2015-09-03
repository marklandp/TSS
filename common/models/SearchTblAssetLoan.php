<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TblAssetLoan;

/**
 * SearchTblAssetLoan represents the model behind the search form about `common\models\TblAssetLoan`.
 */
class SearchTblAssetLoan extends TblAssetLoan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['entry_id', 'form_id', 'user_id', 'form_type', 'closed_by', 'start_date', 'end_date', 'update_date', 'assigned_to',  'expected_return', 'loan_date'], 'integer'],
            [['inventory', 'purpose', 'purpose_other', 'comments','external_user','status'], 'safe'],
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
        $query = TblAssetLoan::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
            'defaultOrder'=>[
                'entry_id'=> SORT_DESC,]
                ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }


        $query->joinWith('externalUser');
        $query->joinWith('statuS');

        $query->andFilterWhere([
            'entry_id' => $this->entry_id,
            'form_id' => $this->form_id,
            'user_id' => $this->user_id,
            'form_type' => $this->form_type,
            'closed_by' => $this->closed_by,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'update_date' => $this->update_date,
            'assigned_to' => $this->assigned_to,
            //'external_user' => $this->external_user,
            'expected_return' => $this->expected_return,
            'loan_date' => $this->loan_date,
            //'status' => 3,
        ]);

        $query->andFilterWhere(['like', 'inventory', $this->inventory])
            ->andFilterWhere(['like', 'purpose', $this->purpose])
            ->andFilterWhere(['like', 'purpose_other', $this->purpose_other])
            ->andFilterWhere(['like', 'comments', $this->comments])
            //->andFilterWhere(['like', 'tbl_external_user.last_name',$this->external_user])
            ->andFilterWhere(['or',
                ['like', 'tbl_external_user.first_name',$this->external_user],
                ['like','tbl_external_user.last_name',$this->external_user]])
            ->andFilterWhere(['like','tbl_statuses.status_name',$this->status]);

        return $dataProvider;
    }
}
