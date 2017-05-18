<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('m_siswa');
	}

	public function index(){
		$semuadata = $this->m_siswa->semuadata();

		if ($semuadata) {
			$vtabel = $this->m_siswa->buattabel($semuadata);
			$data['tabel'] = $vtabel;
		}
		else{
			echo "<h1>Data Tidak Ada</h1>";
		}

		$data['content'] = 'siswa/v_siswa';
		$this->load->view('template',$data);
	}

	public function tambah(){
		if ($this->input->post('submit')) {
			
			$this->form_validation->set_rules('n_awal', 'Nama Awal', 'trim|required');
			$this->form_validation->set_rules('n_akhir', 'Nama Akhir', 'trim|required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$data['content'] = 'siswa/f_insiswa';
				$this->load->view('template',$data);			
			} 
			else {
				//proses ambil data dari form
				$a = $this->input->post('n_awal');
				$b = $this->input->post('n_akhir');
				$c = $this->input->post('alamat');
				//proses memasukan form ke db
				$object = array(
							'nama_awal' =>$a,
							'nama_akhir' =>$b,
							'alamat' =>$c
					);
				$query = $this->m_siswa->add($object);

				if ($query) {
					$this->session->set_flashdata('info', 'Berhasil Dimasukan');
					redirect('siswa');
				}
				else{
					$this->session->set_flashdata('info', 'Gagal Dimasukan');
					redirect('siswa');
				}
			}
		}
		else{
			$data['content'] = 'siswa/f_insiswa';
			$this->load->view('template',$data);
		}	
	}

	public function hapus($id){
		$this->m_siswa->delete($id);//$id ini untuk menampung dari model.
		if ($this->db->affected_rows()) {
			$this->session->set_flashdata('info', 'Berhasil Dihapus');
			//menyeting flashdata
			redirect('siswa');
		}
		else{
			$this->session->set_flashdata('info', 'Gagal Dihapus');
			//menyeting flashdata
			redirect('siswa');	
		}
	}

	function edit($id){
		//proses ambil data dari form
		if ($this->input->post('submit')) {
			$a = $this->input->post('n_awal');
			$b = $this->input->post('n_akhir');
			$c = $this->input->post('alamat');
			//proses memasukan form ke db
			$object = array(
						'nama_awal' =>$a,
						'nama_akhir' =>$b,
						'alamat' =>$c
				);
			// $this->db->where('id',$id);

			// $this->db->update('siswa',$object);
			$this->m_siswa->edit($id,$object);
			if ($this->db->affected_rows()) {
				$this->session->set_flashdata('info', 'Sudah Diedit');
				redirect('siswa');
			}
			else{
				$this->session->set_flashdata('info', 'Gagal Diedit');
				redirect('siswa');
			}
		}

		$data['content'] = 'siswa/f_edsiswa';
		$data['editdata'] = $this->db->get_where('siswa', array('id'=>$id))->row(); 
		$this->load->view('template',$data);	
	}

}

/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */