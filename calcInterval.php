<?php

$date_start = new DateTime( $_POST["date_start"]);
$date_end = new DateTime( $_POST["date_end"]);

$diff = $date_start->diff($date_end);

session_start();

$_SESSION['message'] = "A diferença é de {$diff->days} dias.";

header("location: index.php");
