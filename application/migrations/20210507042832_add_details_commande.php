<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_details_commande extends CI_Migration
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
            'id_commande' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),
            'nom_article' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'prix_article' => array(
                'type' => 'FLOAT',
                'null' => TRUE,
            ),
            'qty_article' => array(
                'type' => 'INT',
                'constraint' => 11,
            )


        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('details_commande');
    }

    public function down()
    {
        $this->dbforge->drop_table('details_commande');
    }

}