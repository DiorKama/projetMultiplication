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
            <div class="col-md-4 offset-md-4">
<?php
$a = array();
if (isset($_POST["val1"])) $a[1]=1;
  else $a[1]=0;
if (isset($_POST["val2"])) $a[2]=2;
  else $a[2]=0;
if (isset($_POST["val3"])) $a[3]=3;
  else $a[3]=0;
if (isset($_POST["val4"])) $a[4]=4;
  else $a[4]=0;
if (isset($_POST["val5"])) $a[5]=5;
  else $a[5]=0;
if (isset($_POST["val6"])) $a[6]=6;
  else $a[6]=0;
if (isset($_POST["val7"])) $a[7]=7;
  else $a[7]=0;
if (isset($_POST["val8"])) $a[8]=8;
  else $a[8]=0;
if (isset($_POST["val9"])) $a[9]=9;
  else $a[9]=0;
if (isset($_POST["val10"])) $a[10]=10;  
  else $a[10]=0;
 
 
for($x=1;$x<11;$x++)
 {
 if ($a[$x]!=0)
  {
  echo "Table de multiplication de ".$a[$x]." </br></br>";
  echo "<table border=1>";
  for($i=1;$i<11;$i++)
		{
   $r=$a[$x]*$i;
   echo "<tr><td> ".$i." </td><td> X </td><td> ".$a[$x]." </td><td> = </td><td> $r </td></tr>";
		}
  echo "</table><br />";
  }
  
 }
?>
<a class="btn btn-success" href="etape2.php">retour</a>
</div>
</div>
</div>
</body>
</html>
