<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');

		// ci_session db table 조회하기
		// $this->load->database();
		// $query = $this->db->query('SELECT * FROM ci_sessions');
		// foreach ($query->result() as $row)
		// {
		// 	echo $row->id;
		// 	echo $row->ip_address;
		// 	echo $row->timestamp;
		// 	echo $row->data;
		// }
	}
}
