<?php if ( ! defined('BASEPATH')) die('No direct script access allowed');

class Migration_110Mentions_Google extends CI_Migration {

    private $_table = 'mentions_google';

    public function up() {
        $fields = array(
            'id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ),
            'mention_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
            ),
            'people_count' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'null' => FALSE,
            ),
            'comments_count' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'null' => FALSE,
            ),
            'plusoners_count' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'null' => FALSE,
            ),
            'resharers_count' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'null' => FALSE,
            ),
        );

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_field($fields);
        $this->dbforge->create_table($this->_table, TRUE);

    }

    public function down() {
        $this->dbforge->drop_table($this->_table);
    }

}