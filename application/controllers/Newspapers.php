<?php
class newspapers extends CI_Controller{

    public $viewFolder  =   "";

    public function __construct(){

        parent::__construct();
        $this->load->model("newspaper_model");

        if(!get_active_user()){
            redirect(base_url("giris"));
        }
    }

    public function index(){

       $result  = $this->newspaper_model->index();

        $this->load->view("panel/newspaper_list", $result);
    }

    public function sehirler(){
        $viewData	=	new stdClass();
		$items	=	$this->newspaper_model->get_sehirler();
		$viewData->items	=	$items;

		$this->load->view('panel/newspaper_add', $viewData);
    }

    public function newPage(){

        $viewData	=	new stdClass();
		$items	=	$this->newspaper_model->get_sehirler();
        $viewData->items	=	$items;

        $rows	=	$this->newspaper_model->get_gazete();
        $viewData->rows	=	$rows;
        

		$this->load->view('panel/newspaper_add', $viewData);

    }

    public function save(){

        $data   =   array(
            "gazete_adi"     =>     $this->input->post("gazete_adi"),
            "gazete_url"   =>     $this->input->post("gazete_url"),
            "gazete_kategori"     =>     $this->input->post("gazete_kategori"),
            "gazete_sehir"     =>     $this->input->post("gazete_sehir"),
            "gazete_ukle"     =>     $this->input->post("gazete_ukle"),
            "isActive"  =>     $this->input->post("isActive")
        );
        if ("gazete_adi" !== "" and "gazete_url" !== "" and "gazete_kategori" !== ""){
            $insert = $this->newspaper_model->save($data);
        }

        if ($insert){
            redirect("gazeteler");
        }else{
            echo "Gazete Ekleme Hatası";
        }


    }

    public function delete($id){
        $where  =   array(
            "id" => $id
        );
        $delete = $this->newspaper_model->delete($where);
                if ($delete){
                    redirect(base_url("gazeteler"));
                }else{
                    echo "Gazete Silme İşlemi Hatası";
                }

    }

    public function editPage($id){

        $data = array("id" => $id);

        $result = $this->newspaper_model->editPage($data);
        $this->load->view("panel/newspaper_edit" , $result);
    }

    public function update($id){
        $where  =   array(
            "id" => $id
        );
        $data  = array(
            "gazete_adi"     =>     $this->input->post("gazete_adi"),
            "gazete_url"   =>     $this->input->post("gazete_url"),
            "gazete_kategori"     =>     $this->input->post("gazete_kategori"),
            "gazete_sehir"     =>     $this->input->post("gazete_sehir"),
            "gazete_ukle"     =>     $this->input->post("gazete_ukle"),
            "isActive"  =>     $this->input->post("isActive")
        );

        $result =   $this->newspaper_model->update($where,$data);

        if($result){
            redirect(base_url("gazeteler"));
        }else{
            echo "Gazete Düzenleme Hatası";
        }

    }




















}