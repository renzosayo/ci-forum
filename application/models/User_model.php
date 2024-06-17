<?php

class User_model extends CI_Model
{
  public function __construct()
  {
    $this->load->database();
  }

  public function get_user($username)
  {
    $result = $this->db->get_where('users', ['username' => $username]);
    return $result->row_array();
  }

  public function get_password($username)
  {
    $this->db->select('password');
    $result = $this->db->get_where('users', ['username' => $username]);
    return $result->row_array();
  }
}
