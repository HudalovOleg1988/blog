<?php
  class Controller_html extends Controller
  {
    public function action_index()
    {
      $this->model = new Model_html();
      $data = $this->model->get_data();
      $this->view("html",$data);
    }
  }
?>
