<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property int $id
 * @property string $name
 *
 * @property Product[] $products
 */
class Country extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'country';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
                [['name'], 'required'],
                [['name'], 'string', 'max' => 255],
                [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return ModelsData::getLabels();
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts() {
        return $this->hasMany(Product::className(), ['country_id' => 'id']);
    }

}
