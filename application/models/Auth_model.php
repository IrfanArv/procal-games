<?php
class Auth_model extends CI_Model {


	public function signup($data)
	{
		$this->db->insert('account', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
		$insert = $this->db->insert('account', $data);
		return $insert;	

	} 

	public function saveFeed($data)
    {
        $this->db->insert('feedback', $data);
        return $this->db->insert_id();
    }
	
	function g_player($ip)
	{	

		$q = $this->db->select('a.*')
				
		->from('account a')
		->where('a.account_ip', $ip)
		->where('a.account_score', '')
		->order_by('a.account_id DESC')
		->limit(1);			
					
		$result = $q->get()->result();
		return $result;

	}

	function update_status($accountID, $data)
	{					
		$this->db->where('account_id', $accountID);
		$this->db->update('account', $data);				
	}

	function game_update_score($tokenID, $data)
	{					
		$this->db->where('account_token', $tokenID);
		$this->db->update('account', $data);				
	}

	// function get_score(){
    //     $query = $this->db->get('account');
    //     return $query;

		
    // }

	function get_score(){
		$hasil=$this->db->query("SELECT * FROM account ORDER BY account_score DESC LIMIT 10 ");
		return $hasil;

	}
	
}