<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product`.
 */
class m180829_201108_create_product_table extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'description' => $this->string(1000),
            'number' => $this->integer()->notNull(),
            'date' => $this->date()->notNull(),
            'capacity' => $this->float()->notNull(),
            'alcoholic_proof' => $this->float()->notNull(),
            'aging' => $this->integer(),
            'status' => $this->integer()->notNull()->defaultValue(1),
            'price' => $this->float()->notNull(),
            'category_type_id' => $this->integer()->notNull(),
            'brand_id' => $this->integer()->notNull(),
            'country_id' => $this->integer()->notNull(),
            'cellar_id' => $this->integer()->notNull(),
        ], ($this->db->driverName === 'mysql') ? 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB' : null);
        $this->addForeignKey('fk_product_category', 'product', 'category_type_id', 'category_type', 'id', 'RESTRICT', 'CASCADE');
        $this->addForeignKey('fk_product_brand', 'product', 'brand_id', 'brand', 'id', 'RESTRICT', 'CASCADE');
        $this->addForeignKey('fk_product_country', 'product', 'country_id', 'country', 'id', 'RESTRICT', 'CASCADE');
        $this->addForeignKey('fk_product_cellar', 'product', 'cellar_id', 'cellar', 'id', 'RESTRICT', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable('product');
    }

}
