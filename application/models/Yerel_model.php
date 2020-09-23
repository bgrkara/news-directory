<?php
class Yerel_model extends CI_Model{

    public $sehirtable   =   "sehirler";
    public $gazetetable   =   "gazeteler";
    public function __construct(){
        parent::__construct();

    }

    public function get_sehir(){

        return  $this->db->get($this->sehirtable)->result();

    }

    public function get_detay($where = array()){
        return $this->db->where($where)->get($this->sehirtable)->row(); 
    }

    public function gets_detay($where = array()){
        return $this->db->where($where)->join('sehirler', 'sehirler.sehir_adi = gazeteler.gazete_sehir')->get("gazeteler")->result(); 
    }

    public function get_gazete($data = array()){
        return $this->db->where($data)->get($this->gazetetable)->row(); 
    }
    
    public function get_gazete_home(){

        return  $this->db->limit(24)->where(array("gazete_kategori" => "ulusal_gazeteler"))->get($this->gazetetable)->result();

    }

    public function get_gazete_spor_home(){
        return  $this->db->limit(24)->where(array("gazete_kategori" => "spor_gazeteleri"))->get($this->gazetetable)->result();
    }

    public function sponsor_home(){
        return  $this->db->limit(6)->where(array("gazete_kategori" => "sponsor_medya"))->get($this->gazetetable)->result();
    }

    public function get_yerel(){
        return  $this->db->limit(24)->where(array("gazete_kategori" => "yerel_gazeteler"))->get($this->gazetetable)->result();
    }
















}