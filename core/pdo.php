<?php
  class Db
  {
    public static $pdo;

    public static function connect()
    {
      if (!self::$pdo)
      {
        try
        {
          self::$pdo = new PDO('mysql:host=localhost;dbname=blog','root','root');
          self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
          self::$pdo->exec('SET NAMES "utf8"');
        }
        catch (PDOException $e)
        {
          header("Location: /blog/404");
        }
      }
      return self::$pdo;
    }

    public static function query($sql)
    {
      return self::connect()->query($sql);
    }

    public static function fetch($sql)
    {
      $result = self::query($sql);
      return $result->fetch();
    }

  }
?>
