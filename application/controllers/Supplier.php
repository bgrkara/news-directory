<?php
class Supplier extends CI_Controller{

    public $viewFolder  =   "";

    public function __construct(){

        parent::__construct();
        $this->load->model("supplier_model");

        if(!get_active_user()){
            redirect(base_url("giris"));
        }
    }

    public function index(){

       $result  = $this->supplier_model->index();

        $this->load->view("panel/supplier_list", $result);
    }

    public function newPage(){

        $this->load->view("panel/supplier_add");

    }

    public function save(){

        $data   =   array(
            "title"     =>     $this->input->post("title"),
            "address"   =>     $this->input->post("address"),
            "phone"     =>     $this->input->post("phone"),
            "email"     =>     $this->input->post("email"),
            "isActive"  =>     $this->input->post("isActive")
        );
        if ("title" !== ""){
            $insert = $this->supplier_model->save($data);
        }

        if ($insert){
            redirect("supplier");
        }else{
            echo "Tedarikçi Ekleme Hatası";
        }


    }

    public function delete($id){
        $where  =   array(
            "id" => $id
        );
        $delete = $this->supplier_model->delete($where);
                if ($delete){
                    redirect(base_url("supplier"));
                }else{
                    echo "Tedarikçi Silme İşlemi Hatası";
                }

    }

    public function editPage($id){

        $data = array("id" => $id);

        $result = $this->supplier_model->editPage($data);
        $this->load->view("panel/supplier_edit" , $result);
    }

    public function update($id){
        $where  =   array(
            "id" => $id
        );
        $data  = array(
            "title" =>  $this->input->post("title"),
            "address" =>  $this->input->post("address"),
            "phone" =>  $this->input->post("phone"),
            "email" =>  $this->input->post("email"),
            "isActive" =>  $this->input->post("isActive")
        );

        $result =   $this->supplier_model->update($where,$data);

        if($result){
            redirect(base_url("supplier"));
        }else{
            echo "Tedarikçi Düzenleme Hatası";
        }

    }




















}