<?php
echo "<table><tr>";
for($i = 1;$i <= 10;$i++){
    echo "<td><table style='border-right: 1px solid;'>";
    for($j = 1;$j <= 10;$j++){
        echo "<tr><td>".$i * $j."</td>";
    }
    echo "</table></td>";
}
echo "</tr></table>";