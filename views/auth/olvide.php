<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Recupera tu acceso a DevWebCamp</p>

    <?php
    require_once __DIR__ . "/../templates/alertas.php";
    ?>

    <form method="POST" action="/olvide" class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">E-mail </label>
            <input type="email" name="email" id="email" class="formulario__input" placeholder="correo@correo.com">
        </div>

        <input type="submit" value="Enviar instrucciones" class="formulario__submit">
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? ¡Inicia sesión!</a>
        <a href="/registro" class="acciones__enlace">¿Aún no tienes cuenta? ¡Obtener una!</a>
    </div>
</main>