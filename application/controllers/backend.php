<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->cek_login();
	}

	private function cek_login()
	{
		if ($this->session->userdata('useradmin')) {
			redirect(base_url().'dashboard');
		}
		else if ($this->session->userdata('useruser')) {
		 	redirect(base_url().'site2');
		}

		else{
			//kembali ke halaman login
			redirect(base_url().'login');
		}
		
	}

}

/* End of file  */
/* Location: ./application/controllers/ */