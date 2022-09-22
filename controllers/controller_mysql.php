<?php
  class Controller_mysql extends Controller
  {
    public function action_index()
    {
      $this->model = new Model_mysql();
      $data = $this->model->get_data();
      $this->view("mysql",$data);
    }
  }
?>
