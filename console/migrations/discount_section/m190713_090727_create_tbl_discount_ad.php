<?php

use yii\db\Migration;

/**
 * Class m190713_090727_create_tbl_discount_ad
 */
class m190713_090727_create_tbl_discount_ad extends Migration
{
    private $table = 'tbl_discount_ad';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'cat_id' => $this->integer()->notNull(),
            'city_id' => $this->integer()->notNull(),
            'city_range_id' => $this->integer()->notNull(),
            'title' => $this->string(50)->notNull(),
            'desc' => $this->text()->notNull(),
            'prev_price' => $this->string(20),
            'price' => $this->string(20),
            'phone_number' => $this->string(11),
            'org_pic' => $this->string()->defaultValue('images/default.jpg'),
            'pic_counts' => $this->smallInteger()->defaultValue(0),
            'chat' => $this->boolean()->defaultValue(0),
            'expired' => $this->boolean()->defaultValue(0),
            'user_id' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'published_at' => $this->integer(),
        ],'ENGINE InnoDB');
    }

    public function down()
    {
    }
}
