<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheetIndex.css"/>
    <link rel="icon" href="images/logo_infinitemeasure.ico" />
    <title>Accueil</title>
</head>
<body>
    <div id="conteneur">
        <header>
            <h1><a href=# id="titre">PsycHealth</a></h1>
        </header>
        <section class="connexion">
            <form method="post" action="modeles/Requete Authentification.php" >
                    <legend>CONNEXION</legend>
					<br />
                    <input class="login" type="email" name="mail" id="mail" placeholder="E-Mail adress" autofocus />
                    <br />
                    <input class="login" type="password" name="pass" id="pass" placeholder="Password"/>
                    <p id="choix">
                        <label for="remember">Remember me ?</label>
                        <input type="checkbox" name="remember" id="remember"/>
                    </p>
                    <div class="sign">
                        <input type="submit" value="SIGN IN" class="bouton"/>
                    </div>
            </form>
            <?php
            if (isset($_GET['error'])) {
                $error = $_GET['error'];
                if ($error == 1 || $error == 2) {
                    echo "<p style='color: red'>Username or Password are incorrect";
                }
            }
            ?>
            <div id="forgot">
            <a href="#" name="forgotPass" id="forg">Forgot Password ?</a>
            </div>
        </section>
        <div class="separateur">
            <p id="or">OR</p>
        </div>
        <a href="../Log in/NewClient.php" class="bouton">New Client</a>
        <br />
        <footer id="basdepage">

        </footer>
    </div>
</body>
</html>