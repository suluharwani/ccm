<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminccm extends CI_Controller {
function __construct() {
parent::__construct();
$this->load->model('mdl_peserta');
$this->load->model('mdl_peserta', 'peserta');
$this->load->library('form_validation');
$this->form_validation->set_error_delimiters("<span class='incorrect'>", "</span>");
}
public function index()
	{
	$this->_make_sure_is_admin();
	
	// $data = array('data_peserta' => $this->mdl_peserta->admin()
	// 				);
	$data['title'] = "Tabel Peserta";
	$this->load->view('admin',$data);

	// $this->load->library('Datatables');
	// $this->datatables->select('id,no_daftar,nama,ktp')->from('peserta');
	// echo $this->datatables->generate();

	}
  public function ajax_list()
    {

        $list = $this->peserta->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $datapeserta) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $datapeserta->no_daftar;
            $row[] = $datapeserta->nama;
            $row[] = $datapeserta->ktp;
            $row[] = $datapeserta->id;
            $row[] = $datapeserta->status;
            //add html for action
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->peserta->count_all(),
            "recordsFiltered" => $this->peserta->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
    public function ajax_delete($id)
    {
        $this->peserta->delete_by_id($id);
        // $this->session->set_flashdata('success_msg', lang('success_msg_del'));
        redirect('adminccm/');    }


    /**
     * This function remove mail then redirect to overview
     * @example id=1
     * @param integer $id
     */
    public function remove($id)
    {
        //  print "ddd" .$id;
        // $peserta = $this->peserta->get_new_one($id);
        $this->peserta->delete($id);
        $this->session->set_flashdata('success_msg', lang('success_msg_del'));
        redirect('adminccm/');

    }

// function fetch_user(){
// 	$this->load->model('mdl_peserta');
// 	$fetch_data = $this->mdl_peserta->make_datatables();
// 	$data = array();
// 	foreach ($fetch_data as $row) {
// 		$sub_array = array();
// 		$sub_array[] = $row->id;
// 		$sub_array[] = $row->no_daftar;
// 		$sub_array[] = $row->nama;
// 		$sub_array[] = $row->ktp;
// 		$sub_array[] = '<button type="button" name="update" id="'.$row->id.'" class="btn btn-warning btn-xs">Update</button>';
// 		$sub_array[] = '<button type="button" name="delete" id="'.$row->id.'" class="btn btn-warning btn-xs">Delete</button>';
// 		$data[] = $sub_array;
// 	}
// 	$output = array('draw' => intval($_POST["draw"]) , 
// 					'recordsTotal' => $this->mdl_peserta->get_all_data(),
// 					'recordFiltered' => $this->mdl_peserta->get_filtered_data(),
// 					'data' => $data
// 					);
// 	echo json_encode($output);
// }



function peserta(){
	 $this->load->library('Datatables');
	$this->datatables->select('id,no_daftar,nama,ktp')->from('peserta');
	 echo $this->datatables->generate();
	}



function generate_random_string($length){
	$characters = '23456789abcdefghijklmnopqrstuvwxysABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$randomString = '';
	for ($i=0; $i <$length ; $i++) { 
		$randomString.=$characters[rand(0, strlen($characters)-1)];
	}
	return $randomString;
}

function _hash_string($str){
$hashed_string = password_hash($str, PASSWORD_BCRYPT,  array('cost' => 11 ));
return $hashed_string;
}
function _verify_hash($plain_text_str, $hashed_string){
	$result = password_verify($plain_text_str, $hashed_string);
	return $result;

}
function _make_sure_is_admin(){
	$is_admin = TRUE;
	if ($is_admin!=TRUE) {
			redirect('site_security/not_allowed');

		}	
}
function not_allowed(){
	include 'peringatan.php';
}
}

/* End of file adminccm.php */
/* Location: ./application/controllers/adminccm.php */