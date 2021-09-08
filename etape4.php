<?php
 session_start();
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
               
                <div class="col-md-3 offset-md-6">
                    <p> Question:<?php echo 0; ?></p>
                    <p><?php
                      if(isset($_POST['btn4'])){
                        echo $_SESSION['i']."x".  $_SESSION['j'] ."=".$_POST['reponse'];
                       
                        if($_SESSION['result'] == $_POST['reponse']){
                            $_SESSION['score']+=4;
                            echo "<div class='alert alert-success' role='alert'>
                            Felicitation !
                         </div>";
                   
                        }else {
                            echo "<div class='alert alert-danger' role='alert'>
                            Mauvaise Reponse !
                        </div>";
                        }
                      } 
                     
                      
                      ?>
                      </p>
                </div>
                <div class="col-md-3">
                    <?php
                   
                    
                         echo  "Score".$_SESSION['score']."/20";
                    ?>
                </div>
            </div>
            <div class="row">
           
            <form action="" method="POST">
            <div class='form-group'>
                       <label > 
                        <?php
                            $_SESSION['i']=rand(1,10);
                            $_SESSION['j']=rand(1,10);
                             echo  $_SESSION['i'].'  x  '. $_SESSION['j'].'  =';
                             $_SESSION['result'] = $_SESSION['i'] *  $_SESSION['j']; 
                              
                         ?>
                        </label>
                        <span>REPONSE : </span> 
                <input class='' type="number"   name="reponse" >
                 
                <button type="submit" name="btn4">valider</button>
            </div>
                
            </form>
            
            </div>
        </div>
    
</body>
</html>