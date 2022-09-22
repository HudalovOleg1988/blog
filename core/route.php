<?php
  class Route
  {
    public static function start()
    {
      $chapter = 'main';
      $action = 'index';

      $route = explode("/", $_SERVER['REQUEST_URI']);

      if (!empty($route[1]))
        $chapter = $route[1];

      if (!empty($route[2]))
        $action = $route[2];


      $controller_name = "Controller_".$chapter;
      $action_name = "action_".$action;
      $model_name = "Model_".$chapter;

      $controller_link = $_SERVER['DOCUMENT_ROOT']."/controllers/".strtolower($controller_name).".php";
      if (file_exists($controller_link))
        include $controller_link;
      else
        header("Location: /404");

        $model_link = $_SERVER['DOCUMENT_ROOT']."/models/".strtolower($model_name).".php";
        if (file_exists($model_link))
          include $model_link;

      $controller = new $controller_name;
      if (method_exists($controller,$action_name))
        $controller->$action_name();
      else
      header("Location: /404");
    }
  }
?>
