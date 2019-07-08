<?php

use yii\db\Migration;

/**
 * Class m190708_212847_tbl_mobile_brand
 */
class m190708_212847_tbl_mobile_brand extends Migration
{
    private $table = 'tbl_mobile_brand';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
        ],'ENGINE InnoDB');

    }

    public function down()
    {
        $this->dropTable($this->table);
    }
}
