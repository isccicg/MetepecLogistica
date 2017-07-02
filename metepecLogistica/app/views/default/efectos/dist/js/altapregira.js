function agregarConvocados()
{
	var dependencia ="",enlace = "",tel = "",email = "",asistio = "",comisiones = "",cumplio = "";
	dependencia = $("[name='selectDependencia']").val();
	enlace = $("[name='selectEnlace']").val();
	tel = $("[name='selectTelefono']").val();
	email = $("[name='selectEmail']").val();
	asistio = $("[name='btnRadioAsistencia']:checked").val();
	comisiones = $("[name='comisiones']").val();
	cumplio = $("[name='btnRadioCumplio']:checked").val();
	$("<tr><td>"+dependencia+"<input type='hidden' name='Datos[selectDependencia][]' value='"+dependencia+"'></td><td>"+enlace+"<input type='hidden' name='Datos[selectEnlace][]' value='"+enlace+"'></td><td>"+tel+"<input type='hidden' name='Datos[selectTelefono][]' value='"+tel+"'></td><td>"+email+"<input type='hidden' name='Datos[selectEmail][]' value='"+email+"'></td><td>"+asistio+"<input type='hidden' name='Datos[btnRadioAsistencia][]' value='"+asistio+"'></td><td>"+comisiones+"<input type='hidden' name='Datos[comisiones][]' value='"+comisiones+"'></td><td>"+cumplio+"<input type='hidden' name='Datos[btnRadioCumplio][]' value='"+cumplio+"'></td><td><input  type='button' class='btn btn-danger'  onclick='eliminarFila(this)' value='X'></td></tr>").appendTo("#filaTbody");
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