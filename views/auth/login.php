<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Inicia sesión en DevWebCamp</p>

    <form action="" class="formulario">
    <div class="formulario__campo">
            <label for="email" class="formulario__label">E-mail </label>
            <input type="email" name="email" id="email" class="formulario__input" placeholder="correo@correo.com">
        </div>

        <div class="formulario__campo">
            <label for="password" class="formulario__label">Contraseña </label>
            <input type="password" name="password" id="password" class="formulario__input">
        </div>

        <input type="submit" value="Iniciar sesión" class="formulario__submit">
    </form>

    <div class="acciones">
        <a href="/registro" class="acciones__enlace">¿Aún no tienes cuenta? ¡Obtener una!</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu contraseña?</a>
        </div>
</main>