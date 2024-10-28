<!DOCTYPE html>
<html>
<body>

<table border='1'>
<?php
$cars = array("Volvo", "BMW", "Toyota");
$colors = array("red", "green", "blue", "yellow");

for ($i = 0; $i < count($cars); $i++) {
    echo "<tr><td>{$cars[$i]}</td><td>{$colors[$i]}</td></tr>";
}
?>
</table>

</body>
</html>
