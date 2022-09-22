<?php
  class Controller_javascript extends Controller
  {
    public function action_index()
    {
      $this->model = new Model_javascript();
      $data = $this->model->get_data();
      $this->view("javascript",$data);
    }
  }
?>
