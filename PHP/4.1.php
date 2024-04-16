<?php
$start = 4;
$end = 9;
echo "<table border='1'>";
echo "<tr><th>Number</th><th>Square</th></tr>";
for ($i = $start; $i <= $end; $i++) {
    echo "<tr><td>" . $i . "</td><td>" . ($i * $i) . "</td></tr>";
}
echo "</table>";
?>