<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Product;

/**
 * ProductSearch represents the model behind the search form of `app\models\Product`.
 */
class ProductSearch extends Product {

    public $cellar;
    public $category;

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
                [['id', 'number', 'capacity', 'aging', 'category_type_id', 'brand_id', 'country_id', 'cellar_id'], 'integer'],
                [['description', 'date', 'cellar', 'category.type'], 'safe'],
                [['alcoholic_proof', 'price'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios() {
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
    public function search($params) {
        $query = Product::find();

        // add conditions that should always apply here
        $query->joinWith(['cellar']);
        $query->joinWith(['category.type']);
        
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->attributes['cellar'] = [
            'asc' => ['cellar.name' => SORT_ASC],
            'desc' => ['cellar.name' => SORT_DESC],
        ];
        
        /*$dataProvider->sort->attributes['category'] = [
            'asc' => ['category.name' => SORT_ASC],
            'desc' => ['category.name' => SORT_DESC],
        ];*/

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'number' => $this->number,
            'date' => $this->date,
            'capacity' => $this->capacity,
            'alcoholic_proof' => $this->alcoholic_proof,
            'aging' => $this->aging,
            'price' => $this->price,
            'category_type_id' => $this->category_type_id,
            'brand_id' => $this->brand_id,
            'country_id' => $this->country_id,
            'cellar_id' => $this->cellar_id,
        ]);

        $query->andFilterWhere(['like', 'description', $this->description])
                ->andFilterWhere(['like', 'cellar.name', $this->cellar])
                //->andFilterWhere(['like', 'category', $this->getCategory()])
                ;

        return $dataProvider;
    }

}
