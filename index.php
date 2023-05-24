<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/icon.png"/>
    <title>List of Irregular Verbs</title>
</head>

<body>
    <header>
        <div class="header-container">
            <div class="text-container">
                <p>Irregular Verbs  -
                </p>&nbsp&nbsp
                <select class="select-style"id="listValue">
                    <option value="">Select a List!</option>
                    <option value="list_1">List 1</option>
                    <option value="list_2">List 2</option>
                    <option value="list_3">List 3</option>
                    <option value="list_4">List 4</option>
                </select>
               
            </div>
        </div>
    </header>
    <main>
        <div class="button-random-container">
            <button class="button-random" id="randomVerb" onclick="randomVerb()"><box-icon name='dice-5'></box-icon>Random verb</button>
        </div>
        <div class="container-traduction">            
            <p class="text-random-result" id="randomResult">Randomize a verb by clicking the button!</p>
        </div>
        <div class="container-answers">
            <div class="text-container-answers">
                <div class="text-answer">
                    <label for="txtInfinitive">Infinitive: </label><br>
                    <input type="text" class="input-answer" id="txtInfinitive"><br>
                    <p class="legend" id="infLegend"></p>
                </div>
                <div class="text-answer">
                    <label for="txtPastTense">Past Tense: </label><br>
                    <input type="text" class="input-answer" id="txtPastTense"><br>
                    <p class="legend" id="tenseLegend"></p>
                </div>
                <div class="text-answer">
                    <label for="txtPastParticiple">Past Participle: </label><br>
                    <input type="text" class="input-answer" id="txtPastParticiple"><br>
                    <p class="legend" id="participleLegend"></p>
                </div>
            </div>


            <div class="button-random-container">
                <button class="button-random" id="verifyVerb" onclick="verifyVerb()"><box-icon name='check'></box-icon>Verify verb</button>
            </div>

        </div>
    </main>
    <footer>
        Developed with ❤ by @edu.frasson 
    </footer>
</body>
<?php include 'config/js_config.php' ?>
<script src="js/data/verbs_list1.js"></script>
<script src="js/data/verbs_list2.js"></script>
<script src="js/data/verbs_list3.js"></script>
<script src="js/data/verbs_list4.js"></script>
<script src="js/main.js"></script>

</html>