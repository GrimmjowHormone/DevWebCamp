<main class="auth">
    <h2 class="auth__heading">
        <?php echo $titulo ?>
    </h2>


    <p class="auth__texto">Registrate en DevWebCamp</p>

    <?php require_once __DIR__ . '/../templates/alertas.php' ?>
    <form action="/registro" method="post" class="formulario">
        <div class="formulario__campo">
            <label for="nombre" class="formulario__label">Nombre</label>
            <input type="text"
                name="nombre"
                class="formulario__input"
                placeholder="Tu nombre"
                value="<?php echo $usuario->nombre ?>"
                id="nombre">

        </div>
        <div class="formulario__campo">
            <label for="apellido" class="formulario__label">apellido</label>
            <input type="text"
                name="apellido"
                class="formulario__input"
                value="<?php echo $usuario->apellido ?>"

                placeholder="Tu apellido"
                id="apellido">
        </div>
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input type="email"
                name="email"
                class="formulario__input"
                value="<?php echo $usuario->email ?>"

                placeholder="Tu email"
                id="email">
        </div>

        <div class="formulario__campo">
            <label for="password" class="formulario__label">Password</label>
            <input type="password"
                name="password"
                class="formulario__input"
                placeholder="Tu password"
                id="password">
        </div>
        <div class="formulario__campo">
            <label for="password2" class="formulario__label">Repetir Password</label>
            <input type="password"
                name="password2"
                class="formulario__input"
                placeholder="Repite tu password"
                id="password2">
        </div>
        <input type="submit" value="Crear tu cuenta" class="formulario__submit">
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? Iniciar sesión</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu password?</a>
    </div>
</main>