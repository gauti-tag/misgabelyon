<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_transaction extends CI_Migration
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
            'order_id' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'status_id' => array(
                'type' => 'INT',
                'constraint' => 11
            ),
            'transaction_id' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            'currency' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            'paid_transaction_amount' => array(
                'type' => 'INT',
                'constraint' => 100
            ),
            'paid_currency' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            'change_rate' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            'conflictual_transaction_amount' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            'conflictual_currency' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            'wallet' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            'created_at' => array(
                'type' => 'TIMESTAMP',
                'default' => 'current_timestamp'
            )


        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('transaction');
    }

    public function down()
    {
        $this->dbforge->drop_table('transaction');
    }

}