<?php

class pendaftaran extends controller{
	
	public function index(){
		$this->view('tamplete/header');
		$this->view('pendaftaran/index');
		$this->view('tamplete/footer');
	}
}