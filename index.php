<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intervalo de datas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        if (!empty($_SESSION['message'])) :
            ?>
            <div class="message">
                <?= $_SESSION['message'] ?>
            </div>
            <?php
            //session_destroy();
        endif;
    ?>
    <h1>Calcular o Intervalo das Datas</h1>
    <form method="post" action="calcInterval.php">
        <fieldset>
            <legend>Selecione as datas</legend>
            <label for="date1">Data de início</label>
            <input type="date" name="date_start" id="date1">
            <label for="date2">Data final</label>
            <input type="date" name="date_end" id="date2">
            <button>Calcular</button>
        </fieldset>
    </form>
</body>
</html>