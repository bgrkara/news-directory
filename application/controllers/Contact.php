<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	 public function __construct(){
		 parent::__construct();

		 $this->load->model("contact_model");
	 }
	public function index()
	{
		$viewData = new stdClass();

		$generalsettings =   $this->db->get("home_settings")->row();
		$viewData->generalsettings		=	$generalsettings;
		
		$items			=	$this->contact_model->get_sehir();
		$yerelgazete	=	$this->contact_model->get_yerel();
		$sponsorhome	=	$this->contact_model->sponsor_home();

		$viewData->yerelgazete		=	$yerelgazete;
		$viewData->sponsorhome	=	$sponsorhome;
		$viewData->items	=	$items;

		$this->load->view('iletisim', $viewData);


	}


	public function send(){

		$subject	=	$this->input->post("konu")." - GazeteBul";

		$message	=	'
		<h3 align="center">Gazetebul Bildirim</h3>
		 <table border="1" width="100%" cellpadding="5">
		  <tr>
		   <td width="30%">Ad Soyad</td>
		   <td width="70%">'.$this->input->post("adsoyad").'</td>
		  </tr>
		  <tr>
		   <td width="30%">E-Posta Adresi</td>
		   <td width="70%">'.$this->input->post("eposta").'</td>
		  </tr>
		  <tr>
		   <td width="30%">Telefon Numarası</td>
		   <td width="70%">'.$this->input->post("telefon").'</td>
		  </tr>
		  <tr>
		   <td width="30%">Konu</td>
		   <td width="70%">'.$this->input->post("konu").'</td>
		  </tr>
		  <tr>
		   <td width="30%">Mesaj</td>
		   <td width="70%">'.$this->input->post("mesaj").'</td>
		  </tr>
		 </table>';
		
		$config	=	array(
			"protocol"	=>	"smtp",
			"smtp_host"	=>	"ssl://smtp.gmail.com",
			"smtp_port"	=>	"465",
			"smtp_user"	=>	"gazetebulnet@gmail.com",
			"smtp_pass"	=>	"kara1453*",
			"starttls"	=>	true,
			"charset"	=>	"utf-8",
			"mailtype"	=>	"html",
			"wordwrap"	=>	true,
			"newline"	=>	"\r\n"


		);

		$this->load->library("email", $config);


		$this->email->from($this->input->post("eposta"), "Gazetebul Bildirim");
		$this->email->to("bgrkara@gmail.com");
		$this->email->subject($subject);
		$this->email->message($message);

		if($this->email->send()){

			 $alert  =   array(
                "title"                 =>  "Tebrikler",
                "message"               =>  "Görüşme Talebiniz Gönderildi. En Kısa Sürede Dönüş Yapılacaktır.",
                "color"       =>  "green"
            );
		}else{
			$alert  =   array(
                "title"     =>  "HATA",
                "message"   =>  "Talebiniz Gönderilirken Bir Sorun Oluştu.",
                "color"      =>  "red"
            );
		}
		
		$_SESSION["alert"]  =   $alert;
		redirect("iletisim");



	}


}
