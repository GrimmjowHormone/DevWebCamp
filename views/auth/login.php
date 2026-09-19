<main class="auth">
    <h2 class="auth__heading">
        <?php echo $titulo ?>
    </h2>


    <p class="auth__texto">Inicia sesión en DevWebCamp</p>
    <form action="" class="formulario">
        <div class="formulario__campo">
            <label for="" class="formulario__label">Email</label>
            <input type="email"
                name="email"
                class="formulario__input"
                placeholder="Tu email"
                id="email">
        </div>

        <div class="formulario__campo">
            <label for="" class="formulario__label">Password</label>
            <input type="password"
                name="password"
                class="formulario__input"
                placeholder="Tu password"
                id="password">
        </div>
        <input type="submit" value="Iniciar Sesión" class="formulario__submit">
    </form>

    <div class="acciones">
        <a href="/registro" class="acciones__enlace">¿Aún no tienes cuenta? Obtener una</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu password?</a>
    </div>
</main>