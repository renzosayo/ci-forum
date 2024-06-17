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

  public function login()
  {
    $username = $this->input->post('username');

    $this->form_validation->set_rules('username', 'User name', 'callback_validate_username');
    $this->form_validation->set_rules('password', 'Password', "callback_validate_password[$username]");

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header');
      $this->load->view('forum/login');
      $this->load->view('templates/footer');

      return;
    }

    $user = $this->user_model->get_user($username);

    $_SESSION['username'] = $user['username'];
    $_SESSION['user_id'] = $user['id'];
    header('Location: /');
  }

  public function validate_username($username)
  {
    $username = trim($username);

    if ($username === "") {
      $this->form_validation->set_message('validate_username', 'Please enter your username.');
      return FALSE;
    }

    $result = $this->user_model->get_user($username);

    if (!$result) {
      $this->form_validation->set_message('validate_username', 'Username doesn\'t exist.');
      return FALSE;
    }
    return TRUE;
  }

  public function validate_password($password, $username)
  {
    // will return true if username is invalid
    if (validation_errors()) {
      return;
    }

    $actual_password = $this->user_model->get_password($username)['password'];
    if ($actual_password !== $password) {
      $this->form_validation->set_message('validate_password', 'Invalid password');
      return FALSE;
    }
    return TRUE;
  }

  public function logout()
  {
    session_unset();
    header('Location: /');
  }
}
