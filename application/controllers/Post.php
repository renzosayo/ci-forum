<?php

class Post extends CI_Controller
{
  public function create()
  {
    $data = [
      'thread_id' => $this->input->post('thread_id'),
      'poster_id' => $_SESSION['user_id'],
      'body' => $this->input->post('body'),
    ];

    $this->post_model->create_post($data);
    header('Location: /view/' . $data['thread_id']);
  }
}
