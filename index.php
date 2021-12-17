<?php

$paragrafo = 'Im beginnin to feel like a Rap God, Rap God
All my people from the front to the back nod, back nod
Now, who thinks their arms are long enough
To slap box, slap box?
They said I rap like a robot, so call me Rap-bot';

// echo $paragrafo;

$_GET['God'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div><strong>Testo Eminem - Rap God:</strong> <?php echo $paragrafo; ?> </div>
  <div><strong>La lunghezza del testo è: </strong> <?php echo strlen($paragrafo); ?></div>
  
  <br>

  <div>
    <strong>Testo:</strong> <?php echo $paragrafo; ?>
    <br>
    <strong>La lunghezza del testo è:</strong> <?php echo strlen($paragrafo); ?> 
    <br>
    <strong>Testo censurato:</strong> <?php echo str_replace('God', '***', $paragrafo); ?> </div>
</body>
</html>