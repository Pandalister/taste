<?php
$ident= $_POST['username'];
$mpdid= $_POST['mdp'];
$etape=$_POST['etape'];
$user=root;
$pass=root;
$dbh = new PDO('mysql:host=localhost;dbname=taste', $user, $pass);
$sql="SELECT `idEmp`, `mdpEmp` FROM `Employe` WHERE idEmp='$ident' AND mdpEmp='$mpdid';";
$reponse = $dbh->query($sql);
$donnees = $reponse->fetch();
$idEmp= $donnees['idEmp'];
$mdpEmp= $donnees['mdpEmp'];
$etape=$_POST['etape'];
$etape =(count($_POST)!=0)? 'valider connexion' : 'demander connexion';
if ($etape=='valider connexion'){
    if($idEmp==$ident && $mdpEmp==$mpdid && $idEmp!="" && $mdpEmp!=""){
        header("Location: /taste/backoffice.php");
    }
    else{
        include('./function/erroraf.php');
    }
}
?>
<!--‡====================================================================‡-->
<!--‡===========================‡Developement‡===========================‡-->
<!--‡====================================================================‡-->

<html>
    <head>
     <title>Connexion - Taste</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link href="./styles/styles.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" type="image/x-icon" href="/taste/images/fav.ico" />
        <link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
    </head>
    <body>
        <!---------------------------------------------------------------->
        <!-----------------------------Loader----------------------------->
        <!---------------------------------------------------------------->
        <div class="loader"></div>
            <!---------------------------------------------------------------->
            <!-----------------------------Navbar----------------------------->
            <!---------------------------------------------------------------->
            <?php include('./function/header.php'); ?>
            
        
        <div id="container">
            <?php include('./function/logo.php'); ?>
            <!---------------------------------------------------------------->
            <!------------------------------Form------------------------------>
            <!---------------------------------------------------------------->
            <h4>Connectez-vous pour accéder à Taste.</h4>
            <div class="login">
                        <form method="post">
                            <div>
                              <!------------Identifiant---------------->
                              <input class="in" type="text" name = 'username' id="username" placeholder="Identifiant"/>
                            </div>
                                <input type="hidden" name="etape" value"valider connexion"/>
                            <div>
                              <!------------Mot de passe--------------->
                              <input class="in" type="password" name="mdp" id="password" placeholder="Mot de passe"/>
                            </div>
                              <input type="submit" id="submit" class="green" value="Se connecter">
                        </form>
            </div>
        </div>
    </body>
</html>