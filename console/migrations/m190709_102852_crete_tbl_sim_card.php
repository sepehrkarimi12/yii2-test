<?php

use yii\db\Migration;

/**
 * Class m190709_102852_crete_tbl_sim_card_type
 */
class m190709_102852_crete_tbl_sim_card extends Migration
{

    private $table = 'tbl_sim_card';

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
