<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_page extends CI_Controller {

	 public function __construct(){
		 parent::__construct();

		 $this->load->model("home_model");
	 }
	public function index()
	{
		$viewData	=	new stdClass();

		$items	=	$this->home_model->get_sehir();

		/* View'e Gönderieln Değişkenlerin Set Edilmesi*/
		$gazet			=	$this->home_model->get_gazete_home();
		$gazetspor		=	$this->home_model->get_gazete_spor_home();
		$gazetyaban		=	$this->home_model->get_yabanci_home();
		$sponsorhome	=	$this->home_model->sponsor_home();

		$viewData->gazet		=	$gazet;
		$viewData->gazetspor	=	$gazetspor;
		$viewData->gazetyaban	=	$gazetyaban;
		$viewData->sponsorhome	=	$sponsorhome;
		$viewData->items		=	$items;
		$generalsettings =   $this->db->get("home_settings")->row();
		$viewData->generalsettings		=	$generalsettings;

		$this->load->view('index', $viewData);


	}

}
