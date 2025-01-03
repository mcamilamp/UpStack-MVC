<div class="contenedor olvide">
    <?php include_once __DIR__ . '/../templates/nombreSitio.php'; ?>


    <div class="contenedor-sm">
        <p class="descripcion-pagina">Recupera tu Password</p>

        <form action="/olvide" class="formulario" method="POST">
            <div class="campo">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Tu Email">
            </div>

            <input type="submit" class="boton" value="Enviar Instrucciones">
        </form>

        <div class="acciones">
            <a href="/">¿Ya tienes una cuenta? Iniciar Sesión</a>
            <a href="/crear">¿Aún no tienes una cuenta? Crea una</a>
        </div>
    </div> <!--.contenedor-sm-->
</div>