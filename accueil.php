<?php
 session_start();
$_SESSION['tab']=array('Dior'=>'kama','Moussa'=>'Diouf');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
            <div class="row">
               
                <div class="col-md-3 offset-md-4">
          <form method="post" action="index.php">
             
             <p>
                 <label for="pseudo">Login:</label><br/>
                 <input type="text" name="pseudo" id="pseudo" />
                 <br />
                 <label for="pass"> mot de passe :</label><br/>
                 <input type="password" name="pass" id="pass" /><br/>
                 <input type="submit" value="Connexion" name="connexion" />
            </p>
         </form>
</div>
</di>
</div>
         <?php
        
         if (isset($_POST['connexion'])){
             if(!empty($_POST['pseudo']) and !empty($_POST['pass'])){
             $login = $_POST['pseudo'];
             $mdp = $_POST['pass'];
             foreach($_SESSION['tab'] as $loginT =>$mdpT){
                 if($loinT==$login AND $mdpT==$mdp){
                     $trouve=true;
                 }
             }
             if($trouve==true){
                 header('location:./index.php/?login='.$login.'&mdp='.$pass);
             }
             else{
                 unset($_SESSION['tab']);
                 header('location:./accueil.php');
             }
            }else{
                 echo "Merci de rensigner les valeurs";
             }
        
        }
         ?>  
</body>
</html>
