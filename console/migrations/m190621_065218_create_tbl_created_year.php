<?php

use yii\db\Migration;

/**
 * Class m190621_065218_create_tbl_created_year
 */
class m190621_065218_create_tbl_created_year extends Migration
{
    private $table = 'tbl_created_year';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'year' => $this->string(15)->notNull(),
        ],'ENGINE InnoDB');
    }

    public function down()
    {
        $this->dropTable($this->table);
    }

}
