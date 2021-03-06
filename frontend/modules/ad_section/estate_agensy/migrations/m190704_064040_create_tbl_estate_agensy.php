<?php

use yii\db\Migration;

/**
 * Class m190704_064040_create_tbl_estate_agensy
 */
class m190704_064040_create_tbl_estate_agensy extends Migration
{
    private $table = 'tbl_estate_agensy';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'ad_id' => $this->integer(),
            'ad_advertiser_id' => $this->integer()->notNull(),
        ],'ENGINE InnoDB');

        $this->addForeignKey(
            'ad_id_estate_agensy_to_ad_tbl',
            $this->table,
            'ad_id',
            'tbl_ad',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->addForeignKey(
            'ad_advertiser_id_estate_agensy_to_ad_advertiser',
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
            'ad_advertiser_id_estate_agensy_to_ad_advertiser',
            $this->table
        );

        $this->dropForeignKey(
            'ad_id_estate_agensy_to_ad_tbl',
            $this->table
        );

        $this->dropTable($this->table);

    }
}
