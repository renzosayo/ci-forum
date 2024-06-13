<?php

class Forum extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['result'] = $this->thread_model->get_threads();

    $this->load->view('templates/header');
    $this->load->view('forum/forum_main', $data);
    $this->load->view('templates/footer');
  }
}
