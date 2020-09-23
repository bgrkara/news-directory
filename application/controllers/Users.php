<?php
class Users extends CI_Controller{

    public $viewFolder  =   "";

    public function __construct(){

        parent::__construct();
        $this->viewFolder   =   "";
        $this->load->model("users_model");

        if(!get_active_user()){
            redirect(base_url("giris"));
        }
    }

    public function index(){

       $result  = $this->users_model->index();

        $this->load->view("panel/users_list", $result);
    }

    public function newPage(){

        $this->load->view("panel/users_add");

    }

    public function save(){

        $data   =   array(
            "user_name"     =>     $this->input->post("user_name"),
            "full_name"   =>     $this->input->post("full_name"),
            "email"     =>     $this->input->post("email"),
            "password"     =>     $this->input->post("password"),
            "isActive"  =>     $this->input->post("isActive")
        );
        if ("title" !== ""){
            $insert = $this->users_model->save($data);
        }

        if ($insert){

            $alert  =   array(
              "title"   =>  "İşlem Başarılıdır",
              "text"   =>  "Kayıt Başarılı Bir Şekilde Eklendi",
              "type"    =>  "success"

            );
        }else{
            $alert  =   array(
                "title"   =>  "İşlem Başarısızdır",
                "text"   =>  "Kayıt Ekleme Sırasında Bir Hata Oluştu",
                "type"    =>  "error"
            );
        }
        //İşlemin Sonucunu Session'a Yazma İşlemi
        $this->session->set_flashdata("alert", $alert);
        redirect(base_url("users"));

        /*$this->load->library("form_validation");

        // KURALLAR
        $this->form_validation->set_rules("user_name","Kullanıcı Adı","required|trim");
        $this->form_validation->set_rules("password","Şifre","required|trim");
        $this->form_validation->set_message(
            array(
                "required"  =>  "{field} Alanı Doldurulmalıdır."
            )
        );

        //Form Validation Çalış (True / False)
        $validate   =   $this->form_validation->run();
        if ($validate){

        }else{
            echo validation_errors();
        }

*/
    }

    public function delete($id){
        $where  =   array(
            "id" => $id
        );
        $delete = $this->users_model->delete($where);
                if ($delete){

                    $alert  =   array(
                        "title"   =>  "İşlem Başarılıdır",
                        "text"   =>  "Silme İşlemi Başarılı Bir Şekilde Gerçekleşti",
                        "type"    =>  "success"
                    );

                }else{
                    $alert  =   array(
                        "title"   =>  "İşlem Başarısızdır",
                        "text"   =>  "Silme İşlemi Sırasında Bir Hata Oluştu",
                        "type"    =>  "error"
                    );
                }

                $this->session->set_flashdata("alert", $alert);
                redirect(base_url("users"));

    }

    public function editPage($id){

        $data = array("id" => $id);

        $result = $this->users_model->editPage($data);
        $this->load->view("panel/users_edit" , $result);
    }

    public function update($id){
        $where  =   array(
            "id" => $id
        );
        $data  = array(
            "user_name" =>  $this->input->post("user_name"),
            "full_name" =>  $this->input->post("full_name"),
            "email" =>  $this->input->post("email"),
            "isActive" =>  $this->input->post("isActive")
        );

        $result =   $this->users_model->update($where,$data);

        if($result){
            $alert  =   array(
                "title"   =>  "İşlem Başarılıdır",
                "text"   =>  "Düzenleme İşlemi Başarılı Bir Şekilde Gerçekleşti",
                "type"    =>  "success"
            );
        }else{
            $alert  =   array(
                "title"   =>  "İşlem Başarısızdır",
                "text"   =>  "Düzenleme İşlemi Sırasında Bir Hata Oluştu",
                "type"    =>  "error"
            );
        }
        $this->session->set_flashdata("alert", $alert);
        redirect(base_url("users"));
    }

    public function editPass($id){
        $data = array("id" => $id);

        $result = $this->users_model->editPage($data);
        $this->load->view("panel/users_passedit" , $result);
    }
    public function updatePass($id){
        $where  =   array(
            "id" => $id
        );
        $data  = array(
            "password" =>  md5($this->input->post("password"))
        );

        $result =   $this->users_model->updatePass($where,$data);

        if($result){
            $alert  =   array(
                "title"   =>  "İşlem Başarılıdır",
                "text"   =>  "Şifre Yenileme İşlemi Başarılı Bir Şekilde Gerçekleşti",
                "type"    =>  "success"
            );
        }else{
            $alert  =   array(
                "title"   =>  "İşlem Başarısızdır",
                "text"   =>  "Şifre Yenileme İşlemi Sırasında Bir Hata Oluştu",
                "type"    =>  "error"
            );
        }
        $this->session->set_flashdata("alert", $alert);
        redirect(base_url("users"));
    }
































}