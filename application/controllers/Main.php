<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    require 'vendor/autoload.php';
    use DebugBar\StandardDebugBar;

    class Main extends CI_Controller
    {
        private $_hello;
        private $_model;

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

            $data = $this->_model->mybook();
            $jdata = json_encode($data);

            $debugbar["messages"]->addMessage($jdata);

            $params = ['hello'=>$this->_hello, 'debugbarRenderer'=>$debugbarRenderer];

            $this->load->view('main', $params);
            $debugbarRenderer->renderHead();

        }

        protected function _getModel($modelName = 'Testdb_model')
        {
            $this->load->model($modelName);
            $this->_model = $this->{$modelName};
        }

        /**
         * @return array
         * 오류사항 수정 - 급수정
         */
        public function masterMethod()
        {
            return $this->callAjax();
        }

        protected function callAjax()
        {
            return [];
        }
        
        /**
         * 마스터 오류 수정합니다.
         * @return array
         */
        protected function fixedMasterMethod()
        {
        	return [];
        }
        

        /**
         * 이 아래가 브랜치 작업분입니다.
         *
         *
         */
        public function branchMethod()
        {

            $fjlqjkfel = 1;
            $fjlkwejlkf = 2;
        }

        public function branchMethodSecond()
        {

            $a = 1;
            $b = 2;
            $params = array();
        }

        public function branchMethodThird()
        {

            $a = 1;
            $b = 2;
            $c = $a+$b;
            $d = 0;
            return [$a, $b, $c];
        }

        /**
         * 작업 완료 - branch -> master
         */




    }