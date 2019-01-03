<?php

use yii\db\Migration;

/**
 * Class m180829_202530_product_category_type_table
 */
class m180829_200444_create_category_type_table extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable('category_type', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'type_id' => $this->integer()->notNull(),
        ], ($this->db->driverName === 'mysql') ? 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB' : null);
        $this->addForeignKey('fk_categorytype_type', 'category_type', 'type_id', 'category', 'id', 'CASCADE', 'CASCADE');
        $this->createIndex('idx_categorytype_nametype', 'category_type', 'name, type_id', true);
        
        //Rones
        $this->insert('category_type', ['name' => 'Refino', 'type_id' => 1]);
        $this->insert('category_type', ['name' => 'Carta blanca', 'type_id' => 1]);
        $this->insert('category_type', ['name' => 'Silver dry', 'type_id' => 1]);
        $this->insert('category_type', ['name' => 'Carta dorada', 'type_id' => 1]);
        $this->insert('category_type', ['name' => 'Añejo', 'type_id' => 1]);
        
        //Aguardientes
        $this->insert('category_type', ['name' => 'Aguardiente de caña', 'type_id' => 2]);
        
        //Whiskys
        $this->insert('category_type', ['name' => 'Whisky', 'type_id' => 3]);
        
        //Licores
        $this->insert('category_type', ['name' => 'Menta', 'type_id' => 4]);
        $this->insert('category_type', ['name' => 'Naranja', 'type_id' => 4]);
        $this->insert('category_type', ['name' => 'Anís', 'type_id' => 4]);
        $this->insert('category_type', ['name' => 'Crema de vie', 'type_id' => 4]);
        $this->insert('category_type', ['name' => 'Aliñao', 'type_id' => 4]);
        $this->insert('category_type', ['name' => 'Curacao', 'type_id' => 4]);
        $this->insert('category_type', ['name' => 'Eros', 'type_id' => 4]);
        
        //Vinos
        $this->insert('category_type', ['name' => 'Dulce', 'type_id' => 5]);
        $this->insert('category_type', ['name' => 'Tinto', 'type_id' => 5]);
        $this->insert('category_type', ['name' => 'Blanco', 'type_id' => 5]);
        $this->insert('category_type', ['name' => 'Rosado', 'type_id' => 5]);
        
        //Vodkas
        $this->insert('category_type', ['name' => 'Vodka', 'type_id' => 6]);
        
        //Sidras
        $this->insert('category_type', ['name' => 'Dulce', 'type_id' => 7]);
        $this->insert('category_type', ['name' => 'De hielo', 'type_id' => 7]);
        $this->insert('category_type', ['name' => 'Natural', 'type_id' => 7]);
        $this->insert('category_type', ['name' => 'Achampañada', 'type_id' => 7]);
        
        //Champañas
        $this->insert('category_type', ['name' => 'Brut nature', 'type_id' => 8]);
        $this->insert('category_type', ['name' => 'Extra brut', 'type_id' => 8]);
        $this->insert('category_type', ['name' => 'Brut', 'type_id' => 8]);
        $this->insert('category_type', ['name' => 'Extra sec', 'type_id' => 8]);
        $this->insert('category_type', ['name' => 'Sec', 'type_id' => 8]);
        $this->insert('category_type', ['name' => 'Demi sec', 'type_id' => 8]);
        $this->insert('category_type', ['name' => 'Doux', 'type_id' => 8]);
        $this->insert('category_type', ['name' => 'Rose', 'type_id' => 8]);
        $this->insert('category_type', ['name' => 'Cremant', 'type_id' => 8]);
        $this->insert('category_type', ['name' => 'Blanc de blancs', 'type_id' => 8]);
        $this->insert('category_type', ['name' => 'Blanc de nors', 'type_id' => 8]);
        
        //Tequilas
        $this->insert('category_type', ['name' => '51% agave', 'type_id' => 9]);
        $this->insert('category_type', ['name' => '100% agave', 'type_id' => 9]);
        
        //Sakes
        $this->insert('category_type', ['name' => 'Namazake', 'type_id' => 10]);
        $this->insert('category_type', ['name' => 'Junmai', 'type_id' => 10]);
        $this->insert('category_type', ['name' => 'Nigori', 'type_id' => 10]);
        $this->insert('category_type', ['name' => 'Hoshu', 'type_id' => 10]);
        $this->insert('category_type', ['name' => 'Namachozo', 'type_id' => 10]);
        $this->insert('category_type', ['name' => 'Honjozo', 'type_id' => 10]);
        $this->insert('category_type', ['name' => 'Taru', 'type_id' => 10]);
        $this->insert('category_type', ['name' => 'Futsushu', 'type_id' => 10]);
        $this->insert('category_type', ['name' => 'Genshu', 'type_id' => 10]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable('product_category_type');
    }

    /*
      // Use up()/down() to run migration code without a transaction.
      public function up()
      {

      }

      public function down()
      {
      echo "m180829_202530_product_category_type_table cannot be reverted.\n";

      return false;
      }
     */
}
