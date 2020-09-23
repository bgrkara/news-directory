<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller{

    public $user;

    public function __construct(){
        parent::__construct();
        
        if(!get_active_user()){
            redirect(base_url("giris"));
        }
    }

    public function index()
    {
        $this->load->view('panel/index');
    }









}