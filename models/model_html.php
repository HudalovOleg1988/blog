<?php
  class Model_html
  {
    public function get_data()
    {
      $sql = "SELECT * FROM Paragraph INNER JOIN Theme ON ThemeID = ParagraphID WHERE ThemeID = '2'";
      return Db::fetch($sql);
    }
  }
?>
