<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * controlleur de base
 */

class My_Controller extends CI_Controller {

	public function render_layout( $layout, $data = array() )
	{
		$this->load->view('layout/header', $data);
		$this->load->view($layout, $data);
		$this->load->view('layout/footer', $data);
	}

}
