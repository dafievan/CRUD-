<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('m_user');
	}

	public function index()
	{
		$semuadata = $this->m_user->semuadata();

		if ($semuadata) {
			$vtabel = $this->m_user->buattabel($semuadata);
			$data['tabel'] = $vtabel;
		}
		else{
			echo "<h1>Data Tidak Ada</h1>";
			$this->load->view('template');
		}

		$data['content'] = 'user/v_user';
		$this->load->view('template', $data);
	}

	function tambah(){
		if ($this->input->post('submit')) {
			
			$this->form_validation->set_rules('n_namaus', 'Nama User', 'trim|required');
			$this->form_validation->set_rules('n_jabatanus', 'Jabatan User', 'trim|required');
			$this->form_validation->set_rules('n_jkus', 'Jenis Kelamin', 'trim|required');
			$this->form_validation->set_rules('n_notelus', 'No Telepon', 'trim|required');
			$this->form_validation->set_rules('n_alamatus', 'Alamat', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$data['content'] = 'user/f_inuser';
				$this->load->view('template',$data);
			} else {
				$a = $this->input->post('n_namaus');
				$b = $this->input->post('n_jabatanus');
				$c = $this->input->post('n_jkus');
				$d = $this->input->post('n_notelus');
				$e = $this->input->post('n_alamatus');
				//proses memasukan form ke db
				$object = array(
							'nama_user' =>$a,
							'jabatan_user' =>$b,
							'jk_user' =>$c,
							'notel_user' =>$d,
							'alamat_user' =>$e,
					);
				$query = $this->m_user->add($object);

				if ($query) {
					$this->session->set_flashdata('info', 'Berhasil Dimasukan');
					redirect('user');
				}
				else{
					$this->session->set_flashdata('info', 'Gagal Dimasukan');
					redirect('user');
				}
			}
		}
		else{
			$data['content'] = 'user/f_inuser';
			$this->load->view('template',$data);
		}
	}

	function hapus($id){
		$this->m_user->delete($id);//$id ini untuk menampung dari model.
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
			$a = $this->input->post('n_namaus');
			$b = $this->input->post('n_jabatanus');
			$c = $this->input->post('n_jkus');
			$d = $this->input->post('n_notelus');
			$e = $this->input->post('n_alamatus');
			//proses memasukan form ke db
			$object = array(
						'nama_user' =>$a,
						'jabatan_user' =>$b,
						'jk_user' =>$c,
						'notel_user' =>$d,
						'alamat_user' =>$e,
				);
			$this->db->where('id_user', $id);

			$this->db->update('user', $object);
			if ($this->db->affected_rows()) {
				$this->session->set_flashdata('info', 'Sudah Diedit');
				redirect('user');
			}
			else{
				$this->session->set_flashdata('info', 'Gagal Diedit');
				redirect('user');
			}
		}
		//proses untuk mengambil data dari db
		$data['content'] = 'user/f_eduser';
		$data['editdata'] = $this->db->get_where('user', array('id_user'=>$id))->row();
		$this->load->view('template', $data);
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */