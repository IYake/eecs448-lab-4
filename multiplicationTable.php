<?php 
echo "<table style='font-size:50%'><tr>";
//create header numbers
for ($c = 0; $c <= 100; $c++){
  echo "<th>" . $c . "</th>";
}
echo "</tr>";

//create rest of the rows
for ($r = 1; $r <= 100; $r++){
  echo "<tr><th>" . $r . "</th>";
  for ($c = 1; $c <= 100; $c++){
    echo "<th>" . $r*$c . "</th>";
  }
  echo "</tr>";
}

echo "</table>";
?>