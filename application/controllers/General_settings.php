<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class General_settings extends CI_Controller{

    public function __construct(){

        parent:: __construct();
        if(!get_active_user()){
            redirect(base_url("giris"));
        }
    }

    public function index(){
        $ViewData   =   new stdClass();
        $generalsettings =   $this->db->get("home_settings")->row();

        $ViewData->generalsettings = $generalsettings;

        $this->load->view('panel/general_settings', $ViewData);

    }

    public  function update(){
       
        $data   = array(     
            "home_title" =>   $this->input->post("home_title"),
            "home_description" =>   $this->input->post("home_description"),
            "home_keywords" => $this->input->post("home_keywords"),
            "home_accordion1" =>   $this->input->post("home_accordion1"),
            "home_accordion2" =>   $this->input->post("home_accordion2"),
            "home_accordion3" =>   $this->input->post("home_accordion3")
        );
        $update =   $this->db->update("home_settings" , $data);

        if($update){
            redirect(base_url("genel-ayarlar"));
        }else{
            echo "Genel Ayarlar için Düzenleme Hatası";
        }


    }




























}