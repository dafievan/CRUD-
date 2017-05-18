<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	function semuadata(){
		return $this->db->get('user')->result_object();
	}
	
	function buattabel($datatabel){
		$this->load->library('table');
		$template = array(
				'table_open' => '<table class="table table-bordered">'
			);
		$this->table->set_template($template);
		$this->table->set_heading('No','Nama','Jabatan','Jenis Kelamin','No. Telepon','Alamat','Aksi');
		$no=0;
		foreach ($datatabel as $row) {
			$this->table->add_row(
			++$no,
			$row->nama_user,
			$row->jabatan_user,
			$row->jk_user,
			$row->notel_user,
			$row->alamat_user,
			anchor('user/edit/'.$row->id_user, 'Edit', array('class'=>'btn btn-success')).'   '.
			anchor('user/hapus/'.$row->id_user, 'Hapus', array('class'=>'btn btn-danger'))
			);
		}
		return $this->table->generate();
	}

	function add($data){ //parameter ini akan dikirim kebagian con, nama $ di con boleh beda
		return $this->db->insert('doc', $data);
	}

	function delete($param){
		return $this->db->delete('doc',array('id_doc'=>$param));//id berasal dari db, $param berasal dari uri segment 3
	}

	function edit(){
		
	}

}

/* End of file m_user.php */
/* Location: ./application/models/m_user.php */