<?php

use yii\db\Migration;

/**
 * Class m190615_110227_tbl_iran_city
 */
class m190615_110227_tbl_iran_city extends Migration
{
    private $tbl = 'tbl_iran_city';

    public function up()
    {
        $this->createTable($this->tbl,[
            'id' => $this->primaryKey(),
            'title' => $this->string(50)->notNull(),
            'sort' => $this->integer(),
        ],'ENGINE InnoDB');
    }

    public function down()
    {
        $this->dropTable($this->tbl);
    }
}
