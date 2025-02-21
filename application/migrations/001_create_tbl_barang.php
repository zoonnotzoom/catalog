<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_Tbl_Barang extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'nama_barang' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'harga' => array(
                'type' => 'DECIMAL',
                'constraint' => '10,2'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('tbl_barang');

        echo "Tabel 'tbl_barang' berhasil dibuat!";
    }

    public function down() {
        $this->dbforge->drop_table('tbl_barang');
    }
}
