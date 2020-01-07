<?php
    session_start();
    require '../Log in/modeles/database_connection.php';
    $bdd = dbConnect();
    $req = "SELECT LinkImg FROM users WHERE Mail = ?";
    $reponse = $bdd->prepare($req);
    $reponse->execute(array($_SESSION['Mail']));
    $resultat = $reponse->fetch();
    $img = $resultat['LinkImg'];
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="general info.css"/>
        <link rel="stylesheet" href="../Settings/Menu.css"/>
        <link rel="stylesheet" href="../Settings/footer.css"/>
        <title>general info</title>
    </head>
    <body>

    <?php INCLUDE('../Settings/Menu.php') ?>

    <h1>GENERAL INFO</h1>
    <div id="bloque_principal">
        <div id="infos_personnelles">
            <h1>Your profile</h1>
            <div id="photo">
                <img src="../Log in/<?php echo $img ?>" alt="photo de profil"/>
            </div>
            <div id="infos_complementaires">
                <?php
                echo "<ul>
                    <li>" . $_SESSION['LastName'] . "</li>
                    <li>" . $_SESSION['FirstName'] . "</li>
                    <li>" . $_SESSION['Birthday'] . "</li>
                </ul>"
                ?>
            </div>
            <div id="bouton">
                <input type="button" value="EDIT">
            </div>
        </div>
        <div id="liste_tests">
            <h1>Last tests</h1>
            <?php
            $nb = 0;
            while ($resultat = $reponse->fetch()) {
                echo "<ol>
                        <li><ul>
                            <li><strong>Test n°" . $nb . "</strong></li>
                            <li>" . $nb . "</li>
                        </ul></li>
                     </ol>";
                $nb = $nb + 1;
            }
            ?>
        </div>
        <div/>

        <?php INCLUDE('../Settings/footer.php') ?>
    </body>
    </html>
