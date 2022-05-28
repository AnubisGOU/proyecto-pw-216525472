<secction>
    <h1>Bienvenido Cazador, Unete al Gremio</h1>
    <form method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" name="registroUsuario" id="usuario">
        <label for="password">Contraseña:</label>
        <input type="password" name="registroPass" id="password">
        <label for="correo">E-mail:</label>
        <input type="email" name="registroEmail" id="correo">
        <input type="submit" value="Unirse al Gremio"><br>
    </form>
    <?php
        $registrocazador=ControladorFormularios::ctrRegistro();
        if($registrocazador=="OK"){
            echo ("Bienvenido a Hunter Palace Cazador");
            echo '<script>
                    if(window.history.replaceState){
                        window.history.repalceState(null, null, window.location.href);
                    }
                  </script>';
        }
    ?>
</section>