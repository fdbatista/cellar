<?php

use yii\db\Migration;

/**
 * Class m190205_163027_add_cellar_number_unique_index
 */
class m190205_163027_add_cellar_number_unique_index extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createIndex('idx_product_numbercellar', 'product', 'number, cellar_id', true);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        echo "m190205_163027_add_cellar_number_unique_index cannot be reverted.\n";

        return false;
    }

    /*
      // Use up()/down() to run migration code without a transaction.
      public function up()
      {

      }

      public function down()
      {
      echo "m190205_163027_add_cellar_number_unique_index cannot be reverted.\n";

      return false;
      }
     */
}
