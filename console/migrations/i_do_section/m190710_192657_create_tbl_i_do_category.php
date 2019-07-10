<?php

use yii\db\Migration;

/**
 * Class m190710_192657_create_tbl_i_do_category
 */
class m190710_192657_create_tbl_i_do_category extends Migration
{
    private $table = 'tbl_i_do_category';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer(),
            'title' => $this->string()->notNull(),
            'sort' => $this->integer(),
            'status' => $this->boolean()->notNull()
        ],'ENGINE InnoDB');

        $this->addForeignKey(
            'fk_parent_id_i_do_category_to_i_do_category_id',
            $this->table,
            'parent_id',
            $this->table,
            'id',
            'NO ACTION',
            'NO ACTION'
        );
    }

    public function down()
    {
        $this->dropForeignKey('fk_parent_id_i_do_category_to_i_do_category_id', $this->table);
        $this->dropTable($this->table);
    }
}
