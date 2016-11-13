<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pribadi extends CI_Controller {
/* samakan nama class dengan nama file yg telah dibuat */
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
		$this->load->view('HomePribadi');
	}

	public function method_satu(){
		echo "Hai ini method 1";
	}

	public function profilku(){
		echo "Nama : Firman Fauzi";
		echo "<br>";
		echo "Alamat : Perumahan Mampang Indah 2, Depok.";
	}
}
