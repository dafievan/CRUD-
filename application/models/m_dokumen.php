<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dokumen extends CI_Model {

	function semuadata(){
		return $this->db->get('doc')->result_object();
	}

	function buattabel($datatabel){
		$this->load->library('table');
		$template = array(
				'table_open' => '<table class="table table-bordered">'
			);
		$this->table->set_template($template);
		$this->table->set_heading('No','Judul','Isi','Keterangan','Tanggal Masuk','Tipe Dokumen','Aksi');
		$no=0;
		foreach ($datatabel as $row) {
			$this->table->add_row(
				++$no,
				$row->judul_doc,
				$row->isi_doc,
				$row->ket_doc,
				$row->tgl_masuk,
				$row->type_doc,
				anchor('dokumen/edit/'.$row->id_doc,'Edit',array('class'=>'btn btn-success')).'   '.
				anchor('dokumen/hapus/'.$row->id_doc,'Hapus',array('class'=>'btn btn-danger'))
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

/* End of file m_dokumen.php */
/* Location: ./application/models/m_dokumen.php */