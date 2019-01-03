<?php

use yii\db\Migration;

/**
 * Handles the creation of table `brand`.
 */
class m180829_200427_create_brand_table extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable('brand', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
        ], ($this->db->driverName === 'mysql') ? 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB' : null);
        $this->insert('brand', ['name' => 'Havana Club']);
        $this->insert('brand', ['name' => 'Mulata']);
        $this->insert('brand', ['name' => 'Old Premiers']);
        $this->insert('brand', ['name' => 'Chanceler']);
        $this->insert('brand', ['name' => 'Cubay']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable('brand');
    }

}
