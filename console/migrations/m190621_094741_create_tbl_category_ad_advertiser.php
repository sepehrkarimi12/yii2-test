<?php

use yii\db\Migration;

/**
 * Class m190621_094741_create_tbl_category_ad_advertiser
 */
class m190621_094741_create_tbl_category_ad_advertiser extends Migration
{
    private $table = 'tbl_category_ad_advertiser';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'cat_id' => $this->integer(),
            'ad_advertiser_id' => $this->integer(),
        ],'ENGINE InnoDB');

        $this->addForeignKey(
            'cat_id_category_ad_advertiser_to_category_tbl',
            $this->table,
            'cat_id',
            'tbl_category',
            'id',
            'NO ACTION',
            'NO ACTION'
        );

        $this->addForeignKey(
            'ad_advertiser_id_category_ad_advertiser_to_ad_advertiser',
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
        $this->dropForeignKey('cat_id_category_ad_advertiser_to_category_tbl',$this->table);
        $this->dropForeignKey('ad_advertiser_id_category_ad_advertiser_to_ad_advertiser',$this->table);
        $this->dropTable($this->table);
    }
}