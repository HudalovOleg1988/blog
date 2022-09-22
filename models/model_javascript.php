<?php
  class Model_javascript
  {
    public function get_data()
    {
      $sql = "SELECT * FROM Paragraph INNER JOIN Theme ON ThemeID = ParagraphID WHERE ThemeID = '4'";
      return Db::fetch($sql);
    }
  }
?>
