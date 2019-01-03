<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class ModelsData {

    public static function getLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            'app_title' => Yii::t('app', 'Nombre'),
            'about' => Yii::t('app', 'Acerca de'),
            'address' => Yii::t('app', 'Dirección'),
            'email' => Yii::t('app', 'Email'),
            'phone' => Yii::t('app', 'Teléfono'),
            'name' => Yii::t('app', 'Nombre'),
            'description' => Yii::t('app', 'Descripción'),
            'username' => Yii::t('app', 'Nombre de usuario'),
            'auth_key' => Yii::t('app', 'Clave para autorizar'),
            'password_hash' => Yii::t('app', 'Contraseña'),
            'password_reset_token' => Yii::t('app', 'Token para contraseña'),
            'email' => Yii::t('app', 'Correo electrónico'),
            'status' => Yii::t('app', 'Estado'),
            'created_at' => Yii::t('app', 'Creado'),
            'updated_at' => Yii::t('app', 'Actualizado'),
            'number' => Yii::t('app', 'Número'),
            'date' => Yii::t('app', 'Fecha'),
            'capacity' => Yii::t('app', 'Capacidad (ml)'),
            'alcoholic_proof' => Yii::t('app', 'Grado de alcohol'),
            'aging' => Yii::t('app', 'Añejamiento'),
            'price' => Yii::t('app', 'Costo'),
            'category_type_id' => Yii::t('app', 'Sub tipo'),
            'brand_id' => Yii::t('app', 'Marca'),
            'country_id' => Yii::t('app', 'País'),
            'cellar_id' => Yii::t('app', 'Colección'),
        ];
    }

}
