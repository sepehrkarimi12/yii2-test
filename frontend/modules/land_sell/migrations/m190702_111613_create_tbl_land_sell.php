<?php

use yii\db\Migration;

/**
 * Class m190702_111613_create_tbl_land_sell
 */
class m190702_111613_create_tbl_land_sell extends Migration
{
    private $table = 'tbl_land_sell';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'ad_id' => $this->integer(),
            'area' => $this->integer()->notNull(),
            'ad_type_id' => $this->integer()->notNull(),
            'ad_advertiser_id' => $this->integer()->notNull(),
            'national_code' => $this->string(10),
        ],'ENGINE InnoDB');

        $this->addForeignKey(
            'ad_id_land_sell_to_ad_tbl',
            $this->table,
            'ad_id',
            'tbl_ad',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->addForeignKey(
            'ad_type_id_land_sell_to_ad_type_tbl',
            $this->table,
            'ad_type_id',
            'tbl_ad_type',
            'id',
            'NO ACTION',
            'NO ACTION'
        );

        $this->addForeignKey(
            'ad_advertiser_id_land_sell_to_ad_advertiser',
            $this->table,
            'ad_advertiser_id',
            'tbl_ad_advertiser',
            'id',
            'NO ACTION',
            'NO ACTION'
        );
    }

    public function down()
    {
        $this->dropForeignKey(
            'ad_advertiser_id_land_sell_to_ad_advertiser',
            $this->table
        );

        $this->dropForeignKey(
            'ad_type_id_land_sell_to_ad_type_tbl',
            $this->table
        );

        $this->dropForeignKey(
            'ad_id_land_sell_to_ad_tbl',
            $this->table
        );

        $this->dropTable($this->table);

    }
}
