<?php

class Thread extends CI_Controller
{
  public function create()
  {
    $this->form_validation->set_rules('title', 'Title', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header');
      $this->load->view('thread/thread_create');
      $this->load->view('templates/footer');
      return;
    }

    $data = [
      'user_id' => 1,
      'title' => $this->input->post('title'),
      'body' => $this->input->post('body')
    ];

    $this->thread_model->post_thread($data);
    header('Location: /');
  }
}
