$(function () 
{
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
 });
function agregarPresidium()
{
	var nombreTitular = "",cargoTitular = "",radioTitularAsistio = "",nombreRep = "",cargoRep = "",radioRepAsistio = "";
	nombreTitular = $('#nombreTitular').val();
	cargoTitular = $('#cargoTitular').val();
	radioTitularAsistio = $('.radioAsistioTitular:checked').val();
	nombreRep = $('#nombreRepresentante').val();
	cargoRep = $('#cargoRepresentante').val();
	radioRepAsistio = $('.radioAsistenciaRep:checked').val();
	if(validarFormPresidium(nombreTitular,cargoTitular,radioTitularAsistio,nombreRep,cargoRep,radioRepAsistio))
	{
		$("<tr><td>"+nombreTitular+"<input type='hidden' name='Datos[nombreTitular][]' value='"+nombreTitular+"'></td><td>"+cargoTitular+"<input type='hidden' name='Datos[cargoTitular][]' value='"+cargoTitular+"'></td><td>"+radioTitularAsistio+"<input type='hidden' name='Datos[radioAsistenciaTitular][]' value='"+radioTitularAsistio+"'></td><td>"+nombreRep+"<input type='hidden' name='Datos[nombreRepresentante][]' value='"+nombreRep+"'></td><td>"+cargoRep+"<input type='hidden' name='Datos[cargoRepresentante][]' value='"+cargoRep+"'></td><td>"+radioRepAsistio+"<input type='hidden' name='Datos[radioAsistenciaRep][]' value='"+radioRepAsistio+"'></td><td><input  type='button' class='btn btn-danger btn-sm'  onclick='eliminarFilaPresidium(this)' value='X'></td></tr>").appendTo("#filaTbodyPresidium");
		$("#btnPreContinuar").prop("disabled",false);
	}
	else
		alert("Completar todos los campos");
}
function eliminarFilaPresidium(fila)
{
	var fila = fila.closest("tr");
	fila.remove();
	if($("#filaTbodyPresidium tr").length == 0)
		$("#btnPreContinuar").prop("disabled",true);

}
function validarFormPresidium(nombreTitular,cargoTitular,radioTitularAsistio,nombreRep,cargoRep,radioRepAsistio)
{
	if(nombreTitular != "" && cargoTitular != "" && radioTitularAsistio != undefined && nombreRep != "" && cargoRep != "" && radioRepAsistio != undefined)
		return true;
	else
		return false;
}
$("#btnPreContinuar").click(function()
{
	$("#ie").removeClass("disabledTab");
	$('.nav-tabs li:eq(3) a').tab('show');
});
function agregarInvEsp()
{
	var nombre = "", cargo = "";
	nombre = $('#nombreIe').val();
	cargo = $('#cargoIe').val();
	if(nombre != "" && cargo != "")
	{
		$("<tr><td>"+nombre+"<input type='hidden' name='Datos[nombreIe][]' value='"+nombre+"'></td><td>"+cargo+"<input type='hidden' name='Datos[cargoIe][]' value='"+cargo+"'></td><td><input  type='button' class='btn btn-danger btn-sm'  onclick='eliminarFilaInvEsp(this)' value='X'></td></tr>").appendTo("#filaTbodyInvEsp");
		$("#btnIeContinuar").prop("disabled",false);
	}
	else
		alert("Completar todos los datos"); 
}
$("#btnIeContinuar").click(function()
{
	$("#pm").removeClass("disabledTab");
	$(".nav-tabs li:eq(2) a").tab('show');
});
function eliminarFilaInvEsp(fila)
{
	var fila = fila.closest("tr");
	fila.remove();
	if($("#filaTbodyInvEsp tr").length == 0)
		$("#btnIeContinuar").prop("disabled",true);
}
$(document).on("click",".radioAsistenciaPm", function()
{
	var valueRadio = $(this).val();
	switch(valueRadio)
	{
		case'SI':
			$("#btnPmContinuar").prop("disabled",false);
			break;
		case'NO':
			break;
	}
});
$("#btnPmContinuar").click(function()
{
	$("#ic").removeClass("disabledTab");
	$(".nav-tabs li:eq(1) a").tab('show');
});
$(document).on("click",".checkboxIc",function()
{
	numCheckBox = $('.todo-list input:checkbox:checked').length;
	if(numCheckBox > 0)
		$("#btnIcContinuar").prop("disabled",false);
	else
		$("#btnIcContinuar").prop("disabled",true);
});
$("#btnIcContinuar").click(function()
{
	$("#od").removeClass("disabledTab");
	$(".nav-tabs li:eq(0) a").tab('show');
});
$('.clockpicker').clockpicker(
{
	donetext: 'Agregar hora',
	autoclose: true,
	default: 'now'
});
$("#btnAgregarActividad").click(function()
{
	$('<div class="row"><div class="col-md-11"><div class="form-group"><input type="text" name="Datos[actividad][]" class="form-control"></div></div><div class="col-md-1"><div class="form-group"><button class="btn btn-danger btn-sm" onclick="eliminarFilaActividad(this)">X</button></div></div></div>').appendTo(".odactividad");
});
function eliminarFilaActividad(fila)
{
	var fila = fila.closest(".row")
	fila.remove();
}
// $("#btnEnviar").click(function()
// {
// 	$("#frmDatosGira").submit();
// });
function delegaciones()
{
	var opciones = "<option value=''>--- Seleccionar delegación ---</option>";
	$.ajax(
	{
		url:'app/controller/crudaltagira.php?accion=delegaciones',
        dataType: "json",
        success:  function (data) 
        {
        	if($.isArray(data))
        	{
				for (var i = 0; i < data.length; i++) 
				{
					opciones = opciones + "<option value='"+data[i].id+"'>"+data[i].delegacion+"</option>";
				}
			}
			$("#delegaciones").html(opciones);
        }
	});
}
function dependenciasM()
{
	var opciones = "<option value=''>--- Seleccionar dependencia municipal ---</option>";
	$.ajax(
	{
		url:'app/controller/crudaltagira.php?accion=dependenciasM',
        dataType: "json",
        success:  function (data) 
        {
        	if($.isArray(data))
        	{
				for (var i = 0; i < data.length; i++) 
				{
					opciones = opciones + "<option value='"+data[i].id+"'>"+data[i].dependencia+"</option>";
				}
			}
			$("#dependenciaMunicipal").html(opciones);
        }
	});
}
