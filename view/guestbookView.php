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
        <div class="btn-header">
            <img src="img/logo.png" alt="logo-site-web">
        </div>
        <div class="btn-header">
            <h1>TI2 | Livre d'or</h1>
            <p>By Maxim Pacini</p>
        </div>
        <div class="btn-header">
            <button>
                <img src="img/gear3.png" alt="">
                <p>Administration</p>
            </button>
        </div>
    </header>

                    for="firstname" type="text"


                    for="lastname" type="text"

                    for="usermail" type="email"

                    for="phone" type="text"

                    for="postcode"
                    type="text"

                    for="message"
                    type="text"




    <main>
        <form class="formulaire">
            <img src="img/livre2R.png" alt="">
            <div class="global">
                <h2>Votre message</h2>
                <div class="champ">
                    <label>Nom </label>
                    <input placeholder="Ex: Smith">
                </div>
                <div class="champ">
                    <label >prénom </label>
                    <input placeholder="Ex: John">
                </div>
                <div class="champ">
                    <label for="email">E-mail </label>
                    <input type="email" id="email" name="email" autocomplete="email" placeholder="Ex: John.smith@exemple.com">
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
                    <label for="text_comment">Message </label>
                    <textarea id="text_comment" name="text_comment" placeholder="Un petit mot..."></textarea>
                </div>
                <div class="champ info">
                    <p>0 / 3000 caractère</p>
                </div>
                <div class="champ radio">
                    <input type="checkbox">
                    <label for="">J'accepte le stockage de mes données personnelles.</label>
                </div>
                <div class="champ">
                    <button id="btn-formulaire" type="submit">Envoyer le message</button>
                </div>
            </div>
</form>
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
echo 'var dump nombre de com';
var_dump($a);
?>

<script src="js/validation.js"></script>
</body>
</html>

