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
      'user_id' => $_SESSION['user_id'],
      'title' => $this->input->post('title'),
      'body' => $this->input->post('body')
    ];

    $this->thread_model->post_thread($data);
    header('Location: /');
  }

  public function view($id)
  {
    $thread = $this->thread_model->get_one_thread($id);
    $posts = $this->post_model->get_posts($id);

    $data['thread'] = $thread;
    $data['posts'] = $posts;

    $this->load->view('templates/header');
    $this->load->view('thread/thread_view', $data);
    $this->load->view('templates/footer');
  }
}
