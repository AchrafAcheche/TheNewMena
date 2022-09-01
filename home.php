<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Now</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <header>
        <a href="#" class="logo"><span>S</span>hop<span>N</span>ow</a>

        <div class="menuToggle"></div>
        <?php
        session_start();
        $servername = 'localhost:3308';
        $user = 'root';
        $pass = '';
        $link = mysqli_connect($servername, $user, $pass, 'projfed');
        if (isset($_SESSION['add'])) {
            if ($_SESSION['add'] == 'true') {
                echo "<script type='text/javascript'>alert('Article Ajouté');</script>";
                unset($_SESSION['add']);
            }
        }
        if (isset($_SESSION['modi'])) {
            if ($_SESSION['modi'] == 'true') {
                echo "<script type='text/javascript'>alert('Article Modifié');</script>";
                unset($_SESSION['modi']);
            }
        }
        if (isset($_SESSION['supp'])) {
            if ($_SESSION['supp'] == 'true') {
                echo "<script type='text/javascript'>alert('Article Supprimé');</script>";
                unset($_SESSION['supp']);
            }
        }
        if (isset($_SESSION['login'])) {
            if ($_SESSION['login'] == 'true') {
                echo '<ul class="navbar">';
                echo '<a href="supp.php" class="ajout-annonce"> - Supprimer un Article</a>';
                echo '<a href="modi1.php" class="ajout-annonce"> ! Modifier un Article</a>';
                echo '<a href="creation.php" class="ajout-annonce"> + Ajouter un Article</a>';
                echo '<li><a href="accueil.php">' . $_SESSION['username'] . '</a></li>';
                echo '<li><a href="logout.php">Se déconnecter</a></li>';
                echo '</ul>';
                echo ' </header>';
            } else {
                echo '<ul class="navbar">';
                echo '<li><a href="login.php">Me connecter</a></li>';
                echo '</ul>';
                echo ' </header>';
            }
        } else {
            echo '<ul class="navbar">';
            echo '<li><a href="login.php">Me connecter</a></li>';
            echo '</ul>';
            echo ' </header>';
        }

        ?>
    </header>
    <section class="section3">

    </section>
    <section class="section2">
        <P>Choisissez une catégorie</P>
        <form name="ff" action="filter.php" method="POST">
            <select selected="1" name="catyart">
                <option value="all">Tous les Catégories</option>
                <option value="vehicule">Véhicules</option>
                <option value="immobilier">Immobilier</option>
                <option value="informatique et multimedia">Informatique et Multimedia</option>
                <option value="maison et jardin">Maison et Jardin</option>
                <option value="loisirs et divertissement">Loisirs et Divertissement</option>
                <option value="habillement">Habillement et Bien Etre</option>
                <option value="emploi et services">Emploi et Services</option>
                <option value="entreprise">Entreprises</option>
            </select>
            <input type="image" src="images\i23.PNG" width="120" height="70">

        </form>





    </section>
    <div class="produit">
        <h2 class="titre"> Les Produits Disponibles</h2>
        <div class='col'>
            <?php


            if ($link === false) {
                die("Error: Could not connect." . mysqli_connect_error());
            }



            $array = array();
            if (isset($_SESSION['catyart'])) {
                if ($_SESSION['catyart']=="all"){
            $sql0 = "SELECT * FROM articles ";}
            else
            {
                $caty=$_SESSION['catyart'];
                $sql0 = "SELECT * FROM articles where catyart ='$caty'";
            }
            }else{$sql0 = "SELECT * FROM articles";}
            $sql="";
            $sql=$sql0;





            if ($result = mysqli_query($link, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {



                        echo "<div class='col'>";
                        echo "<h3 class='h3' > " . $row['nomart'] . "</h3>";
                        echo "<br>";
                        echo "<img src=" . $row['imgpath'] . ">";
                        echo "<br>";
                        echo "<p class='p2'>Publiée Par :" . $row['username'] . "<br><br>";
                        echo  $row['descart'] . '<br> <br> <br> <br>';
                        echo "<br>";
                        echo "<b> ";
                        $user = $row['username'];
                        $sql1 = "SELECT * FROM users where username ='$user'";
                        if ($result1 = mysqli_query($link, $sql1)) {
                            if (mysqli_num_rows($result1) > 0) {
                                while ($row1 = mysqli_fetch_array($result1)) {
                                    echo $row1['telephone'];
                                }
                            }
                        }

                        echo "</b>         ********              <b>" . $row['prixart'] . "</b></p>";

                        echo '</div>';
                    }
                } else {
                    echo "Something went wrong...";
                }
            } else {
                echo "ERROR: Could not execute $sql." . mysqli_error($link);
            }




            ?>

        </div>
    </div>

</body>

</html>
Footer
© 2022 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
