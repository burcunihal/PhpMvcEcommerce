<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kitaplar extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->model('Database_Model');
		$this->load->helper(array('form','url'));
		$this->load->library("session");
		
		
		
       
	}
	
	public function index()
	
	{
		$sql="SELECT turu.adi as turadi,kategoriler.adi as katadi, kitaplar.* FROM kitaplar
				LEFT JOIN turu
				ON kitaplar.turu=turu.Id
				LEFT JOIN kategoriler
				ON kitaplar.kategori_id=kategoriler.Id
				ORDER BY kitaplar.adi";
				
		$query=$this->db->query($sql); //**öğrenciler tablosunu veritabanindan çekmek için
		$data["veri"]=$query->result();  //sorgu sonuçlarını veri değişkenine yükle.
		
		$this->load->view('admin/_header');
		$this->load->view('admin/_siderbar');
		$this->load->view('admin/_kitap_listesi',$data);
		$this->load->view('admin/_footer');
	}
	
	public function ekle()
	{
		$this->load->view('admin/kitap_ekle');
	}
	public function eklekaydet()
	{
		$data=array(
			'adi' => $this->input->post('adi'),
			'turu' => $this->input->post('turu'),
			'yazar' => $this->input->post('yazar'),
			'sayfa_sayisi' => $this->input->post('sayfa_sayisi'),
			'durum' => $this->input->post('durum'),
			
		);
		$this->Database_Model->insert_data("kitaplar",$data);
		$this->session->set_flashdata("sonuc","Ekleme İşlemi Başarı ile Gerçekleştirildi");
		redirect(base_url()."admin/kitaplar");
	}
	public function edit($id)
	{
		
		$result = $this->Database_Model->get_urun($id);
		if($result)
		{
			$sorgu=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
			$data["kategoriler"]=$sorgu->result();
			
			$sorgu=$this->db->query("SELECT * FROM turu ORDER BY adi");
			$data["turu"]=$sorgu->result();
			
			$data["veri"]=$result;
			$this->load->view('admin/kitap_duzenle',$data);
		}
		else
			$this->load->view('admin/sayfayok');
			
		
		
		
	}
	public function guncellekaydet($id)
	{
		$data=array(
			'adi' => $this->input->post('adi'),
			'aciklama' => $this->input->post('aciklama'),
			'keywords' => $this->input->post('keywords'),
			'kategori_id' => $this->input->post('kategori_id'),
			'turu' => $this->input->post('turu'),
			'sfiyat' => $this->input->post('sfiyat'),
			'aciklama' => $this->input->post('aciklama'),
			'durum' => $this->input->post('durum'),
			
		);
		$this->Database_Model->update_data("kitaplar",$data,$id);
		$this->session->set_flashdata("sonuc","Güncelleme İşlemi Başarı ile Gerçekleştirildi");
		redirect(base_url()."admin/kitaplar");
	}
	function delete($id)
	{
		 $this->db->query("DELETE FROM kitaplar WHERE Id=$id");
		 $this->session->set_flashdata("sonuc","Silme İşlemi Başarı ile Gerçekleştirildi");
		 redirect(base_url()."admin/kitaplar");
		 
		 
	}	
    public function goster($id)
	{
		$sorgu=$this->db->query("SELECT * FROM kitaplar WHERE Id=$id");
		$data["veri"]=$sorgu->result();
		$this->load->view('admin/kitap_goster',$data);
		
		
	}	
	public function resim_ekle($id)
	{
		$sorgu=$this->db->query("SELECT * FROM kitaplar WHERE Id=$id");
		$data["veri"]=$sorgu->result();
		
		$this->load->view('admin/kitap_resim_ekleme_formu',$data);
	}
	public function resim_upload($id)
	{
		
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 324;
        $config['max_width']            = 1024;
        $config['max_height']           = 900;
		$this->load->library('upload', $config);
	
		if( ! $this->upload->do_upload('userfile'))
			{
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata("sonuc","Upload hatası".$error);
				redirect(base_url()."admin/kitaplar/kitap_resim_ekle/$id");
			}
	    else
			{
				$data=array(
				'resim' => $this->upload->data('file_name')
				);
				$this->Database_Model->update_data("kitaplar",$data,$id);
		        $this->session->set_flashdata("sonuc","Resim Upload Edildi");
				redirect(base_url()."admin/kitaplar");
			}
		
		
	}
	public function resim_galeri_ekle($id)
	{
		$sorgu=$this->db->query("SELECT * FROM kitaplar WHERE Id=$id");
		$data["veri"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM kitaplar_resim WHERE kitap_id=$id");
		$data["veriler"]=$sorgu->result();
		
		$this->load->view('admin/kitap_resim_galeri_ekleme_formu',$data);
	}
	public function resim_galeri_upload($id)
	{
		
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 324;
        $config['max_width']            = 1024;
        $config['max_height']           = 900;
		$this->load->library('upload', $config);
	
		if( ! $this->upload->do_upload('userfile'))
			{
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata("sonuc","Upload hatası".$error);
				redirect(base_url()."admin/kitaplar/resim_galeri_ekle/$id");
			}
	    else
			{
				$data=array(
				'kitap_id' => $id,
				'resim' => $this->upload->data('file_name')
				);
				$this->Database_Model->insert_data("kitaplar_resim",$data);
			
			    $this->session->set_flashdata("sonuc","Resim Upload Edildi");
				redirect(base_url()."admin/kitaplar/resim_galeri_ekle/$id");
			}
		
		
	}
	function delete_resim($id,$resim_id)
	{
		 $this->db->query("DELETE FROM kitaplar_resim WHERE Id=$resim_id");
		 $this->session->set_flashdata("sonuc","Silme İşlemi Başarı ile Gerçekleştirildi");
		 redirect(base_url()."admin/kitaplar");
		 
	}	
	
	
}
