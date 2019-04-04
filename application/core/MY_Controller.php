<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

  public $_template;
  public $_view;

	function __construct()
  {
      parent::__construct();

      // Avoid clear cache
      header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
      header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
      header("Cache-Control: post-check=0, pre-check=0", false);
      header("Pragma: no-cache");
  }
}
