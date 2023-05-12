<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Irregular Verbs</title>
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
            <button class="button-random" id="randomVerb" ><box-icon name='dice-5'></box-icon>Random verb</button>
        </div>
        <div class="container-traduction">            
            <p class="text-random-result" id="randomResult">Randomize a verb by clicking the button!</p>
        </div>
        <div class="container-answers">
            <div class="text-container-answers">
                <div class="text-answer">
                    <label for="txtInfinitive">Infinitive: </label><br>
                    <input type="text" class="input-answer" id="txtInfinitive">
                </div>
                <div class="text-answer">
                    <label for="txtPastTense">Past Tense: </label><br>
                    <input type="text" class="input-answer" id="txtPastTense">
                </div>
                <div class="text-answer">
                    <label for="txtPastParticiple">Past Participle: </label><br>
                    <input type="text" class="input-answer" id="txtPastParticiple">
                </div>
            </div>


            <div class="button-random-container">
                <button class="button-random" id="verifyVerb" onclick="randomVerb()"><box-icon name='check'></box-icon>Verify verb</button>
            </div>

        </div>
    </main>
    <footer>

    </footer>
</body>
<?php include 'config/js_config.php' ?>
<script src="js/verbs.js"></script>
<script src="js/main.js"></script>

</html>