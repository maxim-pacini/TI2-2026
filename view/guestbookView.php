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
    
  <main>
    <!-- Formulaire d'ajout d'un message -->
        <div class="formulaire">
            <div class="book-img-container">
                <img src="./img/livre2.png" alt="">
            </div>
            <form class="train" action="" method="post" id="guestbookForm" novalidate>

                <div class="champ">
                    <label for="firstname">Prénom</label>
                    <input type="text" name="firstname" id="firstname" value="<?= htmlspecialchars($_POST['firstname'] ?? '') ?>"placeholder="ex: John" required>
                </div>

                <div class="champ">
                    <label for="lastname">Nom</label>
                    <input type="text" name="lastname" id="lastname" value="<?= htmlspecialchars($_POST['lastname'] ?? '') ?>" placeholder="ex: Smith" required>
                </div>

                <div class="champ">
                    <label for="usermail">E-mail</label>
                    <input type="email" name="usermail" id="usermail" value="<?= htmlspecialchars($_POST['usermail'] ?? '') ?>"placeholder="ex: John.Smith@gmail.com" required>
                </div>

                <div class="champ">
                    <label for="postcode">Code Postal</label>
                    <input type="text" name="postcode" id="postcode" value="<?= htmlspecialchars($_POST['postcode'] ?? '') ?>"placeholder="ex: 1040" required>
                </div>

                <div class="champ">
                    <label for="phone">Téléphone</label>
                    <input type="text" name="phone" id="phone" value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>"placeholder="ex: 0493528587" required>
                </div>

                <div class="champ2">
                    <label for="message">Message</label>
                    <div class="textarea-wrapper">
                        <textarea name="message" id="message" placeholder="ex: feedback sur l'expérience..." required><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
                    </div>
                </div>
                <div>
                    <span id="charCount" class="char-count">0 / 300 caractères</span>
                </div>                       

                <div class="champ3">
                    <input type="checkbox">
                    <label for="phone">J'accepte le stockage de mes données personnelles.</label>
                </div>

                <button class="submit-btn" type="submit" id="btn-formulaire">Envoyer</button>

            </form>
        



    <?php if (isset($insert)): /*on a tenté d'envoyé le formulaire et*/ // 
                if ($insert === false): /*échec de l'insertion*/ ?>
                    <div class="not-insert-message">
                        échec lors d'un l'insertion <a href="javascript:history.go(-1);">Vérifiez votre formulaire</a>
                    </div>
    <?php /*réussite de l'insertion*/ else: ?>
                    <div class="insert-message">
                        Merci pour votre message, vous allez être redirigé
                        <script>
                            setTimeout(
                                function() {
                                    window.location.href = "./";
                                }, 500
                            );
                        </script>
                    </div>
            <?php
            endif;
        endif;
        ?>
    </div>
    <ul class="message">
        <?php foreach ($messages as $m): ?>
            <li class="bloc-msg">
                <p class="t1"><strong><?= htmlspecialchars($m['firstname'])." " .htmlspecialchars($m['lastname']) ?></strong></p>
                <p class="t2"><em><?= htmlspecialchars($m['datemessage']) ?></em></p>
                <p class="t3"><?= nl2br(htmlspecialchars($m['message'])) ?></p>
            </li>
        <?php endforeach; ?>
 
            <!-- Autres messages -->
            <!-- <li>
                <p><strong>firstname lastname</strong></p>
                <p><em>datemessage</em></p>
                <p>message</p>
            </li> -->
        </ul>
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


<footer>
    <button id="darkmode"> 🌙 darkmode </button>
<?php
// À commenter quand on a fini de tester
// echo "<h3>Nos var_dump() pour le débugage</h3>";
// echo '<p>$_POST</p>';
// var_dump($_POST);
// echo '<p>$_GET</p>';
// var_dump($_GET);
// echo 'var dump nombre de com';
// var_dump($a);
// var_dump($messages);
?>
</footer>


<script src="js/validation.js"></script>
</body>
</html>

