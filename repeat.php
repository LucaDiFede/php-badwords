<?php
    var_dump($_GET);
    var_dump($_GET['Paragrafo']);
    var_dump($_GET['Badwords']);

    $Paragrafo = $_GET['Paragrafo'];
    $Badwords = $_GET['Badwords'];
    $ParagrafoCensurato = str_replace($Badwords, '***', $Paragrafo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>
        Badwords
    </h1>

    <main>
        <div>
            <h2>
                Paragrafo inviato - Result:
            </h2>
            <p>
                <?php echo $_GET['Paragrafo']; ?>
            </p>

            <h5>
                Lunghezza del paragrafo: <?php echo strlen($_GET['Paragrafo']); ?>
            </h5>
        </div>

        <div>
            <h3>
                Parola da censurare: <?php echo $_GET['Badwords'] ?>
            </h3>
        </div>

        <hr>

        <div>
            <h2>
                Badwords - Result:
            </h2>
            <p>
                <?php echo $ParagrafoCensurato; ?>
            </p>

            <h5>
                Lunghezza del paragrafo: <?php echo strlen($ParagrafoCensurato); ?>
            </h5>
        </div>

        <div>
            <h3>
                Parola da censurare: <?php echo $_GET['Badwords'] ?>
            </h3>
        </div>
    </main>
</body>
</html>