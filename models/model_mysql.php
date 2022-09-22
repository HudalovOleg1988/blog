<?php
  class Model_mysql
  {
    public function get_data()
    {
      $sql = "SELECT * FROM Paragraph INNER JOIN Theme ON ThemeID = ParagraphID WHERE ThemeID = '6'";
      return Db::fetch($sql);
    }
  }
?>
