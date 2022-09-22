<?php
  class Model_jquery
  {
    public function get_data()
    {
      $sql = "SELECT * FROM Paragraph INNER JOIN Theme ON ThemeID = ParagraphID WHERE ThemeID = '7'";
      return Db::fetch($sql);
    }
  }
?>
