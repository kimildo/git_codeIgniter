<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    require 'vendor/autoload.php';
    use DebugBar\StandardDebugBar;

    class Main extends CI_Controller
    {
        private $_hello;

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

            $params = ['hello'=>$this->_hello, 'debugbarRenderer'=>$debugbarRenderer];
            $this->load->view('main', $params);

            $debugbarRenderer->renderHead();

        }
		
		public function masterMethod()
        {
			$master = array();
			return $master;
		}

        /**
         * @return array
         * 오류사항 수정
         */
		public function masterAddMethod()
        {
            $master = array();
            return $master;
        }
        
        /**
         * @return array
         * dfefe
         */
        public function masterAddMethod2()
        {
        	$master = array();
        	return $master;
        }
        
        public function masterAddMethod3()
        {
        	$master = array();
        	return $master;
        }
        
        public function masterAddMethod4()
        {
        	$master = array();
        	return $master;
        }
        
        public function masterAddMethod5()
        {
        	$master = array();
        	return $master;
        }

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


    }