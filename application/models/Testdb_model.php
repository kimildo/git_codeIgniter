<?php
    /**
     * Created by PhpStorm.
     * User: Kimildo
     * Date: 2017-02-10
     * Time: 오후 4:42
     */

    class Testdb_model extends CI_Model {
        function __construct(){
            parent::__construct();
        }

        public function mybook(){
            return $this->db->query('SELECT * FROM test_table')->result();
        }

    }


