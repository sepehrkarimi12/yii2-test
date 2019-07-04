<?php

use yii\db\Migration;

/**
 * Class m190704_072727_create_tbl_participation_in_cunstruction
 */
class m190704_072727_create_tbl_participation_in_cunstruction extends Migration
{
    private $table = 'tbl_participation_in_cunstruction';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'ad_id' => $this->integer(),
            'ad_advertiser_id' => $this->integer()->notNull(),
        ],'ENGINE InnoDB');

        $this->addForeignKey(
            'ad_id_participation_in_cunstruction_to_ad_tbl',
            $this->table,
            'ad_id',
            'tbl_ad',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->addForeignKey(
            'ad_advertiser_id_participation_in_cunstruction_to_ad_advertiser',
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
            'ad_advertiser_id_participation_in_cunstruction_to_ad_advertiser',
            $this->table
        );

        $this->dropForeignKey(
            'ad_id_participation_in_cunstruction_to_ad_tbl',
            $this->table
        );

        $this->dropTable($this->table);

    }

}
