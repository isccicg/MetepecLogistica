<body onload="objDelegaciones(); objDependenciasM(); onjDelegacionesBeneficiario();"></body>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pregira
        <small>crear</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">Pregira</a></li>
        <li class="active">crear</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <form id="frmDatosPregira" method="POST" action="app/controller/crudaltapregira.php?accion=datosAltaPreGira">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos Generales</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
              <div class="col-md-12">
                <div class="pull-right">
                  <label class="radio-inline">
                    <div class="checkbox icheck">
                      <input type="radio" name="btnradio"> CITATORIO
                    </div>
                  </label>
                  <label class="radio-inline">
                    <div class="checkbox icheck">
                      <input type="radio" name="btnradio" checked> EMERGENTE
                    </div>
                  </label>
                </div>
              </div>
              <div class="col-md-12">
                <div class="row ">
				          <div class="col-md-2 pull-right">
                    <!-- Date -->
                    <div class="form-group">
                        <label>FOLIO:</label>
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-hashtag"></i>
                            </div>
                            <input type="text" class="form-control pull-right" disabled="true">
                        </div>
                    </div>
                  </div>
                  <div class="col-md-2 pull-right">
                    <!-- Date -->
                    <div class="form-group">
                        <label>HORA:</label>
                        <div class="input-group clockpicker">
                            <div class="input-group-addon">
                                <i class="glyphicon glyphicon-time"></i>
                            </div>
                            <input type="text" name="Datos[hora]" class="form-control pull-right" value="">
                        </div>
                    </div>
                  </div>
                  <div class="col-md-3 pull-right">
                    <!-- Folio -->
                    <div class="form-group">
                        <label>FECHA:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" name="Datos[fecha]" class="form-control pull-right" id="datepicker">
                        </div>
                    </div>
                  </div>
					
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>RESPONSABLE U ORGANIZADOR</label>
                      <select name="Datos[responsablepG]" class="form-control" required>
                        <option value="">--- Seleccionar responsable u organizador ---</option>
                        <option value="Gobierno Federal">Gobierno Federal</option>
                        <option value="Gobierno Estatal">Gobierno Estatal</option>
                        <option value="Gobierno Municipal">Gobierno Municipal</option>
                        <option value="ONG">ONG</option>
                        <option value="CDE PRI">CDE PRI</option>
                        <option value="CEN PRI">CEN PRI</option>
                      </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>DEPENDENCIA</label>
                      <input type="text" name="Datos[dependencia]" class="form-control" required>
                  </div>
                </div>
				        <div class="col-md-4">
                  <div class="form-group">
                    <label>DEPENDENCIA MUNICIPAL</label>
                      <select name="Datos[dependenciaMunicipal]" class="form-control" id="dependenciaMunicipal" required>
                      </select>
                  </div>
                </div>    
              </div>  <!-- /.row -->

              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label>RESPONSABLE</label>
                      <input type="text" name="Datos[responsable]" class="form-control" required>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>CARGO</label>
                    <input type="text" name="Datos[cargoResponsable]" class="form-control" required> 
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>EMAIL</label>
                      <input type="text" name="Datos[emailResponsable]" class="form-control" required>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>TELEFONO</label>
                      <input type="text" name="Datos[telefonoResponsable]" class="form-control" id="numAsistentes" required>
                  </div>
                </div>
              </div> <!-- /.row -->
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label>ENLACE MUNICIPAL</label>
                      <input type="text" name="Datos[enlace]" class="form-control" required>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>CARGO</label>
					          <input type="text" name="Datos[cargoEnlace]" class="form-control" required>     
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>EMAIL</label>
                      <input type="text" name="Datos[emailEnlace]" class="form-control" required>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>TELEFONO</label>
                      <input type="text" name="Datos[telefonoEnlace]" class="form-control" id="numAsistentes" required>
                  </div>
                </div>
              </div> <!-- /.row -->

              <div class="row">
                 <div class="col-md-12">
                  <div class="form-group">
                    <label>NOMBRE DEL EVENTO</label>
                      <input type="text" name="Datos[evento]" class="form-control" required>
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label>DOMICILIO</label>
                        <input type="text" name="Datos[domicilio]" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>COLONIA</label>
                        <input type="text" name="Datos[colonia]" class="form-control" required>
                    </div>
                </div>
							  <div class="col-md-3">
                  <div class="form-group">
                      <label>DELEGACION</label>
                      <select name="Datos[delegacion]" class="form-control" id="delegaciones" required>
                      </select>
                  </div>
                </div>
							  <div class="col-md-1">
                  <div class="form-group">
                    <label>SECCION</label>
                    <input type="text" name="Datos[seccion]" class="form-control text-right" id="numAsistentes" required>
                  </div>
                </div>
              </div>  <!-- /.row -->
            </div>
              <!-- /.box-body -->
          </div>
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li><a href="#convocados" data-toggle="tab">Convocados</a></li>
            </ul>
            <div class="tab-content no-padding">  
              <div class="chart tab-pane active" id="act-agenda">
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">Convocados</h3>
                  </div>
                  <div class="box-body">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <label>DEPENDENCIA</label>
                              <input type="text" name="selectDependencia" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label>ENLACE</label>
      					            <input type="text" name="selectEnlace" class="form-control"> 
                           
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label>TELEFONO</label>
      					            <input type="text" name="selectTelefono" class="form-control" id="numAsistentes"> 
                            
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label>EMAIL</label>
      					  <input type="text" name="selectEmail" class="form-control">                       
                          </div>
                        </div>
                        
                      </div> <!-- /.row -->
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <label>ASISTIÓ</label>
                            <div class="input-group">
                              <label class="radio-inline">
                                <input type="radio" name="btnRadioAsistencia" value="SI">SI
                              </label>
                              <label class="radio-inline">
                                <input type="radio" name="btnRadioAsistencia" value="NO">NO
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label>COMISIONES</label>
                            <input type="text" name="comisiones" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label>CUMPLIÓ</label>
                            <div class="input-group">
                              <label class="radio-inline">
                                <input type="radio" name="btnRadioCumplio" value="SI">SI
                              </label>
                              <label class="radio-inline">
                                <input type="radio" name="btnRadioCumplio" value="NO">NO
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                  <div class="box-footer">
                    <button type="button" onclick="agregarConvocados()" class="btn btn-success pull-right">Agregar</button>
                  </div>
                </div><!-- /.box -->
                
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h4 class="bg-primary text-center pad-basic no-btm">CONVOCADOS</h4>
                  </div>
                  <div class="box-body">
                    <div class="col-md-12">
                      <div class="col-lg-12 col-xs-12 table-responsive">
                        <table class="table table-hover table-bordered table-condensed text-center">
                          <thead>
                            <th>DEPENDENCIA</th>
                            <th>ENLACE</th>
                            <th>TELEFONO</th>
                            <th>EMAIL</th>
                            <th>ASISTIO</th>
                            <th>COMISIONES</th>
                            <th>CUMPLIÓ</th>
                            <th>ELIMINAR</th>
                          </thead>
                          <tbody id="filaTbody">
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="box-footer">
                    <div class="pull-right">
                      <input type="submit" name="btnGuardarPregira" class="btn btn-primary disabled" id="bntGuardar">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </form>
        </div>
        
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->