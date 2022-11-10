<?php

include "./conenect.php";

$sql = "SELECT * FROM products INNER JOIN suppliers WHERE company = 'Supplier F'";
$result = mysqli_query($conn, $sql);