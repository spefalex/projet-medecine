<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @see application/core/My_Controller.php [<controlleur de base io>]
 */

class Welcome extends MY_Controller {

	public function index()
	{
		$data['title'] = 'Bienvenue';
		$this->render_layout('welcome/index', $data);
	}
}
