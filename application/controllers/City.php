<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class City extends CI_Controller{

    public function __construct(){

        parent:: __construct();
        if(!get_active_user()){
            redirect(base_url("giris"));
        }
    }

    public function index(){
        $ViewData   =   new stdClass();
        $ViewData->sehirler =   $this->db->get("sehirler")->result();

        $this->load->view('panel/city_list', $ViewData);

    }

    public function delete($id){
        $delete =   $this->db->delete("sehirler", array("id" => $id));

        if ($delete){
            redirect(base_url("sehirler"));
        }else{
            echo "Silme İşlemi Başarısız";
        }
    }

    public  function editPage($id){
        $viewData   =   new stdClass();
        $viewData->sehirler   =   $this->db->where("id" , $id)->get("sehirler")->row();
        $this->load->view("panel/city_edit", $viewData);

    }

    public  function update($id){
       
        $data   = array(
            "sehir_adi" =>   $this->input->post("sehir_adi"),
            "sehir_aciklama" => $this->input->post("sehir_aciklama"),
            "sehir_url" => seo($this->input->post("sehir_url")),
            "sehir_title" =>   $this->input->post("sehir_title"),
            "sehir_description" =>   $this->input->post("sehir_description"),
            "sehir_keywords" =>   $this->input->post("sehir_keywords"),
            "ilce_telkod" =>   $this->input->post("ilce_telkod"),
            "ilce_plaka" =>   $this->input->post("ilce_plaka"),
            "ilceler_liste" =>   $this->input->post("ilceler_liste"),
            "ilce_komsu" =>   $this->input->post("ilce_komsu"),
            "ilce_nufus" =>   $this->input->post("ilce_nufus"),
            "isActive" => $this->input->post("isActive")
        );
        $update =   $this->db->where("id" , $id)->update("sehirler" , $data);

        if($update){
            redirect(base_url("sehirler"));
        }else{
            echo "Şehir Düzenleme Hatası";
        }


    }

    public function newPage(){

        $this->load->view("panel/city_add");

    }

    public  function save(){

        $data   = array(
                    "sehir_adi" =>   $this->input->post("sehir_adi"),
                    "sehir_aciklama" => $this->input->post("sehir_aciklama"),
                    "sehir_url" => seo($this->input->post("sehir_adi")),
                    "sehir_title" =>   $this->input->post("sehir_title"),
                    "sehir_description" =>   $this->input->post("sehir_description"),
                    "sehir_keywords" =>   $this->input->post("sehir_keywords"),
                    "isActive" => $this->input->post("isActive")
                );
                if("sehir_adi" !== ""){
                    $insert =   $this->db->insert("sehirler", $data);
        }

        if ($insert){
            redirect(base_url("sehirler"));
        }else{
            showDangerToast();
        }

    }



























}