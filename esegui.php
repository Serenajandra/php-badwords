<?php 
    $tuo_testo = $_GET["tuo_testo"];
    $censura = $_GET["tua_censura"]; 
    $stringa_censurata = str_replace($censura, "***", $tuo_testo); 
?>
<!-- <?php var_dump($censura);
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <h5>Ecco il tuo testo senza filtri né veli ;) </h5>
    <p><?php echo $tuo_testo; ?></p>
    <p>Numero di caratteri di cui è composto:</p>
    <?php echo strlen($tuo_testo) ?>
    
    <h4>Questa invece è la versione a cui hai deciso di applicare la censura:</h4>
<p>
    <?php echo $stringa_censurata; ?>
</p>
<span>La stringa censurata è composta da </span> <?php echo strlen($stringa_censurata) ?> <span>caratteri</span>
<hr>
<a href="index.php">Cancella</a>
</body>
</html>