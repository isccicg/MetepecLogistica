<body onload="dependenciasM(); delegaciones();"></body>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Gira
            <small>crear</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li><a href="#">Gira</a></li>
            <li class="active">crear</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <form id="frmDatosGira" method="POST" action="app/controller/crudaltagira.php">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Datos generales </h3>
                    </div><!-- /.box-header -->
                    
                    <!-- form start -->
                    
                    <div class="box-body">
                            <div class="col-md-12">
                                <div class="pull-right">
                                    <div class="form-group">
                                        <label>Pregira</label>
                                        <div class="input-group">
                                            <label class="radio-inline">
                                                <input type="radio" name="Datos[btnRadioCumplio]" value="SI">SI
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="Datos[btnRadioCumplio]" value="NO">NO
                                            </label>
                                        </div>
                                    </div>
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
                                                <input type="text" name="Datos[folio]" class="form-control pull-right" >
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
                            </div>  <!-- col-md-12 -->
                           
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label>NOMBRE DEL EVENTO</label>
                                        <input type="text" name="Datos[nombreEvento]" class="form-control">
                                    </div>
                                </div>
    							<div class="col-md-2">
                                    <div class="form-group">
                                        <label>NUMERO ASISTENTES</label>
                                        <input type="text" name="Datos[numAsistentes]" class="form-control">
                                    </div>
                                </div>
                            </div>  <!-- /.row -->
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>DOMICILIO</label>
                                        <input type="text" name="Datos[domicilio]" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>COLONIA</label>
                                        <input type="text" name="Datos[colonia]" class="form-control">
                                    </div>
                                </div>
    							  <div class="col-md-3">
                                    <div class="form-group">
                                        <label>DELEGACION</label>
                                        <select name="Datos[delegacion]" class="form-control" id="delegaciones">
                                            <option>Seleccionar enlace</option>
                                        </select>
                                    </div>
                                </div>
    							 <div class="col-md-1">
                                    <div class="form-group">
                                        <label>SECCION</label>
                                        <input type="text" name="Datos[seccion]" class="form-control">
                                    </div>
                                </div>
                            </div>  <!-- /.row -->
    						
    						
                            <div class = "row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                      <label>RESPONSABLE U ORGANIZADOR</label>
                                        <select name="Datos[responsable]" class="form-control">
                                          <option>Gobierno Federal</option>
                						  <option>Gobierno Estatal</option>
                                          <option>Gobierno Municipal</option>
                						  <option>ONG</option>
                						  <option>CDE PRI</option>
                						  <option>CEN PRI</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label>DEPENDENCIA</label>
                                        <select name="Datos[dependencia]" class="form-control">
                                          <option>Seleccionar enlace</option>
                                        </select>
                                    </div>
                                </div>
    				  
            				    <div class="col-md-4">
                                    <div class="form-group">
                                        <label>DEPENDENCIA MUNICIPAL</label>
                                        <select name="Datos[dependenciaMunicipal]" class="form-control" id="dependenciaMunicipal">
                                          <option>Seleccionar enlace</option>
                                        </select>
                                    </div>
                                </div>    
    						</div>
                    </div><!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- Tabs datos particulares -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs pull-right">
                        <li class="disabledTab" id="od"><a href="#ordenDia" data-toggle="tab">Orden del dia</a></li>
                        <li class="disabledTab" id="ic"><a href="#inteCabildo" data-toggle="tab">Integrantes de Cabildo</a></li>
                        <li class="disabledTab" id="pm"><a href="#preMunicipal" data-toggle="tab">Presidente Municipal</a></li>
                        <li class="disabledTab" id="ie"><a href="#invEspeciales" data-toggle="tab">Invitados Especiales</a></li>
                        <li class="active"><a href="#presidium" data-toggle="tab">Presidium</a></li>
                    </ul>
                    <div class="tab-content no-padding">  
                        <div class="chart tab-pane active" id="presidium">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Ingrese datos  :</h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <div class="box-body">
                                   
                                    <div class="row">
									     <div class="col-md-5">
                                            <div class="form-group">
                                                <label>NOMBRE DEL TITULAR </label>
                                                <input type="text" name="Datos[nombreTitular]" class="form-control">
                                            </div>
                                        </div>
									    <div class="col-md-5">
                                            <div class="form-group">
                                                <label>CARGO</label>
                                                <input type="text" name="Datos[cargoTitular]" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>ASISTIÓ</label>
                                                <div class="input-group">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="Datos[btnRadioAsistenciaTitular]" value="SI">SI
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="Datos[btnRadioAsistenciaTitular]" value="NO">NO
                                                    </label>
                                                </div>
                                            </div>
                                        </div>                                   
                                    </div> <!-- /.row -->

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>NOMBRE DEL REPRESENTANTE</label>
                                                <input type="text" name="Datos[nombreRepresentante]" class="form-control">
                                            </div>
                                        </div>
										 <div class="col-md-5">
                                            <div class="form-group">
                                                <label>CARGO</label>
                                                <input type="text" name="Datos[cargoRepresentante]" class="form-control">
                                            </div>
                                        </div>
										 <div class="col-md-2">
                                            <div class="form-group">
                                                <label>ASISTIÓ</label>
                                                <div class="input-group">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="Datos[btnRadioAsistenciaRep]" value="SI">SI
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="Datos[btnRadioAsistenciaRep]" value="NO">NO
                                                    </label>
                                                </div>
                                            </div>
                                        </div>     
                                    </div>
                                </div><!-- /.box-body -->

                                <div class="box-footer">
                                    <button onclick="agregarPresidium()" class="btn btn-success pull-right">Agregar</button>
                                </div>
                            </div><!-- /.box -->

                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h4 class="bg-primary text-center pad-basic no-btm">PRESIDIUM</h4>
                                </div>
                                <div class="box-body">
                                    <div class="col-md-12">
                                        <div class="col-lg-12 col-xs-12 table-responsive">
                                                <table class="table table-hover table-bordered table-condensed text-center">
                                                    <thead>
                                                    <th>NOMBRE DEL TITULAR</th>
                                                    <th>CARGO</th>
                                                    <th>ASITIÓ</th>
                                                    <th>NOMBRE DEL REPRESENTANTE</th>
                                                    <th>CARGO</th>
                                                    <th>ASISTIÓ</th>
                                                    <th>ELIMINAR</th>
                                                    </thead>
                                                    <tbody id="filaTbodyPresidium">
                                                    </tbody>
                                                </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="pull-right">
									    <button onclick="" class="btn btn-success pull-right" id="btnPreContinuar" disabled="true">Continuar <span class="glyphicon glyphicon-arrow-right"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab invitados especiales -->
                        <div class="chart tab-pane" id="invEspeciales">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Ingrese datos : </h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                <label>NOMBRE</label>
                                                <input type="text" name="Datos[nombreIe]" class="form-control">
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                               <div class="form-group">
                                                <label>CARGO</label>
                                                <input type="text" name="Datos[cargoIe]" class="form-control">
                                            </div>
                                            </div>
                                        </div>   
                                    </div> <!-- /.row -->
                                   
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <button onclick="agregarInvEsp()" class="btn btn-success pull-right">Agregar</button>
                                </div>
                            </div><!-- /.box-primary -->

                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h4 class="bg-primary text-center pad-basic no-btm">INVITADOS ESPECIALES</h4>
                                </div>
                                <div class="box-body">
                                    <div class="col-md-12">
                                        <div class="col-lg-12 col-xs-12 table-responsive">
                                                <table class="table table-hover table-bordered table-condensed text-center">
                                                    <thead>
                                                    <th>NOMBRE</th>
                                                    <th>CARGO</th>
                                                    <th>ELIMINAR</th>
                                                    </thead>
                                                    <tbody id="filaTbodyInvEsp">
                                                    </tbody>
                                                </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="pull-right">
									  <button onclick="" class="btn btn-success pull-right" disabled="true" id="btnIeContinuar">Continuar <span class="glyphicon glyphicon-arrow-right"></span></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab presidente municipal -->
                        <div class="chart tab-pane" id="preMunicipal">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Ingrese datos : </h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <div class="box-body">

                                    <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>ASISTIÓ</label>
                                                    <div class="input-group">
                                                        <label class="radio-inline">
                                                            <input type="radio" name="Datos[btnRadioAsistenciaPm]" value="SI">SI
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="Datos[btnRadioAsistenciaPm]" value="NO">NO
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>NOMBRE DE REPRESENTANTE </label>
                                                    <input type="text" name="Datos[nombreRepresentantePm]" class="form-control" disabled="true">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>CUMPLIÓ</label>
                                                    <div class="input-group">
                                                        <label class="radio-inline">
                                                            <input type="radio" name="Datos[btnRadioCumplioPm]" value="SI" disabled="true">SI
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="Datos[btnRadioCumplioPm]" value="NO" disabled="tru">NO
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <button class="btn btn-success pull-right" disabled="true" id="btnPmContinuar">Continuar <span class="glyphicon glyphicon-arrow-right"></span></button>
                                </div>
                            </div><!-- /.box -->

                        </div>
                        <div class="chart tab-pane" id="inteCabildo">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Seleccione integrantes : </h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <div class="box-body">
                                    <div class="row"> 
									    <div class="col-md-12">
    											<ul class="todo-list">
    											    <li>
    													<!-- drag handle -->
    												    <span class="handle">
    													   <i class="fa fa-ellipsis-v"></i>
    													   <i class="fa fa-ellipsis-v"></i>
    												    </span>
    												    <input type="checkbox" value="R1" class="checkboxIc">
        												<span class="text">R1</span>						
    												</li>
    												<li>
    												    <span class="handle">
    													   <i class="fa fa-ellipsis-v"></i>
    													   <i class="fa fa-ellipsis-v"></i>
    												    </span>
    												    <input type="checkbox" value="R2" class="checkboxIc">
    												    <span class="text">R2</span>
    												</li>
    												<li>
    												    <span class="handle">
    													    <i class="fa fa-ellipsis-v"></i>
    													    <i class="fa fa-ellipsis-v"></i>
    												    </span>
    													<input type="checkbox" value="R3" class="checkboxIc">
    													<span class="text">R3</span>
    												</li>
    												<li>
    												    <span class="handle">
    													   <i class="fa fa-ellipsis-v"></i>
    													   <i class="fa fa-ellipsis-v"></i>
    												    </span>
    												    <input type="checkbox" value="R4" class="checkboxIc">
    												    <span class="text">R4</span>
    											    </li>
                                                    <li>
                                                        <span class="handle">
                                                           <i class="fa fa-ellipsis-v"></i>
                                                           <i class="fa fa-ellipsis-v"></i>
                                                        </span>
                                                        <input type="checkbox" value="R5" class="checkboxIc">
                                                        <span class="text">R5</span>
                                                    </li>
                                                    <li>
                                                        <span class="handle">
                                                           <i class="fa fa-ellipsis-v"></i>
                                                           <i class="fa fa-ellipsis-v"></i>
                                                        </span>
                                                        <input type="checkbox" value="R6" class="checkboxIc">
                                                        <span class="text">R6</span>
                                                    </li>
                                                    <li>
                                                        <span class="handle">
                                                           <i class="fa fa-ellipsis-v"></i>
                                                           <i class="fa fa-ellipsis-v"></i>
                                                        </span>
                                                        <input type="checkbox" value="R7" class="checkboxIc">
                                                        <span class="text">R7</span>
                                                    </li>
                                                    <li>
                                                        <span class="handle">
                                                           <i class="fa fa-ellipsis-v"></i>
                                                           <i class="fa fa-ellipsis-v"></i>
                                                        </span>
                                                        <input type="checkbox" value="R8" class="checkboxIc">
                                                        <span class="text">R8</span>
                                                    </li>
                                                    <li>
                                                        <span class="handle">
                                                           <i class="fa fa-ellipsis-v"></i>
                                                           <i class="fa fa-ellipsis-v"></i>
                                                        </span>
                                                        <input type="checkbox" value="R9" class="checkboxIc">
                                                        <span class="text">R9</span>
                                                    </li>
                                                    <li>
                                                        <span class="handle">
                                                           <i class="fa fa-ellipsis-v"></i>
                                                           <i class="fa fa-ellipsis-v"></i>
                                                        </span>
                                                        <input type="checkbox" value="R10" class="checkboxIc">
                                                        <span class="text">R10</span>
                                                    </li>
                                                    <li>
                                                        <span class="handle">
                                                           <i class="fa fa-ellipsis-v"></i>
                                                           <i class="fa fa-ellipsis-v"></i>
                                                        </span>
                                                        <input type="checkbox" value="R11" class="checkboxIc">
                                                        <span class="text">R11</span>
                                                    </li>
                                                    <li>
                                                        <span class="handle">
                                                           <i class="fa fa-ellipsis-v"></i>
                                                           <i class="fa fa-ellipsis-v"></i>
                                                        </span>
                                                        <input type="checkbox" value="R12" class="checkboxIc">
                                                        <span class="text">R12</span>
                                                    </li>
                                                    <li>
                                                        <span class="handle">
                                                           <i class="fa fa-ellipsis-v"></i>
                                                           <i class="fa fa-ellipsis-v"></i>
                                                        </span>
                                                        <input type="checkbox" value="R13" class="checkboxIc">
                                                        <span class="text">R13</span>
                                                    </li>
                                                    <li>
                                                        <span class="handle">
                                                           <i class="fa fa-ellipsis-v"></i>
                                                           <i class="fa fa-ellipsis-v"></i>
                                                        </span>
                                                        <input type="checkbox" value="R14" class="checkboxIc">
                                                        <span class="text">R14</span>
                                                    </li>
                                                    <li>
                                                        <span class="handle">
                                                           <i class="fa fa-ellipsis-v"></i>
                                                           <i class="fa fa-ellipsis-v"></i>
                                                        </span>
                                                        <input type="checkbox" value="R15" class="checkboxIc">
                                                        <span class="text">R15</span>
                                                    </li>
    														
    											</ul>
                                        </div><!-- /.box -->
                                    </div> <!-- /.row -->

                                    
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <button onclick="" class="btn btn-success pull-right" disabled="true" id="btnIcContinuar">Continuar
                                    <span class="glyphicon glyphicon-arrow-right"></span></button>
                                </div>
                            </div><!-- /.box -->
                        </div>
                        <div class="chart tab-pane" id="ordenDia">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Ingrese datos :</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                        <div class="col-md-12 odactividad">
                                            <div class="row">
                                                <div class="col-md-11">
                                                    <div class="form-group">
                                                        <label>ACTIVIDAD :</label>
                                                        <input type="text" name="Datos[][actividad]" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-1">
                                                <button class="btn btn-success btn-sm" id="btnAgregarActividad">Agregar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <input type="submit" class="btn btn-primary pull-right" value="Enviar" id="btnEnviar">
                                </div>
                            </div><!-- /.box -->
                        </div>
                    </div>
                </div> <!-- /tabs -->

            </div>
            </form>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper