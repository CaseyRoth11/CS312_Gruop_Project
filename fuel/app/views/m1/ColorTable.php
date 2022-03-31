<body>
    <h1>Color Coordinate Tables</h1>
    <?php

?>

<style type="text/css">
.tg  {border-collapse:collapse;border-color:#ccc;border-spacing:0;}
.tg td{background-color:#fff;border-bottom-width:1px;border-color:#ccc;border-style:solid;border-top-width:1px;

  border-width:2px;color:#333;font-family:Arial, sans-serif;font-size:15px;overflow:hidden;padding:10px 5px;
  word-break:normal;}


</style>

<table class="tg" width: 100%>

<colgroup>

<col style="width: 20%">
<col style="width: 80%">
</colgroup>

<tbody>


<?php
echo Form::open(array(
    "action" => "index/m1/colorcoordinatetable",
    "method" => "post",
    "id" => "fuel_form"
));
echo Form::input('numberColors', $numberColors, array('type' => 'hidden'));
echo Form::input('tableSize', $tableSize, array('type' => 'hidden'));
  for ($numberColors; $numberColors > 0; $numberColors--){
    $colors = array(
      'red',
      'orange',
      'yellow',
      'green',
      'blue',
      'purple',
      'grey',
      'brown',
      'black',
      'teal'
    );
    $drop = Form::select('colorChoice', 10 - $numberColors, $colors);
    
    echo '<tr><td class="tg-0pky">';
    echo $drop;
    echo '</td><td class="tg-0pky"></td></tr>';
  }
    echo Form::input('submit', 'Submit', array('type' => 'submit'));
    echo Form::close();
  ?>
</tbody>
</table>
</body>
