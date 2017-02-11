<?php
    /**
     * Created by PhpStorm.
     * User: Kimildo
     * Date: 2017-02-10
     * Time: 오후 4:42
     */

    class Testdb_model extends CI_Model 
    {
    	protected $_DB;
    	protected $_WDB;
    	
        function __construct()
        {
            parent::__construct();
            $this->_getDatabase('local');
        }

        public function getSimpleData() 
        {
        	return $this->_DB->query('SELECT * FROM test_table')->result();
        }
        
        public function addSimpleData()
        {
        	return $this->_WDB->insert('test_table', ['seq'=>'','user_name'=>'kkkkkk', 'reg_date'=>date('Y-m-d H:i:s')]);
        }
        
        protected function _getDatabase($dbName = 'local')
        {
        	$this->_DB = $this->load->database($dbName . '_slave', TRUE);
        	$this->_WDB = $this->load->database($dbName . '_master', TRUE);
        }

    }


