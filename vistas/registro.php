    <h1 class="titulopagina"> Registro </h1>
    <div>
        <form method="POST">
        <label for="">Nombre: </label>    
        <input name="n_nombre" type="text" id="nombre">

        <label for="">Apellido: </label>    
        <input name="n_apellido" type="text" id="apellido">
        
        <label for="">Email: </label>
        <input name="n_email" type="email" id="email">

        <label for="">Contraseña: </label>
        <input name="n_pswd" type="password" id="pswd">
        <input type="submit" value="Registrar" name="btregistra">

        </form>
    </div>
    <?php
        #instanciamos la clase para registrar al usuario
        $registro = ControladorFormulario::RegistroUsuario();
    ?>