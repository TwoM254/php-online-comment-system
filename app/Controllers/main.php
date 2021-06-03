<?php  
if(!defined('BASEPATH') OR exit('No direct script access allowed'));
class main extends CI_Controller 
{
  public function __construct()
  {
  /*call CodeIgniter's default Constructor*/
  parent::__construct();

  /*load database libray manually*/
  $this->load->database();

  /*load Model*/
  $this->load->model('main_model');
  }
    /*Display*/
    public function displaydata()
  {
      $result['data']=$this->main_model->main_view();
      $this->load->view('main_view',$result);
  }
	
}
?>