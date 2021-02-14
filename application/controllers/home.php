<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->db->query("SET time_zone='+7:00'");
        
	}

	public function index()
	{
	

	$submit = $this->input->post('submit',TRUE);
		if ($submit=="submit") {
			
			$data = $this->fetch_data_from_post();

			$update_id = $this->get_max();
			redirect('home/peserta/'.$update_id);
		}
	
		$this->load->view('home');
	
	}
	public function peserta($id){
		// $this->db->get('peserta');	
		// $this->db->where('id', $id);
		
		// $id = $this->uri->segment(3);
		
		$this->load->model('mdl_peserta');
		$data['peserta'] = $this->mdl_peserta->peserta()->result();
		

	$this->load->view('peserta',$data);

	} 


function fetch_data_from_post(){
		$id = $this->db->insert_id();
		$ktp = $this->input->post('ktp');
		$nama = $this->input->post('nama');
		$gender = $this->input->post('gender');
		$darah = $this->input->post('darah');
		$ttl = $this->input->post('ttl');
		$alamat = $this->input->post('alamat');
		$kota = $this->input->post('kota');
		$provinsi = $this->input->post('provinsi');
		$kategori_lomba = $this->input->post('kategori_lomba');
		$hp = $this->input->post('hp');
		$komunitas = $this->input->post('komunitas');
		$tgl = date('Y-m-d H:i:s');
		// $status = $this->input->post('status');
		$object = array(
			'ktp' => $ktp, 
			'nama' => $nama, 
			'gender' => $gender, 
			'darah' => $darah, 
			'ttl' => $ttl, 
			'alamat' => $alamat, 
			'kota' => $kota, 
			'provinsi' => $provinsi, 
			'kategori_lomba' => $kategori_lomba, 
			'hp' => $hp, 
			'komunitas' => $komunitas,
			'tgl' => $tgl,
			// 'status' =>$status
		);
		$this->db->insert('peserta', $object);
		return $id;
}
function _update($id, $data) {
		$this->load->model('mdl_store_items');
		$this->mdl_store_items->_update($id, $data);
}
function get_max() {
$this->load->model('mdl_peserta');
$max_id = $this->mdl_peserta->get_max();
return $max_id;
}
}