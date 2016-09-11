<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Presentations extends MY_Controller {
	
	
	public function __construct() {
		parent::__construct();
		$this->layout->setLayout('layout/slides');
	}
	public function view($view) {
		$this->layout->view('presentations/'.$view);
	}
}
