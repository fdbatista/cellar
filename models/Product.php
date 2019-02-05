<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $description
 * @property int $number
 * @property int $date
 * @property double $capacity
 * @property double $alcoholic_proof
 * @property int $aging
 * @property double $price
 * @property int $category_type_id
 * @property int $brand_id
 * @property int $country_id
 * @property int $cellar_id
 *
 * @property Brand $brand
 * @property CategoryType $categoryType
 * @property Cellar $cellar
 * @property Country $country
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number', 'date', 'capacity', 'alcoholic_proof', 'price', 'category_type_id', 'brand_id', 'country_id', 'cellar_id'], 'required'],
            [['number', 'aging', 'category_type_id', 'brand_id', 'country_id', 'cellar_id'], 'integer'],
            [['capacity', 'alcoholic_proof', 'price'], 'number'],
            [['description'], 'string', 'max' => 1000],
            [['brand_id'], 'exist', 'skipOnError' => true, 'targetClass' => Brand::className(), 'targetAttribute' => ['brand_id' => 'id']],
            [['category_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => CategoryType::className(), 'targetAttribute' => ['category_type_id' => 'id']],
            [['cellar_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cellar::className(), 'targetAttribute' => ['cellar_id' => 'id']],
            [['country_id'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['country_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return ModelsData::getLabels();
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrand()
    {
        return $this->hasOne(Brand::className(), ['id' => 'brand_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategoryType()
    {
        return $this->hasOne(CategoryType::className(), ['id' => 'category_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCellar()
    {
        return $this->hasOne(Cellar::className(), ['id' => 'cellar_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Country::className(), ['id' => 'country_id']);
    }
}
