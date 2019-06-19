<?php

use yii\db\Migration;

/**
 * Class m190619_134124_create_imgs_tbl
 */
class m190619_134124_create_imgs_tbl extends Migration
{
    private $table = 'tbl_image';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'ad_id' => $this->integer(),
            'address' => $this->string(50)->notNull(),
        ],'ENGINE InnoDB');

        $this->addForeignKey(
            'ad_id_to_ad_tbl',
            $this->table,
            'ad_id',
            'tbl_ad',
            'id',
            'CASCADE',
            'NO ACTION'
        );
    }

    public function down()
    {
        $this->dropForeignKey('ad_id_to_ad_tbl',$this->table);
        $this->dropTable($this->table);
    }

}
