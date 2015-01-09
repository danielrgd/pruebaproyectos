    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Proyecto más votados</h3>
            </div>
            <div class="panel-body">
              <ol>
                <li>
                  <a>Botellas de agua</a>
                </li>
                <li>
                  <a>Un techo para mi pais</a>
                </li>
                <li>
                  <a>Música para divertirse</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="panel panel-primary" style="">
            <div class="panel-heading">
              <h3 class="panel-title">Proyectos más comentados</h3>
            </div>
            <div class="panel-body">
              <ol>
                <li>
                  <a>Botellas de agua</a>
                </li>
                <li>
                  <a>Un techo para mi pais</a>
                </li>
                <li>
                  <a>Música para divertirse</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Usuario más votados</h3>
            </div>
            <div class="panel-body">
              <ol>
                <li>
                  <a>Camilo Cifuentes</a>
                </li>
                <li>
                  <a>Leonardo Arevalo</a>
                </li>
                <li>
                  <a>Mionica Noriega</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="panel panel-primary" style="">
            <div class="panel-heading">
              <h3 class="panel-title">Usuarios más comentados</h3>
            </div>
            <div class="panel-body">
              <ol>
                <li>
                  <a>Andres Peñaranda</a>
                </li>
                <li>
                  <a>Lorena Dominguez</a>
                </li>
                <li>
                  <a>Leonardo Arévalo</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="fade modal" id="iniciar_sesion" style="">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-body">
            <form role="form">
              <div class="form-group">
                <label class="control-label" for="id_usuario">Usuario</label>
                <input class="form-control" id="id_usuario" placeholder="Usuario" type="text">
              </div>
              <div class="form-group">
                <label class="control-label" for="contrasena">Contraseña</label>
                <input class="form-control" id="contrasena" placeholder="Contraseña" type="password">
              </div>
              <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="fade modal" id="crear_cuenta" style="">
      <div class="modal-dialog modal-xs">
        <div class="modal-content">
          <div class="modal-body">
		  <legend>Crear Cuenta</legend>
            <form class="form-horizontal">
              <div class="form-group">
                <label class="control-label col-md-4" for="id_usuario">Usuario</label>
				<div class="col-md-4">
					<input class="form-control" id="id_usuario"  type="text">
				</div>
              </div>
			  <div class="form-group">
                <label class="control-label col-md-4" for="nombre_completo">Nombre completo</label>
				<div class="col-md-6">
					<input class="form-control" id="nombre_completo"  type="text">
				</div>
              </div>
			   <div class="form-group">
                <label class="control-label col-md-4" for="fecha_nacimiento">Fecha de Nacimiento</label>
				<div class="col-md-3">
					<input class="form-control" id="fecha_nacimiento"  type="text">
				</div>
              </div>
			  <div class="form-group">
                <label class="control-label col-md-4" for="profesion">Profesión</label>
				<div class="col-md-5">
					<input class="form-control" id="profesion" type="text">
				</div>
              </div>
			  <div class="form-group">
                <label class="control-label col-md-4" for="estudios">Estudios</label>
				<div class="col-md-5">
					<input class="form-control" id="estudios" type="text">
				</div>
              </div>
			  <div class="form-group">
                <label class="control-label col-md-4" for="idiomas">Idiomas</label>
				<div class="col-md-5">
					<input class="form-control" id="idiomas" type="text">
				</div>
              </div>
			  <div class="form-group">
				<label class="control-label col-md-4" for="pais">País</label>
				<div class="col-md-4">
					<select class="form-control">
						  <option></option>
						  <option>1</option>
						  <option>2</option>
						  <option>3</option>
						  <option>4</option>
						  <option>5</option>
					</select>
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-md-4" for="ciudad">Ciudad</label>
				<div class="col-md-4">
					<select class="form-control">
						  <option></option>
						  <option>1</option>
						  <option>2</option>
						  <option>3</option>
						  <option>4</option>
						  <option>5</option>
					</select>
				</div>
              </div>
			  <div class="form-group">
                <label class="control-label col-md-4" for="proyectos">Proyectos</label>
					<div class="col-md-8">
						<input class="form-control" id="proyectos"  type="text">
					</div>
              </div>
			  <div class="form-group">
                <label class="control-label col-md-4" for="temas_interes">Temas de Interés</label>
					<div class="col-md-8">
						<input class="form-control" id="temas_interes"  type="text">
					</div>
              </div>
			 <div class="form-group">
                <label class="control-label col-md-4" for="correo_electronico">Correo Electrónico</label>
					<div class="col-md-5">
						<input class="form-control" id="correo_electronico" type="email">
					</div>
              </div>
			  <div class="col-md-12">
				<h3>
					Configuración
				</h3>
			  </div>
              <div class="form-group">
                <label class="control-label col-md-4" for="contrasena">Contraseña</label>
					<div class="col-md-4">
						<input class="form-control" id="contrasena" placeholder="Contraseña" type="password">
					</div>
              </div>
			  <div class="form-group">
                <label class="control-label col-md-4" for="confirmacion_contrasena">Confirmación Contraseña</label>
					<div class="col-md-4">
						<input class="form-control" id="confirmacion_contrasena" placeholder="Confirmación Contraseña" type="password">
					</div>
              </div>
			  <div class="form-group">
                <label class="control-label col-md-4" for="visibilidad">Visibilidad</label>
					<div class="col-md-3">
						<select class="form-control">
							  <option></option>
							  <option>Público</option>
							  <option>Privado</option>
						</select>
					</div>
              </div>
			  <div class="form-group">
                <label class="control-label col-md-4" for="visibilidad">Idioma Preferido</label>
					<div class="col-md-3">
						<select class="form-control">
							  <option></option>
							  <option>A</option>
							  <option>B</option>
						</select>
					</div>
              </div>
			  
			  <div class="form-group">
				<div class="col-md-offset-4 col-md-8">
					<button type="submit" class="btn btn-primary">Crear</button>
					<button type="submit" class="btn btn-default">Cancelar</button>
					
				</div>
			</div>
            </form>
          </div>
        </div>
      </div>
    </div>
