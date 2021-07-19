<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_commande extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(

            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'code' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'client_id' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),
            'status' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),
            'created_at' => array(
                'type' => 'TIMESTAMP',
                'default' => 'current_timestamp',
            )


        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('commande');
    }

    public function down()
    {
        $this->dbforge->drop_table('commande');
    }

}