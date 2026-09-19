<main class="auth">
    <h2 class="auth__heading">
        <?php echo $titulo ?>
    </h2>


    <p class="auth__texto">Recupera tu acceso a DevWebCamp</p>
    <form action="" class="formulario">
        <div class="formulario__campo">
            <label for="" class="formulario__label">Email</label>
            <input type="email"
                name="email"
                class="formulario__input"
                placeholder="Tu email"
                id="email">
        </div>


        <input type="submit" value="Enviar Instrucciones" class="formulario__submit">
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? Iniciar sesión</a>
        <a href="/registro" class="acciones__enlace">¿Aún no tienes cuenta? Obtener una</a>

    </div>
</main>