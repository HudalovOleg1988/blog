<?php
  class Controller_Main extends Controller
  {
    public function action_index()
    {
      $this->model = new Model_main();
      $data = $this->model->get_data();
      $this->view("main",$data);
    }
  }
?>
