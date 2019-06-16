<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kullanicilar extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library("session");
		$this->load->helper('url');
		
		if(!$this->session->userdata('oturum_data')){
			redirect(base_url().'admin/login');
		}
		
		$this->load->database();
		$this->load->model('Database_Model');
		
       
	}
	
	public function index()
	{
		$query=$this->db->get("kullanicilar"); //**öğrenciler tablosunu veritabanindan çekmek için
		$data["veri"]=$query->result();  //sorgu sonuçlarını veri değişkenine yükle.
		
		$this->load->view('admin/_header');
		$this->load->view('admin/_siderbar');
		$this->load->view('admin/_kullanicilar_listesi',$data);
		$this->load->view('admin/_footer');
	}
	
	public function ekle()
	{
		$this->load->view('admin/kullanici_ekle');
	}
	public function eklekaydet()
	{
		$data=array(
			'adi' => $this->input->post('adi'),
			'email' => $this->input->post('email'),
			'sifre' => $this->input->post('sifre'),
			'yetki' => $this->input->post('yetki'),
			'durum' => $this->input->post('durum'),
			
		);
		$this->Database_Model->insert_data("kullanicilar",$data);
		$this->session->set_flashdata("sonuc","Ekleme İşlemi Başarı ile Gerçekleştirildi");
		redirect(base_url()."admin/kullanicilar");
	}
	public function edit($id)
	{
		$sorgu=$this->db->query("SELECT * FROM kullanicilar WHERE Id=$id");
		$data["veri"]=$sorgu->result();
		$this->load->view('admin/kullanici_duzenle',$data);
	}
	public function guncellekaydet($id)
	{
		$data=array(
			'adi' => $this->input->post('adi'),
			'email' => $this->input->post('email'),
			'sifre' => $this->input->post('sifre'),
			'yetki' => $this->input->post('yetki'),
			'durum' => $this->input->post('durum'),
			
		);
		$this->Database_Model->update_data("kullanicilar",$data,$id);
		$this->session->set_flashdata("sonuc","Güncelleme İşlemi Başarı ile Gerçekleştirildi");
		redirect(base_url()."admin/kullanicilar");
	}
	function delete($id)
	{
		 $this->db->query("DELETE FROM kullanicilar WHERE Id=$id");
		 $this->session->set_flashdata("sonuc","Silme İşlemi Başarı ile Gerçekleştirildi");
		 redirect(base_url()."admin/kullanicilar");
		 
	}	
public function goster($id)
	{
		$sorgu=$this->db->query("SELECT * FROM kullanicilar WHERE Id=$id");
		$data["veri"]=$sorgu->result();
		$this->load->view('admin/kullanici_goster',$data);
	}	
	
	
}
