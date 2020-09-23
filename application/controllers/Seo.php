<?php
Class Seo extends CI_Controller {

	function sitemap()
	{

		$ViewData   =   new stdClass();
		$generalsettings =   $this->db->get("sehirler")->result();
		$sayfa =   $this->db->get("sayfalar")->result();

		$ViewData->generalsettings = $generalsettings;
		$ViewData->sayfa = $sayfa;

		header("Content-Type: text/xml;charset=iso-8859-1");
		$this->load->view("sitemap", $ViewData);
	}
	}
