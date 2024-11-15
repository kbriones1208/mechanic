<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Usuarios
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Usuarios</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCrearUsuario">
                Crear Usuario
          </button>
          
        </div>
        <div class="box-body">
          
            <table class="table table-bordered table-striped dt-responsive tablas" width="100%" >

                  <thead>
                    <tr>
                      <th style="width:20px">#</th>
                      <th>NOMBRE</th>
                      <th>APELLIDO</th>
                      <th>CORREO</th>
                      <th>ESTADO</th>
                      <th>ACCIONES</th>
                    </tr>
                  </thead>

                  <tbody>


                  </tbody>


            </table>

        </div>
       
      </div>
     

    </section>








    
    
  </div>

  <div id="modalCrearUsuario" class="modal fade" tabindex="-1" aria-labelledby="modalCrearUsuario" aria-hidden="true">
    <div class="modal-dialog">

      <div class="modal-content">

      <form action="../../config/registro_usuario.php" method="post" class="formulario_usuario">

        <div class="modal-header" style="background:#3C8DBC; color:white">
          <h1 class="modal-title" id="modalCrearUsuario">Crear Usuario</h1>
          
          
        </div>

        <div class="modal-body">

          <div class="box-body">

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" name="nombres" placeholder="Nombres" required>
              </div>
            </div>

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" name="apellidos" placeholder="Apellidos" required>
              </div>
            </div>
                       
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="text" class="form-control input-lg" name="email" placeholder="Correo" required>
              </div>
            </div>

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="password" class="form-control input-lg" name="pass" placeholder="Contraseña" required>
              </div>
            </div>

         <div class="modal-footer">
            <button type="button" class="btn btn-danger pull-center" data-dismiss="modal">Salir</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
         </div>

         </div>
        </div>
      </form>  
      </div>
    </div>
  </div>