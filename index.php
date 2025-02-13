<!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>calculoImc</title>
</head>
<body>
    <form class="form">
        <input type="text" name="peso" placeholder="Digite seu peso">
        <input type="text" name="altura" placeholder="Digite sua altura">
        <input type="submit" name="acao" value="Enviar">
        <div class="result">
            <?php include('calculoimc.php')?>
        </div>
    </form>
</body>
</html>