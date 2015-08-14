<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TblAssetTestLaptop;

/**
 * SearchTblAssetTestLaptop represents the model behind the search form about `common\models\TblAssetTestLaptop`.
 */
class SearchTblAssetTestLaptop extends TblAssetTestLaptop
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'inventory_id', 'update_standard_software', 'apply_os_patches', 'update_antivirus', 'update_anti_spyware', 'run_anti_virus_scan', 'run_anti_spyware_scan', 'run_chkdsk', 'run_disk_cleanup', 'run_disk_defragmenter', 'check_all_buttons', 'check_touchpad', 'check_volume_buttons', 'check_internal_mic', 'check_internal_speakers', 'check_all_ports', 'test_adapter', 'charger_laptop', 'turn_off_sleep', 'clean_laptop_monthly', 'date_created', 'update_date', 'status'], 'integer'],
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
        $query = TblAssetTestLaptop::find();

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
            'update_standard_software' => $this->update_standard_software,
            'apply_os_patches' => $this->apply_os_patches,
            'update_antivirus' => $this->update_antivirus,
            'update_anti_spyware' => $this->update_anti_spyware,
            'run_anti_virus_scan' => $this->run_anti_virus_scan,
            'run_anti_spyware_scan' => $this->run_anti_spyware_scan,
            'run_chkdsk' => $this->run_chkdsk,
            'run_disk_cleanup' => $this->run_disk_cleanup,
            'run_disk_defragmenter' => $this->run_disk_defragmenter,
            'check_all_buttons' => $this->check_all_buttons,
            'check_touchpad' => $this->check_touchpad,
            'check_volume_buttons' => $this->check_volume_buttons,
            'check_internal_mic' => $this->check_internal_mic,
            'check_internal_speakers' => $this->check_internal_speakers,
            'check_all_ports' => $this->check_all_ports,
            'test_adapter' => $this->test_adapter,
            'charger_laptop' => $this->charger_laptop,
            'turn_off_sleep' => $this->turn_off_sleep,
            'clean_laptop_monthly' => $this->clean_laptop_monthly,
            'date_created' => $this->date_created,
            'update_date' => $this->update_date,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'service_period', $this->service_period])
            ->andFilterWhere(['like', 'comment', $this->comment]);

        return $dataProvider;
    }
}
