<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chat_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function get_messages(){
		$query = $this->db
        ->select('messageText')
		->from('messages')
		->order_by('messageId','desc')
		->limit(20)
		->get();
		return $query->result_array();
	}

	public function new_message($datos=array()){
		$this->db->insert("messages",$datos);
        return TRUE;
	}

}

/* End of file Chat_model.php */
/* Location: ./application/models/Chat_model.php */