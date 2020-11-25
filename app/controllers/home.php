<?php

class home extends controller{
	
	public function index(){
		$this->view('tamplete/header');
		$this->view('home/index');
		$this->view('tamplete/footer');
	}
}