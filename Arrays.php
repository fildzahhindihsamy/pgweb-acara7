<!DOCTYPE html>
<html>
<body>

<table border="1">
    <tr>
        <th>Princess Name</th> 
    </tr>
    <?php
    $princess = array("Cinderella", "Snow White", "Aurora");

    foreach ($princess as $name) { 
        echo "<tr><td>$name</td></tr>"; 
    }
    ?>
</table>

</body>
</html>
