<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yerel_page extends CI_Controller {

	 public function __construct(){
		 parent::__construct();

		 $this->load->model("yerel_model");
	 }
	public function index()
	{
		$viewData	=	new stdClass();

	}

	public function yereldetay($url = null, $data = null)
    {
		$viewData = new stdClass();

		$generalsettings =   $this->db->get("home_settings")->row();
		$viewData->generalsettings		=	$generalsettings;
		
		$items			=	$this->yerel_model->get_sehir();
		$yerelgazete	=	$this->yerel_model->get_yerel();
		$sponsorhome	=	$this->yerel_model->sponsor_home();

		$viewData->yerelgazete		=	$yerelgazete;
		$viewData->sponsorhome	=	$sponsorhome;
		$viewData->items	=	$items;

		$gazete = $this->yerel_model->get_detay(
			array(
				"isActive"	=>	1,
				"sehir_url" =>	$url

			)
		);

		if (!$gazete) {
			redirect(base_url());
			die();
		}

		
		$viewData->yerelgazetedetay	= $gazete;

		$viewData->gazeteler	=	$this->yerel_model->gets_detay(
			array(
				"gazeteler.isActive"	=>	1,
				"gazete_sehir" =>	seo($gazete->sehir_adi)

			)
		);
		
		$this->load->view('yerel', $viewData);
		
    }


}
