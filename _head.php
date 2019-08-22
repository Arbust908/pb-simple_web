<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Embebiendo HTML</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-TXfwrfuHVznxCssTxWoPZjhcss/hp38gEOH8UPZG/JcXonvBQ6SlsIF49wUzsGno" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
  <?php if (isset($_GET['noche'])) : ?>
    <link rel="stylesheet" href="css/estilonoche.css">
  <?php else : ?>
    <link rel="stylesheet" href="css/estilo.css">
  <?php endif; ?>
</head>