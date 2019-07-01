<?php

use yii\db\Migration;

/**
 * Class m190617_070256_create_tbl_ad
 */
class m190617_070256_create_tbl_ad extends Migration
{
    private $table = 'tbl_ad';

    public function up()
    {
        $this->createTable($this->table,[
           'id' => $this->primaryKey(),
           'cat_id' => $this->integer()->notNull(),
           'city_id' => $this->integer()->notNull(),
           'city_range_id' => $this->integer(),
           'title' => $this->string(50)->notNull(),
           'desc' => $this->string()->notNull(),
           'price' => $this->string(20),
           'mobile' => $this->string(11)->notNull(),
//           'latitude' => $this->string(25),
//           'longitude' => $this->string(25),
           'org_pic' => $this->string(40)->defaultValue('images/default.jpg'),
           'pic_counts' => $this->smallInteger()->defaultValue(0),
           'immediate' => $this->boolean()->defaultValue(0),
           'chat' => $this->boolean()->defaultValue(0),
           'exchange' => $this->boolean()->defaultValue(0),
           'expired' => $this->boolean()->defaultValue(0),
           'user_id' => $this->integer(),
           'created_at' => $this->integer(),
           'updated_at' => $this->integer(),
           'published_at' => $this->integer(),
        ],'ENGINE InnoDB');

        $this->addForeignKey(
            'fk_to_category',
            $this->table,
            'cat_id',
            'tbl_categories',
            'id',
            'NO ACTION',
            'NO ACTION'
        );

//        $this->addForeignKey(
//            'fk_to_city',
//            $this->table,
//            'city_id',
//            'tbl_city',
//            'id',
//            'NO ACTION',
//            'NO ACTION'
//        );

        $this->addForeignKey(
            'fk_to_city_range',
            $this->table,
            'city_range_id',
            'tbl_city_range',
            'id',
            'NO ACTION',
            'NO ACTION'
        );

        $this->addForeignKey(
            'fk_to_user',
            $this->table,
            'user_id',
            'user',
            'id',
            'NO ACTION',
            'NO ACTION'
        );
    }

    public function down()
    {
        $this->dropForeignKey(
            'fk_to_category',
            $this->table
        );

//        $this->dropForeignKey(
//            'fk_to_city',
//            $this->table
//        );

        $this->dropForeignKey(
            'fk_to_city_range',
            $this->table
        );


        $this->dropForeignKey(
            'fk_to_user',
            $this->table
        );

        $this->dropTable($this->table);
    }
}
