<?php
class Userop extends CI_Controller{
    public $viewFolder  =   "";
    public function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->database();
        $this->load->model("userop_model");
    }
    public function login(){

        if(get_active_user()){
            redirect(base_url(""));
        }

        $this->load->view("panel/login");
    }

    public function do_login(){

        if(get_active_user()){
            redirect(base_url("gazeteler"));
        }

        $user   =   $this->userop_model->login(array(
            "user_name" => $this->input->post("user_name"),
            "password" => md5($this->input->post("password")),
            "isActive"  => 1
        ));
        if($user){

            $alert  =   array(
                "title"   =>  "Giriş Başarılıdır",
                "text"   =>  "$user->full_name Hoşgeldiniz",
                "type"    =>  "success"
            );
            $this->session->set_userdata("user", $user);
            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("gazeteler"));
            
        }else{
            $alert  =   array(
                "title"   =>  "İşlem Başarısız",
                "text"   =>  "Lütfen Giriş Bilgilerinizi Kontrol Ediniz!",
                "type"    =>  "error"
            );
            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("giris"));
        }


    }

    public function logout(){
        echo "logout";
        $this->session->unset_userdata("user");
        redirect(base_url("giris"));
    }













}