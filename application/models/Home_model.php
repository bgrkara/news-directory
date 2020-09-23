<?php
class Home_model extends CI_Model{

    public $sehirtable   =   "sehirler";
    public $gazetetable   =   "gazeteler";
    public $generaltable    =   "home_settings";
    public function __construct(){
        parent::__construct();

    }

    public function get_sehir(){
        return  $this->db->get($this->sehirtable)->result();
    }
    

    
    public function get_gazete_home(){

        return  $this->db->limit(24)->where(array("gazete_kategori" => "ulusal_gazeteler"))->get($this->gazetetable)->result();

    }

    public function get_gazete_spor_home(){

        return  $this->db->limit(24)->where(array("gazete_kategori" => "spor_gazeteleri"))->get($this->gazetetable)->result();

    }

    public function get_yabanci_home(){

        return  $this->db->limit(24)->where(array("gazete_kategori" => "yabanci_gazeteler"))->get($this->gazetetable)->result();

    }

    public function sponsor_home(){
        return  $this->db->limit(6)->where(array("gazete_kategori" => "sponsor_medya"))->get($this->gazetetable)->result();
    }
















}