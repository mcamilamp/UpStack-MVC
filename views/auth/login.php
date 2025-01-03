<div class="contenedor login">
    <?php include_once __DIR__ . '/../templates/nombreSitio.php'; ?>


    <div class="contenedor-sm">
        <p class="descripcion-pagina">Iniciar Sesión</p>

        <form action="/" class="formulario" method="POST">
            <div class="campo">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Tu Email">
            </div>

            <div class="campo">
                <label for="password">Password</label>
                <input type="password" name="email" id="password" placeholder="Tu Password">
            </div>

            <input type="submit" class="boton" value="Iniciar Sesión">
        </form>

        <div class="acciones">
            <a href="/crear">¿Aún no tienes una cuenta? Crea una</a>
            <a href="/olvide">¿Olvidaste tu password?</a>
        </div>
    </div> <!--.contenedor-sm-->
</div>