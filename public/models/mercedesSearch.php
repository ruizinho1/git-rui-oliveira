<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\mercedesmodels;

/**
 * mercedesSearch represents the model behind the search form of `app\models\mercedesmodels`.
 */
class mercedesSearch extends mercedesmodels
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'ano'], 'integer'],
            [['nome', 'motor', 'potencia', 'acelaracao', 'image', 'tipo_combustivel', 'consumo'], 'safe'],
            [['preco'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = mercedesmodels::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'preco' => $this->preco,
            'ano' => $this->ano,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'motor', $this->motor])
            ->andFilterWhere(['like', 'potencia', $this->potencia])
            ->andFilterWhere(['like', 'acelaracao', $this->acelaracao])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'tipo_combustivel', $this->tipo_combustivel])
            ->andFilterWhere(['like', 'consumo', $this->consumo]);

        return $dataProvider;
    }
}
