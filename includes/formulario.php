<section class="formulario-contacto">
    <form class="container" action="includes/process_form.php" id="contact_form">
        <div class="row">
            <div class="col-xs-12 col-md-3">
                <h3 class="h5">CONSULTE Y NOSOTROS RESPONDEMOS</h3>
                <p>Complete el formulario para consultarnos su inquietud y mantenerse al día con las noticias y fechas de próximos remates.</p>
            </div>
            <div class="col-xs-12 col-md-4 col-md-offset-1">
                <input name="firstname" type="text" class="form-control" placeholder="Nombre">
                <input name="lastname" type="text" class="form-control" placeholder="Apellido"> 
                <input name="email" type="email" class="form-control" placeholder="Email">
            </div>
            <div class="col-xs-12 col-md-4 form-group">
                <textarea name="consult" class="form-control" placeholder="Consulta"></textarea>
                <p class="error-msg form-msg"></p>
                <p class="success-msg form-msg"></p>
                <button type="submit" class="h6 btn btn-primary btn-lg btn-block">ENVIAR</button>
            </div>
        </div>
    </form>
</section>