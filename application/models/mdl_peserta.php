<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_Peserta extends CI_Model {

public $_table = 'peserta';
    var $column_order = array(null, 'no_daftar','nama','ktp'); //set column field database for datatable orderable
    var $column_search = array('no_daftar','nama','ktp'); //set column field database for datatable searchable
    var $order = array('id' => 'asc'); // default order

    function __construct() {
        parent::__construct();
    }
    /*  This function get all news in database sort by order asc.*/





    //// data tables query //////


    private function _get_datatables_query()
    {

        $this->db->from($this->_table);

        $i = 0;

        foreach ($this->column_search as $item) // loop column
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {

                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        }
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $this->_get_custom_field();
        $query = $this->db->get();
        return $query->num_rows();
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        $this->_get_custom_field();

        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
    function _get_custom_field()
    {
        if(isset($_POST['columns'][5]['search']['value']) and $_POST['columns'][5]['search']['value'] !=''){
            $this->db->where('status',$_POST['columns'][5]['search']['value']);
        }
    }
    public function count_all()
    {
        return $this->db->count_all_results('peserta');
    }
    public function delete_by_id($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->_table);
    }
























// var $table = "peserta";
// 	var $select_column = array("id","no_daftar","nama","ktp");
// 	var $order_column = array(null,"no_daftar","nama","ktp",null);

// function make_query(){
// 	$this->db->select($this->select_column);
// 	$this->db->from($this->table);
// 	if (isset($_POST["search"]["value"])) {
// 		$this->db->like('no_daftar', $_POST["search"]["value"]);
// 		$this->db->or_like('nama', $_POST["search"]["value"]);
// 		$this->db->or_like('ktp', $_POST["search"]["value"]);
// 	}
// 	if (isset($_POST["order"])) {
// 		$this->db->order_by($this->order_column[$_POST['order']['0']['column']],$_POST['order']['0'],['dir']);
// 	}else{
// 		$this->db->order_by('id', 'DESC');
// 	}

// }
// function make_datatables(){
// 	$this->make_query();
// 	if ($_POST["length"]!= -1){
// 		$this->db->limit($_POST["length"],$_POST["start"]);
// 	}
// 	$query = $this->db->get();
// 	return $query->result();
// }
// function get_filtered_data(){
// 	$this->make_query();
// 	$query = $this->db->get();
// 	return $query->num_rows();
// }
// function get_all_data(){
// 	$this->db->select('*');
// 	$this->db->from($this->table);
// 	return $this->db->count_all_result();
//}














function peserta(){
	$id = $this->uri->segment(3); 
	$peserta = $this->db->get_where('peserta',array('id' => $id));
	return $peserta;
}
function get_table() {
$table = "peserta";
return $table;
}
function get_max() {
$table = $this->get_table();
$this->db->select_max('id');
$query = $this->db->get($table);
$row=$query->row();
$id=$row->id;
return $id;
}

function _update($id, $data) {
$table = $this->get_table();
$this->db->where('id', $id);
$this->db->update($table, $data);
}
function admin(){
	$query = $this->db->order_by('id','DESC')->get('peserta');
	return $query->result();
}

}

/* End of file model.php */
/* Location: ./application/models/model.php */