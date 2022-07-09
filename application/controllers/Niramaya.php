<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Niramaya extends CI_Controller {

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
	public function aboutus()
	{
		$this->load->view('about');
	}
	public function supportus()
	{
		$this->load->view('support');
	}
	public function ourvision()
	{
		$this->load->view('our-vision');
	}
	public function ourprograms()
	{
		$this->load->view('our-programs');
	}
	public function ourprogramsdetails()
	{
		$this->load->view('our-programs-details');
	}
	public function getinvolved()
	{
		$this->load->view('get-involved');
	}
	public function donation()
	{
		$this->load->view('donation');
	}
}
