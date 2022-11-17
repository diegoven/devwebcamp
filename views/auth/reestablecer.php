<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Coloca tu nueva contraseña</p>

    <?php
    require_once __DIR__ . "/../templates/alertas.php";
    ?>

    <?php if ($token_valido) { ?>
        <form method="POST" class="formulario">
            <div class="formulario__campo">
                <label for="password" class="formulario__label">Contraseña nueva</label>
                <input type="password" name="password" id="password" class="formulario__input">
            </div>

            <input type="submit" value="Guardar contraseña" class="formulario__submit">
        </form>
    <?php } ?>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? ¡Inicia sesión!</a>
        <a href="/registro" class="acciones__enlace">¿Aún no tienes cuenta? ¡Obtener una!</a>
    </div>
</main>