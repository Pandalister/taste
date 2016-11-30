<?php
$etape=$_POST['etape'];
$etape =(count($_POST)!=0)? 'valider connexion' : 'demander connexion';
if ($etape=='valider connexion'){
    $ident= $_POST['username'];
    $emailUs= $_POST['emailU'];
    $user=root;
    $pass=root;
    if ($etape=='valider connexion'){
        if($ident!="" && $emailUs!=""){
            $dbh = new PDO('mysql:host=localhost;dbname=taste', $user, $pass);
            $sql="INSERT INTO Client(`idUser`, `emailUser`) VALUES ('$ident','$emailUs')";
            $dbh->exec($sql);
            $message="Votre inscription est réussit, vous aller etre rediriger vers la page d'acceuil";
            echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
            header("Location: /taste/index.php");
        }
        else{
            include('function/errorins.php');
        }
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
            <h4>Inscrivez vous pour recevoir notre newsletter!</h4>
            <div class="signin">
                        <form method="post">
                            <div>
                              <!------------Identifiant---------------->
                              <input class="in" type="text" name = 'username' id="username" placeholder="Nom Prénom"/>
                            </div>
                                <input type="hidden" name="etape" value"valider connexion"/>
                            <div>
                              <!------------Mot de passe--------------->
                              <input class="in" type="text" name = 'emailU' id="emailU" placeholder="contact@mail.com"/>
                            </div>
                              <input type="submit" id="submit" class="green" value="S'inscrire">
                        </form>
            </div>
        </div>
    </body>
</html>