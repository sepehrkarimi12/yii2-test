<?php

use yii\db\Migration;

/**
 * Class m190705_110452_crate_tbl_car_brand
 */
class m190705_110452_crate_tbl_car_brand extends Migration
{
    private $table = 'tbl_car_brand';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'title' => $this->string(50)->notNull(),
        ],'ENGINE InnoDB');

    }

    public function down()
    {
        $this->dropTable($this->table);
    }
}
