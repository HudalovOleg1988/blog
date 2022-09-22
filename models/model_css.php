<?php
  class Model_css
  {
    public function get_data()
    {
      $sql = "SELECT * FROM Paragraph INNER JOIN Theme ON ThemeID = ParagraphID WHERE ThemeID = '3'";
      return Db::fetch($sql);
    }
  }
?>
