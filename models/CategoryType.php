<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category_type".
 *
 * @property int $id
 * @property string $name
 * @property int $type_id
 *
 * @property Category $type
 * @property Product[] $products
 */
class CategoryType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'type_id'], 'required'],
            [['type_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['name', 'type_id'], 'unique', 'targetAttribute' => ['name', 'type_id']],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['type_id' => 'id']],
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
            'type_id' => Yii::t('app', 'Type ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(Category::className(), ['id' => 'type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['category_type_id' => 'id']);
    }
}
