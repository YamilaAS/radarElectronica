<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?=$this->renderSection('title')?>&nbsp;-&nbsp;Radar Electrónica</title>

    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet" >
    <script src="/bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="/css/styles.css">
</head>
  <body>
    <?=$this->include('templates/navbar')?>
    <?=$this->renderSection('contenido')?>
  </body>
</html>