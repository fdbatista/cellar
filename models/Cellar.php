<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cellar".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $avatar
 *
 * @property Product[] $products
 */
class Cellar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cellar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 500],
            [['avatar'], 'string', 'max' => 128],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'avatar' => Yii::t('app', 'Avatar'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['cellar_id' => 'id']);
    }
}
