<?php
# view/guestbookView.php
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TI2 | Livre d'or</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div><img src="img/logo.png" alt="logo-site-web"></div>
        <div>
            <h1>TI2 | Livre d'or</h1>
            <p>By Maxim Pacini</p>
        </div>
        <div>
            <button>
                <img src="img/gear3.png" alt="">
                Administration
            </button>
        </div>
    </header>
    <main>
        <div class="formulaire">
            <img src="img/livre2R.png" alt="">
            <div class="global">
                <h2>Votre message</h2>
                <div class="champ">
                    <label for="nom">Nom </label>
                    <input type="text" placeholder="Ex: Smith" name="nom" id="nom">
                </div>
                <div class="champ">
                    <label for="prénom">prénom </label>
                    <input type="text" placeholder="Ex: John" name="nom" id="nom">
                </div>
                <div class="champ">
                    <label for="email">E-mail </label>
                    <input type="text" placeholder="Ex: John.smith@exemple.com" name="nom" id="nom">
                </div>
                <div class="champ">
                    <label for="email">Code postal </label>
                    <input type="text" placeholder="Ex: 1000" name="nom" id="nom">
                </div>
                <div class="champ">
                    <label for="email">Téléphone </label>
                    <input type="text" placeholder="Ex: 04 23 45 67 89" name="nom" id="nom">
                </div>
                <div class="champ">
                    <label for="email">Message </label>
                    <textarea name="msg" placeholder="Un petit mot..."></textarea>
                </div>
                <div class="champ info">
                    <p>0 / 3000 caractère</p>
                </div>
                <div class="champ radio">
                    <input type="checkbox">
                    <label for="">J'accepte le stockage de mes données personnelles.</label>
                </div>
                <div class="champ">
                    <button id="btn-formulaire">Envoyer le message</button>
                </div>
            </div>
        </div>
        <div class="message">
            <h2>Message Récents</h2>
                <ul>
                    <li>
                        <p><strong>firstname lastname</strong></p>
                        <p><em>datemessage</em></p>
                        <p>message</p>
                    </li>
                    <!-- Autres messages -->
                    <li>
                        <p><strong>firstname lastname</strong></p>
                        <p><em>datemessage</em></p>
                        <p>message</p>
                    </li>
                    <li>
                        <p><strong>firstname lastname</strong></p>
                        <p><em>datemessage</em></p>
                        <p>message</p>
                    </li>
                    <li>
                        <p><strong>firstname lastname</strong></p>
                        <p><em>datemessage</em></p>
                        <p>message</p>
                    </li>
                    <li>
                        <p><strong>firstname lastname</strong></p>
                        <p><em>datemessage</em></p>
                        <p>message</p>
                    </li>
                    <li>
                        <p><strong>firstname lastname</strong></p>
                        <p><em>datemessage</em></p>
                        <p>message</p>
                    </li>
                    <li>
                        <p><strong>firstname lastname</strong></p>
                        <p><em>datemessage</em></p>
                        <p>message</p>
                    </li>
                    <li>
                        <p><strong>firstname lastname</strong></p>
                        <p><em>datemessage</em></p>
                        <p>message</p>
                    </li>
                    <li>
                        <p><strong>firstname lastname</strong></p>
                        <p><em>datemessage</em></p>
                        <p>message</p>
                    </li>
                    <li>
                        <p><strong>firstname lastname</strong></p>
                        <p><em>datemessage</em></p>
                        <p>message</p>
                    </li>
                    <li>
                        <p><strong>firstname lastname</strong></p>
                        <p><em>datemessage</em></p>
                        <p>message</p>
                    </li>
                    <li>
                        <p><strong>firstname lastname</strong></p>
                        <p><em>datemessage</em></p>
                        <p>message</p>
                    </li>
                    <li>
                        <p><strong>firstname lastname</strong></p>
                        <p><em>datemessage</em></p>
                        <p>message</p>
                    </li>

                </ul>
        etc ...
        </div>
    </main>

<!-- Formulaire d'ajout d'un message -->

<!-- Si pas de message -->
<!-- <h3>Pas encore de message</h3> -->
<!-- Si 1 message -->
<!-- <h3>Il y a 1 message</h3> -->
<!-- Si plusieurs messages -->
<!-- <h3>Il y a X messages</h3> -->

<!-- Pagination (BONUS) -->

<!-- Liste des messages -->

<!-- Pagination (BONUS) -->
<?php
// À commenter quand on a fini de tester
echo "<h3>Nos var_dump() pour le débugage</h3>";
echo '<p>$_POST</p>';
var_dump($_POST);
echo '<p>$_GET</p>';
var_dump($_GET);
?>

<script src="js/validation.js"></script>
</body>
</html>

