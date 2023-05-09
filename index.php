<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="header-container">
            <div class="text-container">
                <p>Irregular Verbs List!</p>
            </div>

        </div>
    </header>
    <main>        
        <div class="button-random-container">
            <button class="button-random" id="randomVerb" onclick="randomVerb()"><box-icon name='dice-5'></box-icon>Random verb</button>
        </div>
        <div class="container-traduction">
            <p class="text-random-result" id="randomResult"></p>
        </div>
        <div class="container-answers">
            
        </div>
    </main>
    <footer>

    </footer>
</body>
<?php include 'config/js_config.php'?>
</html>