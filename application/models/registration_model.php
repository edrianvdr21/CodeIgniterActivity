<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registration_model extends CI_Model {

	public function insertRecord($data){
		$query = "INSERT INTO accounts(name,username,password) VALUES(?,?,?)";
		$values = array($data['fullname'], $data['username'], $data['password']);
		return $this->db->query($query,$values);
	}

	public function validateUser($data){
		$query = "SELECT * FROM accounts WHERE username=? AND password=?";
		$values = array($data['username'],$data['password']);
		return $this->db->query($query,$values)->result();
	}
}
