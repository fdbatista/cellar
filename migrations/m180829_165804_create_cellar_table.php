<?php

use yii\db\Migration;

class m180829_165804_create_cellar_table extends Migration {

    public function safeUp() {
        $tableOptions = ($this->db->driverName === 'mysql') ? 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB' : null;
        $this->createTable('cellar', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull()->unique(),
            'description' => $this->string(500),
            'avatar' => $this->string(128),
        ], $tableOptions);
        $this->insert('cellar', ['name' => 'Isabella 15', 'description' => 'Colección de bebidas para la fiesta por los 15 años de Isabella.']);
        $this->insert('cellar', ['name' => 'Daniela 15', 'description' => 'Colección de bebidas para la fiesta por los 15 años de Daniela.']);
    }

    public function safeDown() {
        $this->dropTable('cellar');
    }
}
