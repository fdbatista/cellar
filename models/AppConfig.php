<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "app_config".
 *
 * @property int $id
 * @property string $app_title
 * @property string $about
 * @property string $address
 * @property string $email
 * @property string $phone
 */
class AppConfig extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'app_config';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
                [['app_title', 'about'], 'required'],
                [['app_title', 'email', 'phone'], 'string', 'max' => 50],
                [['about'], 'string', 'max' => 350],
                [['address'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return ModelsData::getLabels();
    }

}
