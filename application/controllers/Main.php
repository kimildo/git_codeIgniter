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

        /**
         * @return array
         * 오류사항 수정
         */
        public function masterMethod()
        {
            $master = array();
            return $master;
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




    }