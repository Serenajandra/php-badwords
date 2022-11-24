
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>BadWords</title>
</head>
<body>
    <div class="container">
        <form action="esegui.php" method="get">
            <label for="testo">Inserisci testo</label>
            <input type="text" id="testo" name="tuo_testo">
            
            <label for="censura">Inserisci ciò che vuoi nascondere nel testo</label>
            <input type="text" id="censura" name="tua_censura">
            
            <button type="submit"> Invia </button>

        </form>
    </div>

</body>
</html>