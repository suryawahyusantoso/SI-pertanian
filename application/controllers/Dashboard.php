<?php

/**
 *
 */
class Dashboard extends CI_Controller{

  function __construct(){
    parent::__construct();
  }

  public function index(){
    $this->load->view('template');
    //$this->template->load('template','view_dasboard');
  }
}
