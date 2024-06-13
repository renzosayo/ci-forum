<?php

class Thread_model extends CI_Model
{
  public function __construct()
  {
    $this->load->database();
  }

  public function get_threads()
  {
    $result = $this->db->get('threads');
    return $result->result_array();
  }

  public function post_thread($data)
  {
    $this->db->insert('threads', $data);
  }
}
