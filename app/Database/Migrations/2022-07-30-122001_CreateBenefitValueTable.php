<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBenefitValueTable extends Migration
{
    public function up()
    {
        // mendefinisikan properti
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name_benefit' => [
                'type'           => 'TEXT',
            ],
            'nominal' => [
                'type'           => 'BIGINT',
            ],
        ]);

        // mendefinisikan key
        $this->forge->addKey('id', true);

        //mendefinisikan nama tabel
        $this->forge->createTable('benefit_value');
    }

    public function down()
    {
        // drop table if exist role
        $this->forge->dropTable('benefit_value', true);
    }
}
