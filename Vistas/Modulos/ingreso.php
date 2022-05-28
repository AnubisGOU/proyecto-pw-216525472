<h1>
    "Ingreso"
</h1>
<form method="post">
    <label for="email">Email:</label>
    <input type="email" id="email" name="ingresoEmail"><br>
    <label for="pwd">Contraseña:</label>
    <input type="password" id="pwd" name="ingresoPassword"><br>
    <input type="submit" value="Ingresar">
</form>
<?php
    $ingreso = new ControladorFormularios();
    $ingreso -> ctrIngreso();
?>