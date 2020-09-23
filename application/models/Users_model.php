<?php
class Users_model extends CI_Model{

    public function index(){

        $viewData   =   new stdClass();

        $viewData->rows  =   $this->db->get("users")->result();
        return $viewData;

    }

    public  function save($data = array()){

        $result =   $this->db->insert("users", $data);
        return $result;

    }

    public function delete($where = array()){
        $result =   $this->db->delete("users", $where);
        return $result;
    }

    public function editPage($where = array()){
        $viewData   =   new stdClass();

        $viewData->row  =   $this->db->where($where)->get("users")->row();
        return $viewData;
    }

    public function update($where = array(), $data = array()){

        $result =   $this->db->where($where)->update("users" , $data);
        return $result;

    }

    public function editPass($where = array()){
        $viewData   =   new stdClass();

        $viewData->row  =   $this->db->where($where)->get("users")->row();
        return $viewData;
    }

    public function updatePass($where = array(), $data = array()){

        return $this->db->where($where)->update("users" , $data);


    }

















}