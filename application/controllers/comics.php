<?php
class comics extends CI_Controller {

	private $data;
	function __construct(){
		parent::__construct();

		$this->load->library('comicvine_api');
	}
	
	public function _loader($menu = '', $page = '', $data){
		$data['page'] = $page;
		$data['menu'] = $menu;
		$this->load->view('layout', $data);
	}


	public function index(){
		$data = $this->data;
		$data['js_files'] = array();
		$data['title'] = 'Comicnerd - Comics!';
	
		$nerd = new comicvine_api;
		$results = $nerd->search( $_REQUEST['query'], $_REQUEST['resource']);

		if (!empty($results)){
			$xml = new SimpleXMLElement($results);
			$data['comics'] = $xml->results;
		}	
	
		$this->_loader('navmenu', 'comics', $data);
	}

	public function comic(){
		$data = $this->data;
		$data['js_files'] = array();
		$data['title'] = 'Comicnerd - Comics!';
	
		$paths = $this->uri->segment_array();
		if (isset($paths[4])){
			$nerd = new comicvine_api;
			$results = $nerd->cv_call($paths[4], $paths[3], array() );

			if (!empty($results)){
				$xml = new SimpleXMLElement($results);
				$data['comic'] = $xml->results;
			}
		}
		$this->_loader('navmenu', 'comic', $data);	
	}

}