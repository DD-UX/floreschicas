<?php $titulo = "Cabaña Flores Chicas - Bienvenidos!"; ?>
<?php $body_classes = "home"; ?>
<?php $header_static = true; ?>
<?php $hide_home_btn = true; ?>
<?php require_once('includes/header.php'); ?>

<?php //Contenido va acá ?>

<!-- Slider -->
<section class="swiper-container home-slider">
    <!-- Required wrapper -->
    <div class="swiper-wrapper hidden-xs">
        <!-- Slides -->
        <div class="swiper-slide slide-cabana">
            <h2 class="h2">La selección de una cabaña<br>se fundamenta en tener información precisa.</h2>
            <a class="btn btn-primary h5" href="cabana">LA CABAÑA</a>
        </div>
        <div class="swiper-slide slide-ventas">
            <h2 class="h2">Esto es fertilidad, mucha más retribución<br>con el mismo capital en vientres.</h2>
            <a class="btn btn-primary h5" href="ventas">¿QUÉ VENDEMOS?</a>
        </div>
        <div class="swiper-slide slide-contacto">
            <h2 class="h2">Estamos agradecidos por tener la oportunidad<br>de buscar la excelencia disfrutando lo que hacemos. </h2>
            <a class="btn btn-primary h5" href="contacto">CONTACTO</a>
        </div>
<!--
        <div class="swiper-slide slide-remate">
            <img class="img-fluid" src="assets/img/home/img-slider-4-remate.jpg" alt="70 Toros Angus de 2 años">
            <h2 class="h2">Remate de la cabaña<br>en la localidad de Balcarce<br>organización de la firma<br>Fontana y cia.</h2>
        </div>
-->
    </div>
    
    <!-- Navigation buttons -->
    <div class="swiper-button-prev swiper-button-white hidden-xs"></div>
    <div class="swiper-button-next swiper-button-white hidden-xs"></div>
  
  
    <div class="container">
      <img class="img-responsive visible-xs" src="assets/img/lacabana/img-lacabana-07.jpg" alt="Cabaña flores chicas">
      <div class="row">
          <div class="col-sm-4 col-xs-12">
              <h3 class="h4">FERTILIDAD</h3>
              <p>Hemos logrado el 95% de preñez en 65 días de servicio en los últimos años. Trabajamos con una carga de 1.2 vacas por hectárea ganadera, sin aportes de suplementos al sistema.</p>
          </div>
          <div class="col-sm-4 col-xs-12">
              <h3 class="h4">FACILIDAD DE PARTO</h3>
              <p>Implementando al servicio hiperprecoz, logramos el 83.5% de terneros marcados sobre vientre ingresado a servicio de reposición en el destete 2015.</p>
          </div>
          <div class="col-sm-4 col-xs-12">
              <h3 class="h4">FENOTIPO FUNCIONAL</h3>
              <p>El 43 % de los machos nacidos son vendidos como reproductores, el resto se capa y se engorda o vende al destete. Asegurando una alta precisa selección.</p>
          </div>
      </div>
  </div>
</section>

<?php //Y termina acá ?>

<?php require_once('includes/formulario.php'); ?>
<?php require_once('includes/footer.php'); ?>