function agregarPresidium()
{
	var nombreTitular = "",cargoTitular = "",radioTitularAsistio = "",nombreRep = "",cargoRep = "",radioRepAsistio = "";
	nombreTitular = $('[name="Datos[nombreTitular]"]').val();
	cargoTitular = $('[name="Datos[cargoTitular]"]').val();
	radioTitularAsistio = $('[name="Datos[btnRadioAsistenciaTitular]"]:checked').val();
	nombreRep = $('[name="Datos[nombreRepresentante]"]').val();
	cargoRep = $('[name="Datos[cargoRepresentante]"]').val();
	radioRepAsistio = $('[name="Datos[btnRadioAsistenciaRep]"]:checked').val();
	if(validarFormPresidium(nombreTitular,cargoTitular,radioTitularAsistio,nombreRep,cargoRep,radioRepAsistio))
	{
		$("<tr><td>"+nombreTitular+"</td><td>"+cargoTitular+"</td><td>"+radioTitularAsistio+"</td><td>"+nombreRep+"</td><td>"+cargoRep+"</td><td>"+radioRepAsistio+"</td><td><input  type='button' class='btn btn-danger btn-sm'  onclick='eliminarFilaPresidium(this)' value='X'></td></tr>").appendTo("#filaTbodyPresidium");
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
	nombre = $('[name="Datos[nombreIe]"]').val();
	cargo = $('[name="Datos[cargoIe]"]').val();
	if(nombre != "" && cargo != "")
	{
		$("<tr><td>"+nombre+"</td><td>"+cargo+"</td><td><input  type='button' class='btn btn-danger btn-sm'  onclick='eliminarFilaInvEsp(this)' value='X'></td></tr>").appendTo("#filaTbodyInvEsp");
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
$('[name="Datos[btnRadioAsistenciaPm]"]').click(function()
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
$(".checkboxIc").click(function()
{
	numCheckBox = $('.todo-list input:checkbox:checked').length;
	if(numCheckBox > 0)
		$("#btnIcContinuar").prop("disabled",false);
	else
		$("#btnIcContinuar").prop("disabled",true);
})
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
