<?php

use yii\db\Migration;

/**
 * Class m190624_100451_create_tbl_category_model_address
 */
class m190624_100451_create_tbl_category_model_address extends Migration
{
    private $table = 'tbl_category_model_address';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'cat_id' => $this->integer()->notNull(),
            'model_address' => $this->string()->notNull(),
        ],'ENGINE InnoDB');

        $this->addForeignKey(
            'cat_id_category_model_address_to_category_tbl',
            $this->table,
            'cat_id',
            'tbl_category',
            'id',
            'CASCADE',
            'CASCADE'
        );
    }

    public function down()
    {
        $this->dropForeignKey('cat_id_category_model_address_to_category_tbl',$this->table);
        $this->dropTable($this->table);
    }

}
