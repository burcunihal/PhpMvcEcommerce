<?php
class Database_Model extends CI_Model {
	
	function __construct() {
		parent::__construct();
		
	}
	public function insert_data($table,$data) //fonksiyon tanımladık
	{
		$this->db->insert($table,$data); 
		return true;
	}
	public function update_data($table,$data,$id) 
	{
		$this->db->where("Id",$id); 
		$this->db->update($table,$data); 
		return true;
	}
	public function get_urun($id)
		{
			$sql="SELECT turu.adi as turadi,kategoriler.adi as katadi, kitaplar.* FROM kitaplar
				LEFT JOIN turu
				ON kitaplar.turu=turu.Id
				LEFT JOIN kategoriler
				ON kitaplar.kategori_id=kategoriler.Id
				WHERE kitaplar.Id=$id";
				
		
        
			$query = $this->db->query($sql);
		
			if($query->num_rows() == 1) {
				return $query->result(); 
			} 
			else
			{
            return false; 
			}
		}
	public function get_kategori($id)
		{
			$sql="SELECT turu.adi as turadi,kategoriler.adi as katadi, kitaplar.* FROM kitaplar
				LEFT JOIN turu
				ON kitaplar.turu=turu.Id
				LEFT JOIN kategoriler
				ON kitaplar.kategori_id=kategoriler.Id
				WHERE kitaplar.kategori_id=".$id;
				//"ORDER BY kitaplar.adi";
		
        
			$query = $this->db->query($sql);
		
			if($query->num_rows() == 1) {
				return $query->result(); 
			}
			else 
			{
            return false; 
			}
		}
		public function login($email,$sifre)
		{
			$this->db->select('*');
			$this->db->from('musteriler');
			$this->db->where('email',$email);
			$this->db->where('sifre',$sifre);
			$this->db->limit('1');
			
			$query= $this->db->get();
			if($query->num_rows() == 1)
			{
				return $query->result;
			}
			else{
				return false;
			}
			
		}
		
		
		
}

