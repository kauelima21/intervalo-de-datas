<?php

$date_start = new DateTime( $_POST["date_start"]);
$date_end = new DateTime( $_POST["date_end"]);

$diff = $date_start->diff($date_end);

session_start();

$_SESSION['message'] = <<<MSG
    <div class='message'>
        <p>A diferença é de {$diff->days} dias.<p>
    </div>
MSG;

header("location: index.php");
