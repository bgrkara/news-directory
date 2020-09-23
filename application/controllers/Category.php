<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Category extends CI_Controller{

    public function __construct(){

        parent:: __construct();
        if(!get_active_user()){
            redirect(base_url("giris"));
        }

    }

    public function index(){
        $ViewData   =   new stdClass();
        $ViewData->categories =   $this->db->get("category")->result();

        $this->load->view('panel/category_list', $ViewData);

    }

    public function delete($id){
        $delete =   $this->db->delete("category", array("id" => $id));

        if ($delete){
            redirect(base_url("category"));
        }else{
            echo "Silme İşlemi Başarısız";
        }
    }

    public  function editPage($id){
        $viewData   =   new stdClass();
        $viewData->category   =   $this->db->where("id" , $id)->get("category")->row();
        $this->load->view("panel/category_edit", $viewData);

    }

    public  function update($id){
        $duzen  =   $this->input->post(array("title" ,"isActive"));

        $data   =   array(
            "title"   => $this->input->post("title"),
            "isActive"  => $this->input->post("isActive")
        );
        $update =   $this->db->where("id" , $id)->update("category" , $data);

        if($update){
            redirect(base_url("category"));
        }else{
            echo "Kategori Düzenleme Hatası";
        }


    }

    public function newPage(){

        $this->load->view("panel/category_add");

    }

    public  function save(){

        $data   = array(
                    "title" =>   $this->input->post("title"),
                    "isActive" => $this->input->post("isActive")
                );
                if("title" !== ""){
                    $insert =   $this->db->insert("category", $data);
        }

        if ($insert){
            redirect(base_url("category"));
        }else{
            showDangerToast();
        }

    }



























}