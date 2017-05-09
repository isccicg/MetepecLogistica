function agregarConvocados()
{
	var dependencia ="",enlace = "",tel = "",email = "",asistio = "",comisiones = "",cumplio = "";
	dependencia = $("[name='Datos[selectDependencia]']").val();
	enlace = $("[name='Datos[selectEnlace]']").val();
	tel = $("[name='Datos[selectTelefono]']").val();
	email = $("[name='Datos[selectEmail]']").val();
	asistio = $("[name='Datos[btnRadioAsistencia]']:checked").val();
	comisiones = $("[name='Datos[comisiones]']").val();
	cumplio = $("[name='Datos[btnRadioCumplio]']:checked").val();
	$("<tr><td>"+dependencia+"</td><td>"+enlace+"</td><td>"+tel+"</td><td>"+email+"</td><td>"+asistio+"</td><td>"+comisiones+"</td><td>"+cumplio+"</td><td><input  type='button' class='btn btn-danger'  onclick='eliminarFila(this)' value='X'></td></tr>").appendTo("#filaTbody");
	$("#bntGuardar").removeClass("disabled");

}
function eliminarFila(fila)
{
	var fila = fila.closest("tr");
	fila.remove();
}


$('#datepicker').datepicker({
 autoclose: true
});