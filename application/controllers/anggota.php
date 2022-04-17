<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class anggota extends REST_Controller {
	
	function __construct($config = 'rest') {
		parent::__Construct($config);
	}
	
	//Menampilkan data
	public function index_get() {
		
		$id = $this->get('id');
		if ($id == '') {
			$data = $this->db->get('anggota')->result();
		} else {
			$this->db->where('id_anggota', $id);
			$data = $this->db->get('anggota')->result();
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
        'id_anggota'  => $this->post('id_anggota'),
        'nama_anggota' => $this->post('nama_anggota'),
        'JK' => $this->post('JK'),
        'jurusan' => $this->post('jurusan'),
        'alamat'  => $this->post('alamat'));
    $insert = $this->db->insert('anggota', $data);
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
            'id_anggota' => $this->put('id_anggota'),
            'nama_anggota' => $this->put('nama_anggota'),
            'JK' => $this->put('JK'),
            'jurusan' => $this->put('jurusan'),
            'alamat' => $this->put('alamat')
            );
        //echo "<pre>"; print_r($data); 
        $this->db->where('id_anggota', $id);
        $update = $this->db->update('anggota', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
     }

    //Menghapus data barang
    public function index_delete() {
        $id = $this->delete('id'); // ini yang ditulis pada key di postman ya...., bukan customerID
        $this->db->where('id_anggota', $id);
        $delete = $this->db->delete('anggota');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
  
}
?>