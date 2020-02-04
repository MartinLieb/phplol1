
<form action="form.php" method="GET">
     Name <input type="text" name="name">
     <input type="submit">
</form>

<?php
$name = $_GET["name"];
echo "Hej " . $name . " jeg håber du kan lære PHP";
?>