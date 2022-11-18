<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Items extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'varchar',
                'constraint' => 255
            ],
            'publisher' => [
                'type' => 'varchar',
                'constraint' => 255
            ],
            'book_category' => [
                'type' => 'varchar',
                'constraint' => 255
            ],
            'price' => [
                'type' => 'decimal'
            ],
            'qty' => [
                'type' => 'decimal'
            ],
        ]);
        $this->forge->addPrimaryKey('id', TRUE);
        $this->forge->createTable('items', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('items');
    }
}