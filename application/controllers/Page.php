<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	public function __construct()	{	
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('themes/header');
		$this->load->view('frontend/home');
		$this->load->view('themes/footer');
	}
	public function tentang()
	{
		$this->load->view('themes/header');
		$this->load->view('frontend/profil');
		$this->load->view('themes/footer');
	}
	public function kontak()
	{
		$this->load->view('themes/header');
		$this->load->view('frontend/kontak');
		$this->load->view('themes/footer');
	}
	public function egov()
	{
		$this->load->view('themes/header');
		$this->load->view('frontend/bidang/egov');
		$this->load->view('themes/footer');
	}
	public function keamanan()
	{
		$this->load->view('themes/header');
		$this->load->view('frontend/bidang/keamanan');
		$this->load->view('themes/footer');
	}
	public function sekretariat()
	{
		$this->load->view('themes/header');
		$this->load->view('frontend/bidang/sekretariat');
		$this->load->view('themes/footer');
	}
	public function tik()
	{
		$this->load->view('themes/header');
		$this->load->view('frontend/bidang/tik');
		$this->load->view('themes/footer');
	}
	public function statistik()
	{
		$this->load->view('themes/header');
		$this->load->view('frontend/bidang/statistik');
		$this->load->view('themes/footer');
	}
	public function ikp()
	{
		$this->load->view('themes/header');
		$this->load->view('frontend/bidang/ikp');
		$this->load->view('themes/footer');
	}
	public function panduan()
	{
		$this->load->view('themes/header');
		$this->load->view('frontend/panduan');
		$this->load->view('themes/footer');
	}
	public function program()
	{
		$this->load->view('themes/header');
		$this->load->view('frontend/program');
		$this->load->view('themes/footer');
	}
	public function login()
	{
		
		$this->load->view('logreg/login');
	
	}
	public function register()
	{
		
		$this->load->view('logreg/register');
	
	}
}
