<?php 

class profil extends controller{
	
	public function index(){
		$this->view('tamplete/header');
		$this->view('profil/index');
		$this->view('tamplete/footer');
	}
}