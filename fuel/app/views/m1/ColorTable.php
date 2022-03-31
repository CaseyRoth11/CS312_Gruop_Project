<?php

?>

<style type="text/css">
.tg  {border-collapse:collapse;border-color:#ccc;border-spacing:0;}
.tg td{background-color:#fff;border-bottom-width:1px;border-color:#ccc;border-style:solid;border-top-width:1px;

  border-width:2px;color:#333;font-family:Arial, sans-serif;font-size:15px;overflow:hidden;padding:10px 5px;
  word-break:normal;}


</style>

<table class="tg" width: 95%">

<colgroup>

<col style="width: 20%">
<col style="width: 80%">
</colgroup>

<tbody>


<?php
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
  ?>
</tbody>
</table>
