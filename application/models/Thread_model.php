<?php

class Thread_model extends CI_Model
{
  public function __construct()
  {
    $this->load->database();
  }

  public function get_threads()
  {
    $this->db->select('threads.id as id, title, body, date_posted, users.username as username');
    $this->db->join('users', 'users.id = threads.user_id', 'LEFT');
    $result = $this->db->get('threads');
    return $result->result_array();
  }

  public function get_one_thread($id)
  {
    $this->db->select('threads.id as id, title, body, date_posted, users.username as username');
    $this->db->join('users', 'users.id = threads.user_id', 'LEFT');
    $result = $this->db->get_where('threads', ['threads.id' => $id]);
    return $result->row_array();
  }

  public function post_thread($data)
  {
    $this->db->insert('threads', $data);
  }
}
