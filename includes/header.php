<!DOCTYPE html>
<html>
<head>
    <title><?= (isset($titulo) && !empty($titulo)) ? $titulo : "Cabaña flores chicas"; ?></title>
    <meta charset="utf-8">
    <meta content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <link rel="image" href="assets/img/index.jpg">
    
</head>
<body class="<?= (isset($body_classes) && !empty($body_classes)) ? $body_classes : ""; ?>">
    <header class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index">
            <img src="assets/img/logo-flores-chicas.png">
          </a>
        </div>

        <nav class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="cabana">LA CABAÑA</a></li>
            <li><a href="filosofia">FILOSOFÍA</a></li>
            <li><a href="ventas">VENTAS</a></li>
            <li><a href="contacto">CONTACTO</a></li>
          </ul>
        </nav>
      </div>
    </header>