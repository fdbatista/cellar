<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m180829_200437_create_category_table extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
        ], ($this->db->driverName === 'mysql') ? 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB' : null);
        $this->insert('category', ['name' => 'Ron']);
        $this->insert('category', ['name' => 'Aguardiente']);
        $this->insert('category', ['name' => 'Whisky']);
        $this->insert('category', ['name' => 'Licor']);
        $this->insert('category', ['name' => 'Vino']);
        $this->insert('category', ['name' => 'Vodka']);
        $this->insert('category', ['name' => 'Sidra']);
        $this->insert('category', ['name' => 'Champaña']);
        $this->insert('category', ['name' => 'Tequila']);
        $this->insert('category', ['name' => 'Sake']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable('category');
    }

}
