<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sayfa_panel extends CI_Controller{

    public function __construct(){

        parent:: __construct();
        if(!get_active_user()){
            redirect(base_url("giris"));
        }
    }

    public function index(){
        $ViewData   =   new stdClass();
        $ViewData->sayfalar =   $this->db->get("sayfalar")->result();

        $this->load->view('panel/sayfa_list', $ViewData);

    }

    public function delete($id){
        $delete =   $this->db->delete("sayfalar", array("id" => $id));

        if ($delete){
            redirect(base_url("sayfalar"));
        }else{
            echo "Silme İşlemi Başarısız";
        }
    }

    public  function editPage($id){
        $viewData   =   new stdClass();
        $viewData->sayfalar   =   $this->db->where("id" , $id)->get("sayfalar")->row();
        $this->load->view("panel/sayfa_edit", $viewData);

    }

    public  function update($id){
       
        $data   = array(
            "sayfa_adi" =>   $this->input->post("sayfa_adi"),
            "sayfa_icerik" => $this->input->post("sayfa_icerik"),
            "sayfa_title" => $this->input->post("sayfa_title"),
            "sayfa_description" =>   $this->input->post("sayfa_description"),
            "sayfa_keywords" =>   $this->input->post("sayfa_keywords"),
            "sayfa_url" =>   seo($this->input->post("sayfa_url")),
            "isActive" => $this->input->post("isActive")
        );
        $update =   $this->db->where("id" , $id)->update("sayfalar" , $data);

        if($update){
            redirect(base_url("sayfalar"));
        }else{
            echo "Şehir Düzenleme Hatası";
        }


    }

    public function newPage(){

        $this->load->view("panel/sayfa_add");

    }

    public  function save(){

        $data   = array(
                    "sayfa_adi" =>   $this->input->post("sayfa_adi"),
                    "sayfa_icerik" => $this->input->post("sayfa_icerik"),
                    "sayfa_title" => $this->input->post("sayfa_title"),
                    "sayfa_description" =>   $this->input->post("sayfa_description"),
                    "sayfa_keywords" =>   $this->input->post("sayfa_keywords"),
                    "sayfa_url" =>   seo($this->input->post("sayfa_adi")),
                    "isActive" => $this->input->post("isActive")
                );
                if("sayfa_adi" !== ""){
                    $insert =   $this->db->insert("sayfalar", $data);
        }

        if ($insert){
            redirect(base_url("sayfalar"));
        }else{
            showDangerToast();
        }

    }



























}