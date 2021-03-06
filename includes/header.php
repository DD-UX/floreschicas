<!DOCTYPE html>
<html>
<head>
    <title><?= (isset($titulo) && !empty($titulo)) ? utf8_decode(utf8_encode($titulo)) : utf8_decode(utf8_encode("Cabaña Flores Chicas")); ?></title>
    <meta charset="utf-8">
    <meta content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <link rel="image" href="assets/img/index.jpg">
    
</head>
<body class="<?= (isset($body_classes) && !empty($body_classes)) ? $body_classes : ""; ?>">
    <header class="navbar navbar-default <?= (!isset($header_static)) ? "navbar-fixed-top" : ""; ?>">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="/">
			<h1 class="navbar-brand">
			  <span class="sr-only">Cabaña Flores Chicas</span>
              <img src="assets/img/logo-flores-chicas.png">
		    </h1>
          </a>
        </div>

        <nav class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
			<?php if (!isset($hide_home_btn)){ ?>
            <li data-href="/"><a href="/">HOME</a></li>
            <?php } ?>
			<li data-href="/cabana"><a href="cabana">LA CABAÑA</a></li>
            <li data-href="/filosofia"><a href="filosofia">FILOSOFÍA</a></li>
            <li data-href="/ventas"><a href="ventas">VENTAS</a></li>
            <li data-href="/contacto"><a href="contacto">CONTACTO</a></li>
          </ul>
        </nav>
      </div>
    </header>