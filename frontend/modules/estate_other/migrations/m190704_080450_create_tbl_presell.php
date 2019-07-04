<?php

use yii\db\Migration;

/**
 * Class m190704_080450_create_tbl_presell
 */
class m190704_080450_create_tbl_presell extends Migration
{
    private $table = 'tbl_estate_presell';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'ad_id' => $this->integer(),
            'ad_advertiser_id' => $this->integer()->notNull(),
        ],'ENGINE InnoDB');

        $this->addForeignKey(
            'ad_id_presell_to_ad_tbl',
            $this->table,
            'ad_id',
            'tbl_ad',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->addForeignKey(
            'ad_advertiser_id_presell_to_ad_advertiser',
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
            'ad_advertiser_id_presell_to_ad_advertiser',
            $this->table
        );

        $this->dropForeignKey(
            'ad_id_presell_to_ad_tbl',
            $this->table
        );

        $this->dropTable($this->table);

    }
}
