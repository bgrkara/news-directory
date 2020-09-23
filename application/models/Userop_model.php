<?php
class Userop_model extends CI_Model{

    public function login($where = array()){
        return $this->db->where($where)->get("users")->row();
    }

    public function do_login(){
        return $this->db->where($where)->get("users")->row();
    }





































}