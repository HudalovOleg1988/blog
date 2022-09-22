<?php
  class Model_php
  {
    public function get_data()
    {
      $sql = "SELECT * FROM Paragraph INNER JOIN Theme ON ThemeID = ParagraphID WHERE ThemeID = '5'";
      return Db::fetch($sql);
    }
  }
?>
