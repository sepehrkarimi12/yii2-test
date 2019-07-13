<?php

use yii\db\Migration;

/**
 * Class m190710_201657_create_tbl_i_do_ad
 */
class m190710_201657_create_tbl_i_do_ad extends Migration
{
    private $table = 'tbl_i_do_ad';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'cat_id' => $this->integer()->notNull(),
            'city_id' => $this->integer()->notNull(),
            'city_range_id' => $this->integer()->notNull(),
            'title' => $this->string(100)->notNull(),
            'desc' => $this->text()->notNull(),
            'price' => $this->string(20),
            'mobile' => $this->string(11)->notNull(),
            'org_pic' => $this->string()->defaultValue('images/default.jpg'),
            'pic_counts' => $this->smallInteger()->defaultValue(0),
            'status' => $this->boolean()->defaultValue(0),
            'chat' => $this->boolean()->defaultValue(0),
            'expired' => $this->boolean()->defaultValue(0),
            'user_id' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'published_at' => $this->integer(),
        ],'ENGINE InnoDB');

        $this->addForeignKey(
            'fk_cat_id_i_do_ad_to_to_i_do_category_id',
            $this->table,
            'cat_id',
            'tbl_i_do_category',
            'id',
            'NO ACTION',
            'NO ACTION'
        );

        $this->addForeignKey(
            'fk_city_range_id_i_do_ad_to_to_city_range_id',
            $this->table,
            'city_range_id',
            'tbl_city_range',
            'id',
            'NO ACTION',
            'NO ACTION'
        );

        $this->addForeignKey(
            'fk_user_id_i_do_ad_to_to_user',
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
            'fk_cat_id_i_do_ad_to_to_i_do_category_id',
            $this->table
        );

        $this->dropForeignKey(
            'fk_city_range_id_i_do_ad_to_to_city_range_id',
            $this->table
        );


        $this->dropForeignKey(
            'fk_user_id_i_do_ad_to_to_user',
            $this->table
        );

        $this->dropTable($this->table);
    }
}
