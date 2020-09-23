<?php
class Newspaper_model extends CI_Model{

    public function index(){

        $viewData   =   new stdClass();

        $viewData->rows  =   $this->db->get("gazeteler")->result();
        return $viewData;
    }

    public function get_sehirler(){
        $result =  $this->db->get("sehirler")->result();
        return $result;
    }

    public function get_gazete(){
        $result =  $this->db->get("gazeteler")->result();
        return $result;
    }

    public  function save($data = array()){

        $result =   $this->db->insert("gazeteler", $data);
        return $result;

    }

    public function delete($where = array()){
        $result =   $this->db->delete("gazeteler", $where);
        return $result;
    }

    public function editPage($where = array()){
        $viewData   =   new stdClass();

        $viewData->row  =   $this->db->where($where)->get("gazeteler")->row();
        return $viewData;
    }

    public function update($where = array(), $data = array()){

        $result =   $this->db->where($where)->update("gazeteler" , $data);
        return $result;

    }
















}