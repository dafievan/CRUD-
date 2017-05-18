<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {

	function semuadata(){
		return $this->db->get('siswa')->result_object();
	}

	function buattabel($datatabel){
		$this->load->library('table');
		$template = array(
				'table_open' => '<table class="table table-bordered">'
			);
		$this->table->set_template($template);
		$this->table->set_heading('No','Nama Awal','Nama Akhir','Alamat','Aksi');
		$no=0;
		foreach ($datatabel as $row) {
			$this->table->add_row(
					++$no,
					$row->nama_awal,
					$row->nama_akhir,
					$row->alamat,
					anchor('siswa/edit/'.$row->id,'Edit',array('class'=>'btn btn-success')).'   '.
					anchor('siswa/hapus/'.$row->id,'Hapus',array('class'=>'btn btn-danger'))
				);
		}
		return $this->table->generate();
	}

	function add($data){ ////kasih parameter yg akan dikirim ke controller
		return $this->db->insert('siswa', $data);
	}	

	function delete($param){
		return $this->db->delete('siswa',array('id'=>$param));//id berasal dari db, $param berasal dari uri segment
	}

	function edit($id,$object){
		$this->db->where('id', $id);
		$this->db->update('siswa', $object);
	}

}

/* End of file m_siswa.php */
/* Location: ./application/models/m_siswa.php */