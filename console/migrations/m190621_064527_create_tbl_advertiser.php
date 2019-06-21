<?php

use yii\db\Migration;

/**
 * Class m190621_064527_create_tbl_advertiser
 */
class m190621_064527_create_tbl_advertiser extends Migration
{
    private $table = 'tbl_ad_advertiser';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'title' => $this->string(70)->notNull(),
        ],'ENGINE InnoDB');
    }

    public function down()
    {
        $this->dropTable($this->table);
    }
}
