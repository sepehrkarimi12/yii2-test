<?php

use yii\db\Migration;

/**
 * Class m190621_063653_create_tbl_ad_type
 */
class m190621_063653_create_tbl_ad_type extends Migration
{
    private $table = 'tbl_ad_type';

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
