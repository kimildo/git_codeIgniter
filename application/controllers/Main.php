<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    require 'vendor/autoload.php';
    use DebugBar\StandardDebugBar;

    class Main extends CI_Controller
    {
        private $_hello;
        private $_model;
        private $_helper;

        public function __construct()
        {
            parent::__construct();

            if (empty($this->_hello)) {
                $this->_hello = 'hello main';
            }
        }

        public function index()
        {
            $debugbar = new StandardDebugBar();
            $debugbarRenderer = $debugbar->getJavascriptRenderer();
            //$debugbar["messages"]->addMessage("hello world!");

            if (empty($this->_model)) {
                $this->_getModel();
            }

            $data = $this->_model->getSimpleData();
            $jdata = json_encode($data);

            $debugbar["messages"]->addMessage($jdata);

            $params = [
                'hello'=>$this->_hello,
                'jdata'=> $data,
                'debugbarRenderer'=>$debugbarRenderer
            ];

            $this->load->view('main', $params);
            $debugbarRenderer->renderHead();

        }

        protected function _getModel($modelName = 'Testdb_model')
        {
            $this->load->model($modelName);
            $this->_model = $this->{$modelName};
        }

        
        protected function _getHelper($helper = 'Array') 
        {
        	$this->load->helper($helper);
        	$this->_helper = $this->{$helper};
        }
        
        private function masterPrivateAdd()
        {
        	 
        }
        
        protected function _branchMethod()
        {
        	
        }
        
        protected function _branchMethod2()
        {
        	 
        }
        
        protected function _branchMethod3()
        {
        
        }

        




    }