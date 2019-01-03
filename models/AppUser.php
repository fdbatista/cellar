<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

class AppUser extends User implements IdentityInterface {

    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;

    public function getAuthKey(): string {
        return $this->auth_key;
    }

    public function getId() {
        return $this->getPrimaryKey();
    }

    public function validateAuthKey($authKey): bool {
        return $this->auth_key === $authKey;
    }

    public static function findIdentity($id): IdentityInterface {
        return AppUser::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    public static function findIdentityByAccessToken($token, $type = null): IdentityInterface {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    public static function findByUsername($username) {
        return AppUser::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }

    public static function findByPasswordResetToken($token) {
        return (static::isPasswordResetTokenValid($token)) ? AppUser::findOne(['password_reset_token' => $token, 'status' => self::STATUS_ACTIVE]) : null;
    }

    public static function isPasswordResetTokenValid($token) {
        return (empty($token)) ? null : ((int) substr($token, strrpos($token, '_') + 1) + Yii::$app->params['user.passwordResetTokenExpire'] >= time());
    }

    public function validatePassword($password) {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    public function setPassword($password) {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    public function generateAuthKey() {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    public function generatePasswordResetToken() {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    public function removePasswordResetToken() {
        $this->password_reset_token = null;
    }

    public function isAdmin() {
        return ($this->getUserRoles()->where(['role_id' => 1])->one()) !== null;
    }

}
