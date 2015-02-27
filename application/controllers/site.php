<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
	
	public function index(){

		$this->home();
		
	}
	
	public function home(){
		
		$data['title'] = "home";
		$data['var1'] = 40;
		$data['var2'] = 63;
		
		$this->load->model("math");
		
		$data['totalSoma'] = $this->math->add($data['var1'], $data['var2']);
		$data['totalSub'] = $this->math->sub($data['var1'], $data['var2']);
		$data['totalMult'] = $this->math->mult($data['var1'], $data['var2']);
		$data['totalDiv'] = $this->math->divi($data['var1'], $data['var2']);						
		
		$this->load->view("view_home", $data);
		
	}
	
	public function about(){
		
		$data['title'] = "about";
		$this->load->view("view_about", $data);
		
	}
}