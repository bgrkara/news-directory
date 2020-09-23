<?php
class Supplier_model extends CI_Model{

    public function index(){

        $viewData   =   new stdClass();

        $viewData->rows  =   $this->db->get("supplier")->result();
        return $viewData;

    }

    public  function save($data = array()){

        $result =   $this->db->insert("supplier", $data);
        return $result;

    }

    public function delete($where = array()){
        $result =   $this->db->delete("supplier", $where);
        return $result;
    }

    public function editPage($where = array()){
        $viewData   =   new stdClass();

        $viewData->row  =   $this->db->where($where)->get("supplier")->row();
        return $viewData;
    }

    public function update($where = array(), $data = array()){

        $result =   $this->db->where($where)->update("supplier" , $data);
        return $result;

    }
















}