<?php
if(!defined('BASEPATH')) exit ('No file access allowed');
class Back extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $this->load->view('back/index');
    }
}