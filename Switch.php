<!DOCTYPE html>
<html>
<body>

<?php
$favcolor = "red"; // Mengubah warna favorit

switch ($favcolor) {
  case "yellow":
    echo "Your favorite color is yellow!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  case "red": // Menambahkan case untuk warna merah
    echo "Your favorite color is red!";
    break;
  default:
    echo "Your favorite color is not specified!";
}
?>
 
</body>
</html>
