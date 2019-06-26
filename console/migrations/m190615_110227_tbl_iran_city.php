<?php

use yii\db\Migration;

/**
 * Class m190615_110227_tbl_iran_city
 */
class m190615_110227_tbl_iran_city extends Migration
{
    private $tbl = 'tbl_iran_city';
    private $tbl_range = 'tbl_city_range';

    public function up()
    {
        $this->createTable($this->tbl,[
            'id' => $this->primaryKey(),
            'title' => $this->string(50)->notNull(),
            'sort' => $this->integer(),
        ],'ENGINE InnoDB');

        $this->createTable($this->tbl_range,[
            'id' => $this->primaryKey(),
            'title' => $this->string(100)->notNull(),
            'city_id' => $this->integer()->notNull(),
        ],'ENGINE InnoDB');

        $this->addForeignKey(
            'city_range_range_to_city_tbl',
            $this->tbl_range,
            'city_id',
            $this->tbl,
            'id',
            'CASCADE',
            'NO ACTION'
        );
    }

    public function down()
    {
        $this->dropForeignKey('city_range_range_to_city_tbl',$this->tbl_range);
        $this->dropTable($this->tbl_range);
        $this->dropTable($this->tbl);
    }
}
