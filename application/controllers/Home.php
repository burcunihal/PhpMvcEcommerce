<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		
		parent::__construct();
		
		$this->load->helper('url');
		$this->load->library("session");
		$this->load->model('Database_Model');
		$this->load->database();
		
		//if(!$this->session->userdata('oturum_data')){
			//redirect(base_url().'login');
		//}
	}
	
	public function index()
	{
		$query=$this->db->get("ayarlar"); //**öğrenciler tablosunu veritabanindan çekmek için
		$data["veri"]=$query->result();
		
		$query=$this->db->get("kitaplar"); //**öğrenciler tablosunu veritabanindan çekmek için
		$data["yeniler"]=$query->result();
		
		$query=$this->db->get("kitaplar"); //**öğrenciler tablosunu veritabanindan çekmek için
		$data["encok"]=$query->result();
		
		 $query=$this->db->query("SELECT * FROM kategoriler WHERE Id IN (SELECT kategori_id FROM kitaplar)");
		$data["kategoriler"]=$query->result();
		$data["menu"]="home";
		
		$this->load->view('_header',$data);
		//$this->load->view('_siderbar');
		$this->load->view('_slider');
		$this->load->view('_main_content');
		$this->load->view('_footer');
	}
	/*public function login()
	{
		$this->load->view('login_formu');
	}*/
	public function sayfayok()
	{
			$query=$this->db->get("ayarlar"); //**öğrenciler tablosunu veritabanindan çekmek için
		    $data["veri"]=$query->result();
			$data["menu"]="home";
			
			$this->load->view('_header',$data);
		    $this->load->view('sayfayok');
		    $this->load->view('_footer');
		
	}
	public function urun_detay($id)
	{
		// $query=$this->db->get("kategoriler"); //**öğrenciler tablosunu veritabanindan çekmek için
	    	//   $data["kategoriler"]=$query->result();
		$result = $this->Database_Model->get_urun($id);
		if($result)
		{
			$data["veri"]=$result;
			$sorgu=$this->db->query("SELECT * FROM kitaplar_resim WHERE kitap_id=$id");
			$data["veriler"]=$sorgu->result();
			$data["menu"]="detay";
		  
			
			$this->load->view('_header',$data);
			$this->load->view('urun_detay');
			//$this->load->view('_main_content');
			$this->load->view('_footer');
		
		}
		else
		{
		redirect(base_url()."home/sayfayok");
			
		}
		
	
		
	}
	public function bize_yazin()
	{
			$query=$this->db->get("ayarlar"); //**öğrenciler tablosunu veritabanindan çekmek için
		    $data["veri"]=$query->result();
			
			 $query=$this->db->query("SELECT * FROM kategoriler WHERE Id IN (SELECT kategori_id FROM kitaplar)");
			$data["kategoriler"]=$query->result();
			
			$data["menu"]="bize_yazin";
			
			
			$this->load->view('_header',$data);
		    $this->load->view('bize_yazin');
		    $this->load->view('_footer');
		
	}
	public function mesaj_ekle()
	{
			$data=array(
				'adsoy' => $this->input->post('adsoy'),
				'tel' => $this->input->post('tel'),
				'email' => $this->input->post('email'),
				'konu' => $this->input->post('konu'),
				'mesaj' => $this->input->post('mesaj'),
			);
			$this->Database_Model->insert_data("mesajlar",$data);
			$adsoy=$this->input->post('adsoy');
			$email=$this->input->post('email');
			$query=$this->db->get("ayarlar");  //email veritabanından okuma
			$data["veri"]=$query->result();
			$config = Array(
			'protocol'=>'smtp',
			'smtp_host' => $data["veri"][0]->smtpserver,
			'smtp_port' => $data["veri"][0]->smtpport,     //email server ayarları
			'smtp_user' => $data["veri"][0]->smtpemail,
			'smtp_pass' => $data["veri"][0]->password,
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'wordwrap' =>TRUE
		      );
	
			$mesaj="Değerli :".$adsoy."<br>Göndermiş olduğunuz mesaj alınmıştır.<br>";
			$mesaj.="===========================================";
			$mesaj.=$data["veri"][0]->name."<br>";
			$mesaj.=$data["veri"][0]->adres."<br>";
			$mesaj.=$data["veri"][0]->sehir."<br>";
			$mesaj.=$data["veri"][0]->tel."<br>";
			$mesaj.=$data["veri"][0]->fax."<br>";
			$mesaj.=$data["veri"][0]->email."<br>";
			$mesaj.="Gönderdiğiniz mesaj aşağıdaki gibidir<br>";
			$mesaj.=$this->input->post('message');
		
			header('Content-type: application/json');
				$status = array(
				'type'=>'success',
				'message'=>'Thank you for contact us. As early as possible  we will contact you '
				);

				$name       = @trim(stripslashes($_POST['name'])); 
				$email      = @trim(stripslashes($_POST['email'])); 
				$subject    = @trim(stripslashes($_POST['subject'])); 
				$message    = @trim(stripslashes($_POST['message'])); 
				$email_from = $email;
				$email_to = 'email@email.com';//replace with your email
				$body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;
				$success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');
				echo json_encode($status);
				die;
		
			if ($this->email->send())
				$this->session->set_flashdata("email_sent","email başarılı bir şekilde gönderildi");
			
			else
			{
				$this->session->set_flashdata("email_sent","Email göndermede hata oluştu.");
				show_error($this->email->print_debugger());
			}
		
				$this->session->set_flashdata("sonuc","Mesajınız Başarı ile gönderildi.En kısa sürede sizinle irtibata geçilecektir.");
				redirect(base_url()."home/bize_yazin");
	}


	   public function get_kategori($id)
	  {
		// $result=$this->Database_Model->get_kategori($id);
		 $sorgu=$this->db->query("SELECT * FROM kitaplar WHERE kategori_id=$id");
	     $data["veri"]=$sorgu->result();
	     if($data["veri"])
		    {
			  $sorgu=$this->db->query("SELECT * FROM kitaplar WHERE kategori_id=$id");
			  $data["veri"]=$sorgu->result();
			
			   
			   $data["menu"]="kategoriler";
		    
     		   $query=$this->db->query("SELECT * FROM kategoriler WHERE Id IN (SELECT kategori_id FROM kitaplar)"); //**öğrenciler tablosunu veritabanindan çekmek için
	    	   $data["kategoriler"]=$query->result();
			  
			   $this->load->view('_header',$data);
			   //$this->load->view('siderbar');
			   $this->load->view('kategori');
			   $this->load->view('_footer');
	        }
		 else
		  {
		     redirect(base_url()."home/sayfayok");
			
		  }	
      }
	
	
	

}
