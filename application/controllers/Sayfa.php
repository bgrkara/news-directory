<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sayfa extends CI_Controller {

	 public function __construct(){
		 parent::__construct();

		 $this->load->model("sayfa_model");
	 }
	public function index()
	{
		$viewData	=	new stdClass();

	}

	public function sayfadetay($url = null, $data = null)
    {
		$viewData = new stdClass();

		
		$items	=	$this->sayfa_model->get_sehir();
		$yerelgazete	=	$this->sayfa_model->get_yerel();
		$sponsorhome	=	$this->sayfa_model->sponsor_home();

		$viewData->yerelgazete		=	$yerelgazete;
		$viewData->sponsorhome	=	$sponsorhome;
		$viewData->items	=	$items;

		$sayfa = $this->sayfa_model->get_detay(
			array(
				"isActive"	=>	1,
				"sayfa_url" =>	$url

			)
		);

		$viewData->sayfa	=	$sayfa;

		if (!$sayfa) {
			redirect(base_url());
			die();
		}
		
		$this->load->view('sayfa', $viewData);
		
    }


}
