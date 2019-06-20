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
           'category_id' => $this->integer()->notNull(),
           'city_id' => $this->integer()->notNull(),
           'pic_counts' => $this->smallInteger()->defaultValue(0),
           'title' => $this->string(50)->notNull(),
           'desc' => $this->string()->notNull()->notNull(),
           'price' => $this->string(20)->notNull(),
           'latitude' => $this->string(25),
           'longitude' => $this->string(25),
           'user_id' => $this->integer(),
           'published_at' => $this->integer(),
        ],'ENGINE InnoDB');

        $this->addForeignKey(
            'fk_to_category',
            $this->table,
            'category_id',
            'tbl_categories',
            'id',
            'NO ACTION',
            'NO ACTION'
        );

        $this->addForeignKey(
            'fk_to_city',
            $this->table,
            'category_id',
            'tbl_city',
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

        $this->dropForeignKey(
            'fk_to_city',
            $this->table
        );

        $this->dropForeignKey(
            'fk_to_user',
            $this->table
        );

        $this->dropTable($this->table);
    }
}
