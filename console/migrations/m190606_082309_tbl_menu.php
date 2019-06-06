<?php

use yii\db\Migration;

/**
 * Class m190606_082309_tbl_menu
 */
class m190606_082309_tbl_menu extends Migration
{
    
    private $table = 'tbl_menu';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'group_id' => $this->integer(),
            'parent_id' => $this->integer(),
            'title' => $this->string()->notNull(),
            'url' => $this->string()->notNull(),
            'sort' => $this->integer(),
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

        $this->addForeignKey(
            'fk_to_self_table',
            'tbl_menu',
            'parent_id',
            'tbl_menu',
            'id',
            'CASCADE',
            'CASCADE'
        );

    }

    public function down()
    {
        $this->dropForeignKey(
            'fk_to_menu_group',
            $this->table
        );

        $this->dropForeignKey(
            'fk_to_self_table',
            $this->table
        );

        $this->dropTable($this->table);
    }
    
}
