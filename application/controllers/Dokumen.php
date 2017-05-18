<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('m_dokumen');
	}

	public function index(){
		$semuadata = $this->m_dokumen->semuadata();

		if ($semuadata) {
			$vtabel = $this->m_dokumen->buattabel($semuadata);
			$data['tabel'] = $vtabel;
		}
		else{
			echo "<h1>Data tidak Ada</h1>";
			$this->load->view('template');			
		}

		$data['content'] = 'dokumen/v_dokumen';
		$this->load->view('template',$data);		
	}

	function tambah(){
		if ($this->input->post('submit')) {
			
			$this->form_validation->set_rules('n_juduldok', 'Judul', 'trim|required');
			$this->form_validation->set_rules('n_isidok', 'Isi', 'trim|required');
			$this->form_validation->set_rules('n_keterangandok', 'Keterangan', 'trim|required');
			$this->form_validation->set_rules('n_tglmskdok', 'Tanggal Masuk', 'trim|required');
			$this->form_validation->set_rules('n_tipedok', 'Tipe', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$data['content'] = 'dokumen/f_indokumen';
				$this->load->view('template',$data);
			} else {
				$a = $this->input->post('n_juduldok');
				$b = $this->input->post('n_isidok');
				$c = $this->input->post('n_keterangandok');
				$d = $this->input->post('n_tglmskdok');
				$e = $this->input->post('n_tipedok');
				//proses memasukan form ke db
				$object = array(
							'judul_doc' =>$a,
							'isi_doc' =>$b,
							'ket_doc' =>$c,
							'tgl_masuk' =>$d,
							'type_doc' =>$e,
					);
				$query = $this->m_dokumen->add($object);

				if ($query) {
					$this->session->set_flashdata('info', 'Berhasil Dimasukan');
					redirect('dokumen');
				}
				else{
					$this->session->set_flashdata('info', 'Gagal Dimasukan');
					redirect('dokumen');
				}
			}
		}
		else{
			$data['content'] = 'dokumen/f_indokumen';
			$this->load->view('template',$data);
		}
	}

	function hapus($id){
		$this->m_dokumen->delete($id);//$id ini untuk menampung dari model.
		if ($this->db->affected_rows()) {
			$this->session->set_flashdata('info', 'Berhasil Dihapus');
			redirect('dokumen');
		}
		else{
			$this->session->set_flashdata('info', 'Gagal Dihapus');
			redirect('dokumen');
		}
	}

	function edit($id){
		//proses untuk menyimpan
		if ($this->input->post('submit')) {
			$a = $this->input->post('n_juduldok');
			$b = $this->input->post('n_isidok');
			$c = $this->input->post('n_keterangandok');
			$d = $this->input->post('n_tglmskdok');
			$e = $this->input->post('n_tipedok');
			//proses memasukan form ke db
			$object = array(
						'judul_doc' =>$a,
						'isi_doc' =>$b,
						'ket_doc' =>$c,
						'tgl_masuk' =>$d,
						'type_doc' =>$e,
				);
			$this->db->where('id_doc', $id);

			$this->db->update('doc', $object);
			if ($this->db->affected_rows()) {
				$this->session->set_flashdata('info', 'Sudah Diedit');
				redirect('dokumen');
			}
			else{
				$this->session->set_flashdata('info', 'Gagal Diedit');
				redirect('dokumen');
			}
		}
		//proses untuk mengambil data dari db
		$data['content'] = 'dokumen/f_eddokumen';
		$data['editdata'] = $this->db->get_where('doc', array('id_doc'=>$id))->row();
		$this->load->view('template', $data);
	}

}

/* End of file Dokumen.php */
/* Location: ./application/controllers/Dokumen.php */