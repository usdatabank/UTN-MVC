<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-5"><span class="section-heading-upper">registrate a nuestro</span><span class="section-heading-lower">fancafe</span></h2>
                    <p class="address mb-5"><em>Recibí todas las novedades de nuestra comunidad para todos los amantes del buen cafe.</em></p>
                        <form method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nombre</label>    
                                        <input class="form-control" name="n_nombre" type="text" id="nombre" maxlength="25" placeholder="Ingrese su nombre" required autofocus autocapitalize="true"><br>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Apellido</label>    
                                        <input class="form-control" name="n_apellido" type="text" id="apellido" maxlength="25" placeholder="Ingrese su apellido" required><br>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="">Correo Electrónico</label>
                                        <input class="form-control" name="n_email" type="email" id="email" maxlength="70" placeholder="Ingrese el correo con el que se registro" required><br>
                                    </div> 
                                </div>
                            </div>
                            <div class="form-group">                         
                                <input class="btn btn-primary" type="submit" value=" Recibir Notificaciones " name="btregistra"><br>
                            </div>
                        </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner text-center rounded">
                    <p class="address mb-5"><em>Si se encuentra subscripto a las novedades y ya no quiere recibirlas ingrese su email a continuación para ser eliminado de la lista de socios</em></p>
                        <form method="POST">
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="">Correo Electrónico</label>
                                        <input class="form-control" name="e_email" type="email" id="email" maxlength="70" placeholder="Ingrese su correo electrónico personal" required><br>
                                    </div> 
                                </div>
                            </div>
                            <div class="form-group">                         
                                <input class="btn btn-dark" type="submit" value=" Deseo No Recibir Mas Notificaciones " name="bteliminar"><br>
                            </div>
                        </form>
                    <p class="address mb-0"><small><em>Llame en cualquier momento por cualquier consulta</em></small><span><br>(0264) 345-6789</span></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    #instanciamos la clase para registrar al usuario
    $registro = ControladorFormulario::RegistroUsuario();
    $bajasubcripcion = ControladorFormulario::EliminaSocio();
?>