<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $name
 *
 * @property CategoryType[] $categoryTypes
 */
class Category extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'category';
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
    public function getCategoryTypes() {
        return $this->hasMany(CategoryType::className(), ['type_id' => 'id']);
    }

}
