<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Regístrate en DevWebCamp</p>

    <?php
    require_once __DIR__ . "/../templates/alertas.php"
    ?>

    <form method="POST" action="/registro" class="formulario">
        <div class="formulario__campo">
            <label for="nombre" class="formulario__label">Nombre </label>
            <input type="text" name="nombre" id="nombre" class="formulario__input" placeholder="Diego" value="<?php echo $usuario->nombre; ?>">
        </div>

        <div class="formulario__campo">
            <label for="apellido" class="formulario__label">Apellido </label>
            <input type="text" name="apellido" id="apellido" class="formulario__input" placeholder="Suárez" value="<?php echo $usuario->apellido; ?>">
        </div>

        <div class="formulario__campo">
            <label for="email" class="formulario__label">E-mail </label>
            <input type="email" name="email" id="email" class="formulario__input" placeholder="correo@correo.com" value="<?php echo $usuario->email; ?>">
        </div>

        <div class="formulario__campo">
            <label for="password" class="formulario__label">Contraseña </label>
            <input type="password" name="password" id="password" class="formulario__input">
        </div>

        <div class="formulario__campo">
            <label for="password2" class="formulario__label">Repetir contraseña </label>
            <input type="password" name="password2" id="password2" class="formulario__input">
        </div>

        <input type="submit" value="Crear cuenta" class="formulario__submit">
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? ¡Inicia sesión!</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu contraseña?</a>
    </div>
</main>