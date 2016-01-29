<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TblClassroomSetup;

/**
 * SearchTblClassroomSetup represents the model behind the search form about `common\models\TblClassroomSetup`.
 */
class SearchTblClassroomSetup extends TblClassroomSetup
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['form_id', 'user_id', 'form_type', 'setup_type', 'closed_by', 'assigned_to'], 'integer'],
            [['setup_other', 'start_date', 'end_date', 'update_date', 'inventory', 'comments', 'classroom_other', 'course_code', 'setup_time', 'pickup_time', 'scheduled_start_time', 'scheduled_end_time', 'status', 'classroom'], 'safe'],
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
        $query = TblClassroomSetup::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        $query->joinWith('statuS');
        $query->joinWith('classroom');

        $query->andFilterWhere([
            'form_id' => $this->form_id,
            'user_id' => $this->user_id,
            'form_type' => $this->form_type,
            'setup_type' => $this->setup_type,
            'closed_by' => $this->closed_by,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'update_date' => $this->update_date,
            'assigned_to' => $this->assigned_to,
            //'classroom' => $this->classroom,
            'setup_time' => $this->setup_time,
            'pickup_time' => $this->pickup_time,
            'scheduled_start_time' => $this->scheduled_start_time,
            'scheduled_end_time' => $this->scheduled_end_time,
            //'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'setup_other', $this->setup_other])
            ->andFilterWhere(['like', 'inventory', $this->inventory])
            ->andFilterWhere(['like', 'comments', $this->comments])
            ->andFilterWhere(['like', 'classroom_other', $this->classroom_other])
            ->andFilterWhere(['like', 'course_code', $this->course_code])
			->andFilterWhere(['like','tbl_statuses.status_name',$this->status])
            ->andFilterWhere(['like','tbl_classroom.classroom_name',$this->classroom]);

        return $dataProvider;
    }
}
