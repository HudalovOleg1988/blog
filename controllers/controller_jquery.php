<?php
  class Controller_jquery extends Controller
  {
    public function action_index()
    {
      $this->model = new Model_jquery();
      $data = $this->model->get_data();
      $this->view("jquery",$data);
    }
  }
?>
