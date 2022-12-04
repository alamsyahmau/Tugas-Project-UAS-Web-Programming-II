<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('status') === 'login') {
			$data = array(
				'total_transaksi' => $this->db->count_all_results('transaksi'),
				'total_masakan' => $this->db->count_all_results('masakan'),
			);
			$this->load->view('dashboard',$data);
		} else {
			$this->load->view('auth/login');
		}
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */