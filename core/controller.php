<?php
  class Controller
  {
    public $model;

    public function view($html,$data)
    {
      include $_SERVER['DOCUMENT_ROOT']."/views/main.php";
    }

    public function view_error()
    {
      include $_SERVER['DOCUMENT_ROOT']."/views/error_404.php";
    }
  }
?>
