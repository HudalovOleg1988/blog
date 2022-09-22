<?php
  class Model_main
  {
    public function get_data()
    {
      $sql = "SELECT * FROM Paragraph INNER JOIN Theme ON ThemeID = ParagraphID WHERE ThemeID = '1'";
      return Db::fetch($sql);
    }
  }
?>
