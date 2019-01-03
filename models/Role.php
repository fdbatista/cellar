<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "role".
 *
 * @property int $id
 * @property string $name
 *
 * @property UserRole[] $userRoles
 * @property User[] $users
 */
class Role extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'role';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
                [['name'], 'required'],
                [['name'], 'string', 'max' => 35],
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
    public function getUserRoles() {
        return $this->hasMany(UserRole::className(), ['role_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers() {
        return $this->hasMany(User::className(), ['id' => 'user_id'])->viaTable('user_role', ['role_id' => 'id']);
    }

}
