<?php

use yii\db\Migration;

/**
 * Class m190620_154434_create_geo_tbl
 */
class m190620_154434_create_geo_tbl extends Migration
{
    private $table = 'tbl_geography';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'ad_id' => $this->integer(),
            'latitude' => $this->string(25)->notNull(),
            'longitude' => $this->string(25)->notNull(),
        ],'ENGINE InnoDB');

        $this->addForeignKey(
            'ad_id_geo_to_ad_tbl',
            $this->table,
            'ad_id',
            'tbl_ad',
            'id',
            'CASCADE',
            'NO ACTION'
        );
    }

    public function down()
    {
        $this->dropForeignKey('ad_id_geo_to_ad_tbl',$this->table);
        $this->dropTable($this->table);
    }

}
