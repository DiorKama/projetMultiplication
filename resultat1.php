
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
if (!isset($_POST['submit'])) {
    @$mult 	= $_GET['mult'];
    Echo " <span class='text-center '> Table de multiplication de ".$mult.'<br>';
    for ($j = 1; $j <= 10; $j++)
    {
        echo "<span class='text-center ml-3 ml-3 '>".$mult.' x '.$j.' = '.$mult*$j.'<br>';
    }
}
?>
<a class="btn btn-success" href="etape1.php" >retour</a>
            </div>
        </div>
      </div>
</body>
</html>