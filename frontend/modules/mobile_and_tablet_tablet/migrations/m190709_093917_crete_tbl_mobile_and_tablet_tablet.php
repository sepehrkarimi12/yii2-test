<?php

use yii\db\Migration;

/**
 * Class m190709_093917_crete_tbl_mobile_and_tablet_tablet
 */
class m190709_093917_crete_tbl_mobile_and_tablet_tablet extends Migration
{

    private $table = 'tbl_mobile_and_tablet_tablet';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'ad_id' => $this->integer(),
            'brand_id' => $this->integer(),
            'ad_type_id' => $this->integer()->notNull(),
        ],'ENGINE InnoDB');

        $this->addForeignKey(
            'ad_id_mobile_and_tablet_tablet_to_ad_tbl',
            $this->table,
            'ad_id',
            'tbl_ad',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->addForeignKey(
            'brand_id_mobile_and_tablet_tablet_to_mobile_brand',
            $this->table,
            'brand_id',
            'tbl_mobile_brand',
            'id',
            'NO ACTION',
            'NO ACTION'
        );

        $this->addForeignKey(
            'ad_type_id_mobile_and_tablet_tablet_to_ad_type_tbl',
            $this->table,
            'ad_type_id',
            'tbl_ad_type',
            'id',
            'NO ACTION',
            'NO ACTION'
        );

    }

    public function down()
    {
        $this->dropForeignKey(
            'ad_id_mobile_and_tablet_tablet_to_ad_tbl',
            $this->table
        );

        $this->dropForeignKey(
            'brand_id_mobile_and_tablet_tablet_to_mobile_brand',
            $this->table
        );

        $this->dropForeignKey(
            'ad_type_id_mobile_and_tablet_tablet_to_ad_type_tbl',
            $this->table
        );

        $this->dropTable($this->table);
    }

}
