<?php

Class model_user extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	//Validate the user
	public function validate() {
		$this->db->where('email', $this->input->post('loginEmail'));
		$this->db->where('password', $this->input->post('loginPassword'));

		$query = $this->db->get('users');

		if ($query->num_rows == 1) {
			return $query->result();
		}
		return false;
	}

	//Create a user
	public function registerUsers($registerUsername, $registerPassword, $registerEmail, $registerContact) {
		$data = array(
			'username' => $registerUsername,
			'password' => $registerPassword,
			'email' => $registerEmail,
			'contact' => $registerContact,
			'userType' => 'student'
			);

		$this->db->insert('users', $data);
		return $this->db->insert_id();
	}


	//return a list of all users
	public function GetAllUsers() {
		$this->db->order_by('username', 'ASC');
		$query = $this->db->get('users');

		if ($query->num_rows > 0) {
			return $query->result();
		}
		return false;
	}

	//searches for a course based on courseName
	public function GetUserByName($userName) {
		$this->db->like('userName', $userName);
		$query = $this->db->get('users');

		if ($query->num_rows > 0) {
			return $query->result();
		}
		return false;
	}

	//returns a list of all users except the ones given in the argument
	public function GetAllUsersExcept($omittedUsers) {
		if (count($omittedUsers) > 0) {
			$this->db->from('users');
			$this->db->order_by('username', 'ASC');
			$this->db->where_not_in('userID', $omittedUsers);
			$query = $this->db->get();

			if ($query->num_rows > 0) {
				return $query->result();
			}
			return false;
		}
	}
}
?>