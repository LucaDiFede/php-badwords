<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="./repeat.php" method="get">

            <div>
                <div>
                <label for="Paragrafo">
                    Paragrafo
                </label>
                </div>
                <textarea name="Paragrafo" id="Paragrafo" placeholer="Inserire"></textarea>
            </div>

            <div>
                <div>
                <label for="Badwords">
                    Badwords
                </label>
                </div>
                <input name="Badwords" id="Badwords" placeholer="Inserire">
            </div>

            <div>
                <button type="submit">
                    Invia
                </button>
            </div>
        </form>
    </main>

    <script>
        const Paragrafo = 'Bold and Brave';

        console.log(Paragrafo.lenght);

        console.log(Paragrafo.replaceAll('Bold', '***'));
    </script>
</body>
</html>