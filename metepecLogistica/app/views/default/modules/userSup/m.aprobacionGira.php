 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
   <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <div class="row">
                <div class="col-md-3">
                  <!-- <div class="form-group"> -->
                    <label>DE:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="Datos[fechaInicial]" class="form-control pull-right datepicker">
                    </div>
                  <!-- </div> -->
                </div>
                <div class="col-md-3">
                  <!-- <div class="form-group"> -->
                    <label>HASTA:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="Datos[fechaFinal]" class="form-control pull-right datepicker">
                    </div>
                  <!-- </div> -->
                </div>
                <div class="col-lg-1 col-xs-12 text-center">
                    <label>&nbsp;</label>
                    <div class="btn-group btn-block text-center">
                        <button class="btn btn-primary btn-sm" type="submit" value="listaRcg" name="accion">Filtrar</button>
                    </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="tableGira" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>FOLIO</th>
                  <th>FECHA</th>
                  <th>NOMBRE DEL EVENTO</th>
                  <th>ORGANIZADOR</th>
                  <th>DELEGACIÓN MUNIPAL</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>

                  #HISTORIAL#
               
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->