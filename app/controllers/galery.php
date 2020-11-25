<?php

class galery extends controller{
	
	public function index(){
		$this->view('tamplete/header');
		$this->view('galery/index');
		$this->view('tamplete/footer');
	}
}