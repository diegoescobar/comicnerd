<?php

class pages extends CI_Controller {

	private $data;
	function __construct(){
		parent::__construct();
	}

	public function _loader($menu = '', $page = '', $data){
		$data['page'] = $page;
		$data['menu'] = $menu;
		$this->load->view('layout', $data);
	}


	function index(){
		$data = $this->data;
		$data['js_files'] = array();
		$data['title'] = 'Comicnerd - Index';
		$this->_loader('navmenu', 'nav', $data);
	}
	
	public function about(){
		$data = $this->data;
		$data['js_files'] = array();
		$data['title'] = 'Comicnerd - Index';
		$this->_loader('navmenu', 'about', $data);
	}

	public function charts(){
		$data = $this->data;
		$data['js_files'] = array();
		$data['title'] = 'Comicnerd - Index';
		$this->_loader('navmenu', 'charts', $data);
	}

}