<?php

use yii\db\Migration;

/**
 * Class m190615_112653_rent_apartment
 */
class m190615_112653_rent_apartment extends Migration
{
    private $table = 'tbl_rent_apartment';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'group_id' => $this->integer(),
            'status' => $this->boolean()->notNull()
        ],'ENGINE InnoDB');

        $this->addForeignKey(
            'fk_to_menu_group',
            'tbl_menu',
            'group_id',
            'tbl_menu_group',
            'id',
            'CASCADE',
            'NO ACTION'
        );
    }

    public function down()
    {
        echo "m190615_112653_rent_apartment cannot be reverted.\n";

        return false;
    }
}
