<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class karyawan extends REST_Controller {
	
	function __construct($config = 'rest') {
		parent::__Construct($config);
	}
	
	//Menampilkan data
	public function index_get() {
		
		$id = $this->get('id');
		if ($id == '') {
			$data = $this->db->get('karyawan')->result();
		} else {
			$this->db->where('id_karyawan', $id);
			$data = $this->db->get('karyawan')->result();
		}
		$result = ["took"=>$_SERVER["REQUEST_TIME_FLOAT"],
				   "code"=>200,
				   "message"=>"Response successfully",
				   "data"=>$data];
		$this->response($result, 200);
	    }


   //Menambah data 
   public function index_post() {
    $data = array(
        'id_karyawan'  => $this->post('id_karyawan'),
        'nama_karyawan' => $this->post('nama_karyawan'),
        'JK' => $this->post('JK'),
        'no_hp' => $this->post('no_hp'),
        'alamat'  => $this->post('alamat'));
    $insert = $this->db->insert('karyawan', $data);
    if ($insert) {
        //$this->response($data, 200);
        $result = ["took"=>$_SERVER["REQUEST_TIME_FLOAT"],
            "Code"=>201,
            "message"=>"Data has successfully added",
            "data"=>$data];
        $this->response($result, 201);
    } else {
        $result = ["took"=>$_SERVER["REQUEST_TIME_FLOAT"],
            "code"=>502,
            "message"=>"Failed adding data",
            "data"=>null];
        $this->response($result, 502);  
        }
    }

     //Memperbarui data yang telah ada
     public function index_put() {
        $id = $this->put('id');        
        $data = array (           
            'id_karyawan' => $this->put('id_karyawan'),
            'nama_karyawan' => $this->put('nama_karyawan'),
            'JK' => $this->put('JK'),
            'no_hp' => $this->put('no_hp'),
            'alamat' => $this->put('alamat')
            );
        //echo "<pre>"; print_r($data); 
        $this->db->where('id_karyawan', $id);
        $update = $this->db->update('karyawan', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
     }

    //Menghapus data barang
    public function index_delete() {
        $id = $this->delete('id'); // ini yang ditulis pada key di postman ya...., bukan customerID
        $this->db->where('id_karyawan', $id);
        $delete = $this->db->delete('karyawan');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
  
}
?>