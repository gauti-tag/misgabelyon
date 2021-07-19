<?php
/*defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_clients extends CI_Migration
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
            'nom' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'prenoms' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'telephone' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'addresse' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'ville' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'pays' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'created_at' => array(
                'type' => 'TIMESTAMP',
                'default' => 'current_timestamp',
            )


        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('clients');
    }

    public function down()
    {
        $this->dbforge->drop_table('clients');
    }

}*/