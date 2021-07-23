<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home');
	}

	public function tambah()
	{
		$satu = $this->input->post('satu');
		$dua = $this->input->post('dua');
		$tiga = $this->input->post('tiga');
		$empat = $this->input->post('empat');
		$lima = $this->input->post('lima');

		$data = [
			'jawaban_satu' => $satu,
			'jawaban_dua' => $dua,
			'jawaban_tiga' => $tiga,
			'jawaban_empat' => $empat,
			'jawaban_lima' => $lima
		];

		// var_dump($data);
		$this->M_Tambah->input_data($data, 'case_one');
		redirect('Welcome/index');
	}
}
