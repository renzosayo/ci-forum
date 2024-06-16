<?php

class Post_model extends CI_Model
{
  public function __construct()
  {
    $this->load->database();
  }

  public function get_posts($thread_id)
  {
    $this->db->select('users.username, date_posted, body');
    $this->db->join('users', 'users.id = posts.poster_id', 'LEFT');
    $posts = $this->db->get_where('posts', ['thread_id' => $thread_id]);
    return $posts->result_array();
  }

  public function create_post($data)
  {
    $this->db->insert('posts', $data);
  }
}
