<?php 

$number = $_POST['number']; 
$antecessor = $number - 1;
$sucessor = $number + 1;

 ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <title>Desafio PHP</title>
</head>

<body>

  <section id="content">
    <h1>Resultado Final</h1>
    <p>O número escolhido foi</p><?php print_r($number); ?>
    <p>O seu antecessor é </p><?php print_r($antecessor); ?>
    <p>O seu sucessor é </p><?php print_r($sucessor); ?>
    <button type="button" onclick="window.location.href = 'index.php'"> Voltar</button>
  </section>

</body>

</html>