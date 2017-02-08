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

    }