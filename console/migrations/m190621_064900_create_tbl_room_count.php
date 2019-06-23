<?php

use yii\db\Migration;

/**
 * Class m190621_064900_create_tbl_room_count
 */
class m190621_064900_create_tbl_room_count extends Migration
{
    private $table = 'tbl_room';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'title' => $this->string(20),
        ],'ENGINE InnoDB');

        $this->insert($this->table, [
            'title' => 'بدون اتاق',
        ]);

        $this->insert($this->table, [
            'title' => 'یک',
        ]);

        $this->insert($this->table, [
            'title' => 'دو',
        ]);

        $this->insert($this->table, [
            'title' => 'سه',
        ]);

        $this->insert($this->table, [
            'title' => 'چهار',
        ]);

        $this->insert($this->table, [
            'title' => 'پنج یا بیشتر',
        ]);
    }

    public function down()
    {
        $this->dropTable($this->table);
    }

}

