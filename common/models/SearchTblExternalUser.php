<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TblExternalUser;

/**
 * SearchTblExternalUser represents the model behind the search form about `common\models\TblExternalUser`.
 */
class SearchTblExternalUser extends TblExternalUser
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['external_user', 'id_number', 'status', 'phone_number'], 'integer'],
            [['first_name', 'last_name', 'email'], 'safe'],
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
        $query = TblExternalUser::find();

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
            'external_user' => $this->external_user,
            'id_number' => $this->id_number,
            'status' => $this->status,
            'phone_number' => $this->phone_number,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
