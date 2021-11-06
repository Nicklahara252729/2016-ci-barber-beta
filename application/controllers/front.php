<?php
if(!defined('BASEPATH')) exit ('No file access allowed');
class Front extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $this->load->helper('url');
        $this->load->view('front/index');
    }
}