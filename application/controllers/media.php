<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class media extends CI_Controller {

	private $data;
	function __construct(){
		parent::__construct();
		/*$this->load->model('variables');
		$data = $this->variables->setup_vars();
		$alias = $this->session->userdata('alias');
		if ( $alias ) {
			$user = $this->session->userdata('id');
			//$data['user'] = $this->user_vars->user_data($user);
			//$data['notice_count'] = $this->_notifications( $user );
		}else{
			redirect('login', 'refresh');
		}*/
		//$this->data = $data;
	}

	/*private function _notifications( $user_id){
		$timestamp = $this->session->userdata('timestamp');
		$id = $this->session->userdata('id');
		$notifi_query = $this->db->query('SELECT COUNT( * ) AS count FROM comments
										JOIN posts ON comments.post = posts.id
										WHERE user =  "'.$id.'"
										AND comments.timestamp >  "'.$timestamp.'"');

		$notification = $notifi_query->result();
		$user = $this->session->userdata('id');
		return $notification[0]->count;
	}*/

	public function _loader($menu = '', $page = '', $data){
		$data['page'] = $page;
		$data['menu'] = $menu;
		$this->load->view('layout', $data);
	}


	public function index(){
		$data = $this->data;
		$data['js_files'] = array();
		$data['title'] = 'Comicnerd - Index';
		$this->_loader('navmenu', 'media', $data);
	}

	public function updates(){
		//if notifications checked
		$current = date("Y-m-d H:i:s");
		$this->session->set_userdata('timestamp', $current );
		$this->db->query('UPDATE users SET timestamp = "'. $current .'" WHERE id = "$user"');

	}	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */