<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TblAssetTestClassroom;

/**
 * SearchTblAssetTestClassroom represents the model behind the search form about `common\models\TblAssetTestClassroom`.
 */
class SearchTblAssetTestClassroom extends TblAssetTestClassroom
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'inventory_id', 'test_electrical_socket', 'test_vga_socket', 'test_audio_and_video_ports', 'test_ethernet_port_1', 'test_ethernet_port_2', 'check_retractable_screen', 'check_projector_retraction', 'check_projector', 'check_projector_alignment', 'total_projector_bulb_life', 'total_bulb_life_used', 'total_bulb_life_remaining', 'created_date', 'update_date', 'status'], 'integer'],
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
        $query = TblAssetTestClassroom::find();

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
            'test_electrical_socket' => $this->test_electrical_socket,
            'test_vga_socket' => $this->test_vga_socket,
            'test_audio_and_video_ports' => $this->test_audio_and_video_ports,
            'test_ethernet_port_1' => $this->test_ethernet_port_1,
            'test_ethernet_port_2' => $this->test_ethernet_port_2,
            'check_retractable_screen' => $this->check_retractable_screen,
            'check_projector_retraction' => $this->check_projector_retraction,
            'check_projector' => $this->check_projector,
            'check_projector_alignment' => $this->check_projector_alignment,
            'total_projector_bulb_life' => $this->total_projector_bulb_life,
            'total_bulb_life_used' => $this->total_bulb_life_used,
            'total_bulb_life_remaining' => $this->total_bulb_life_remaining,
            'created_date' => $this->created_date,
            'update_date' => $this->update_date,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'service_period', $this->service_period])
            ->andFilterWhere(['like', 'comment', $this->comment]);

        return $dataProvider;
    }
}
