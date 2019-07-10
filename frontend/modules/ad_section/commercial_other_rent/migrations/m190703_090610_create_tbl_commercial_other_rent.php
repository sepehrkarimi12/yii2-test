<?php

use yii\db\Migration;

/**
 * Class m190703_090610_create_tbl_commercial_other_rent
 */
class m190703_090610_create_tbl_commercial_other_rent extends Migration
{private $table = 'tbl_commercial_other_rent';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'ad_id' => $this->integer(),
            'area' => $this->integer()->notNull(),
            'ad_type_id' => $this->integer()->notNull(),
            'ad_advertiser_id' => $this->integer()->notNull(),
            'deposit' => $this->integer(),
            'rent_value' => $this->integer(),
            'room_count_id' => $this->integer()->notNull(),
            'created_year_id' => $this->integer(),
        ],'ENGINE InnoDB');

        $this->addForeignKey(
            'ad_id_commercial_other_rent_to_ad_tbl',
            $this->table,
            'ad_id',
            'tbl_ad',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->addForeignKey(
            'ad_type_id_commercial_other_rent_to_ad_type_tbl',
            $this->table,
            'ad_type_id',
            'tbl_ad_type',
            'id',
            'NO ACTION',
            'NO ACTION'
        );

        $this->addForeignKey(
            'ad_advertiser_id_commercial_other_rent_to_ad_advertiser',
            $this->table,
            'ad_advertiser_id',
            'tbl_ad_advertiser',
            'id',
            'NO ACTION',
            'NO ACTION'
        );

        $this->addForeignKey(
            'commercial_other_room_count_id_to_room',
            $this->table,
            'room_count_id',
            'tbl_room',
            'id',
            'NO ACTION',
            'NO ACTION'
        );

        $this->addForeignKey(
            'commercial_other_created_year_id_to_created_year',
            $this->table,
            'created_year_id',
            'tbl_created_year',
            'id',
            'NO ACTION',
            'NO ACTION'
        );

    }

    public function down()
    {
        $this->dropForeignKey(
            'commercial_other_created_year_id_to_created_year',
            $this->table
        );

        $this->dropForeignKey(
            'commercial_other_room_count_id_to_room',
            $this->table
        );

        $this->dropForeignKey(
            'ad_advertiser_id_commercial_other_rent_to_ad_advertiser',
            $this->table
        );

        $this->dropForeignKey(
            'ad_type_id_commercial_other_rent_to_ad_type_tbl',
            $this->table
        );

        $this->dropForeignKey(
            'ad_id_commercial_other_rent_to_ad_tbl',
            $this->table
        );

        $this->dropTable($this->table);

    }

}
