<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DbSetup {
    public function create_database() {
        $CI =& get_instance();
        $CI->load->database();

        $dbname = 'cuanho';

        $CI->load->dbforge();
        if (!$CI->db->database_exists($dbname)) {
            $CI->db->query("CREATE DATABASE $dbname");
            echo "Database '$dbname' berhasil dibuat!";
        }

        // Pilih database
        $CI->db->query("USE $dbname");

        // Buat tabel contoh
        if (!$CI->db->table_exists('users')) {
            $CI->dbforge->add_field(array(
                'id' => array(
                    'type' => 'INT',
                    'constraint' => 11,
                    'auto_increment' => TRUE
                ),
                'name' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100'
                )
            ));
            $CI->dbforge->add_key('id', TRUE);
            $CI->dbforge->create_table('users');

            echo "Tabel 'users' berhasil dibuat!";
        }
    }
}
