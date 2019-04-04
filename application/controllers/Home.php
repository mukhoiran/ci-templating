<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

  function __construct()
	{
		parent::__construct();
    $this->_template = 'front/intensify/template';
		$this->_view     = 'global_view';
	}

	public function index()
	{
    $data['title'] = 'intensify';
    $this->template->load($this->_template,$this->_view.'/content',$data);
	}
}
