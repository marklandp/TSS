<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Permission;

/**
 * SearchPermission represents the model behind the search form about `common\models\Permission`.
 */
class SearchPermission extends Permission
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['principal_id', 'subordinate_id', 'action', 'template'], 'integer'],
            [['type', 'controller', 'comment'], 'safe'],
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
        $query = Permission::find();

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
            'principal_id' => $this->principal_id,
            'subordinate_id' => $this->subordinate_id,
            'action' => $this->action,
            'template' => $this->template,
        ]);

        $query->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'controller', $this->controller])
            ->andFilterWhere(['like', 'comment', $this->comment]);

        return $dataProvider;
    }
}
