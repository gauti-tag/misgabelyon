<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_articles extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(

            'id_articles' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'name_articles' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'old_price_articles' => array(
                'type' => 'FLOAT',
                'constraint' => '255',
            ),
            'new_price_articles' => array(
                'type' => 'FLOAT',
                'null' => TRUE,
            ),
            'percent_articles' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),
            'describe_articles' => array(
                'type' => 'TEXT',
                'null' => TRUE,
            ),
            'file_articles' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'status_articles' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),
            'created_at_articles' => array(
                'type' => 'TIMESTAMP',
                'default' => 'current_timestamp',
            ),
            'created_by_articles' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),
            'modified_at_articles' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'modified_by_articles' => array(
                'type' => 'INT',
                'constraint' => 11,
            )

        ));

        $this->dbforge->add_key('id_articles', TRUE);
        $this->dbforge->create_table('articles');
    }

    public function down()
    {
        $this->dbforge->drop_table('articles');
    }

}