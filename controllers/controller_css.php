<?php
  class Controller_css extends Controller
  {
    public function action_index()
    {
      $this->model = new Model_css();
      $data = $this->model->get_data();
      $this->view("css",$data);
    }
  }
?>
