<?php
  class Controller_php extends Controller
  {
    public function action_index()
    {
      $this->model = new Model_php();
      $data = $this->model->get_data();
      $this->view("php",$data);
    }
  }
?>
