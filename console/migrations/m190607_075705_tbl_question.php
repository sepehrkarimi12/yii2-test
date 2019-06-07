<?php

use yii\db\Migration;

/**
 * Class m190607_075705_tbl_question
 */
class m190607_075705_tbl_question extends Migration
{
    private $table = 'tbl_question';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'title' => $this->string(500)->notNull(),
            'text' => $this->text()->notNull(),
            'sort' => $this->integer(),
            'status' => $this->boolean()->notNull()
        ],'ENGINE InnoDB');
    }

    public function down()
    {
        $this->dropTable($this->table);
    }

}
