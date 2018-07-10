var indices;

function showPanel(nombrePanel, el){
	$(".pestana").removeClass('activo');
	$(el).addClass('activo');
	$(".panel").addClass('oculto');
	$("#" + nombrePanel).removeClass('oculto');
}

function buscar(){
	var apellidos = prompt("Escriba los apellidos a buscar:");
	if(apellidos != null && apellidos != ""){
		$.ajax({
			url: 'controllers/buscarporapellido.php',
			type: 'GET',
			dataType: 'json',
			data: {apellidos: apellidos},
		})
		.done(function(paciente) {
			rellenaPaciente(paciente);
			actualizaIndice(paciente.id);
		});
	}
}

function actualizaIndice(id){
	$.each(indices, function(index, val) {
		if(val == id) $("#indice_paciente").val(index);
	});
}

function buscarPrimero(){
	$("#indice_paciente").val(0);
	$.ajax({
		url: 'controllers/buscarprimero.php',
		type: 'GET',
		dataType: 'json',
		data: {},
	})
	.done(function(paciente) {
		rellenaPaciente(paciente);
	});
}

function getIndices(){
	var indices;
	$.ajax({
		url: 'controllers/indices.php',
		type: 'GET',
		dataType: 'json',
		async: false,
		data: {},
	})
	.done(function(data) {
		indices = data;
	});
	return indices;
}

function rellenaPaciente(paciente){
	$("#id_paciente").val(paciente.id);
	$("#apellidos").val(paciente.apellidos);
	$("#nombre").val(paciente.nombre);
	$("#numero-historia").val(paciente.num_historia);
	$("#fecha").val(paciente.fecha);
	$("#tipo-enferma").val(paciente.tipo_enferma);
	$("#edad").val(paciente.edad);
	$("#estado-civil").val(paciente.estado_civil);
	$("#ocupacion").val(paciente.ocupacion);
	$("#direccion").val(paciente.direccion);
	$("#ciudad").val(paciente.ciudad);
	$("#telefono").val(paciente.telefono);
	$("#nif").val(paciente.nif);
	$("#grupo-rh").val(paciente.rh);
	$("#antecedentes-familiares").html(paciente.antecedentes_familiares);
	$("#antecedentes-personales").html(paciente.antecedentes_personales);
	$("#historia-clinica").html(paciente.historia);
	$("#menarquia").val(paciente.menarquia);
	$("#tm").val(paciente.tm);
	$("#fur").val(paciente.fur);
	$("#cantidad > option").removeAttr('selected');
	$("#cantidad").val(paciente.cantidad);
	if(paciente.cantidad.length > 0)
		$("#cantidad > option[value="+paciente.cantidad+"]").attr('selected', 'selected');
	else
		$("#cantidad > option[value='']").attr('selected', 'selected');
	$("#dolor > option").removeAttr('selected');
	$("#dolor").val(paciente.dolor);
	if(paciente.dolor.length > 0)
		$("#dolor > option[value="+paciente.dolor+"]").attr('selected', 'selected');
	else
		$("#dolor > option[value='']").attr('selected', 'selected');
	$("#edad-sexual").val(paciente.edad_sexual);
	$("#dispareunia > option").removeAttr('selected');
	$("#dispareunia").val(paciente.dispareunia);
	if(paciente.dispareunia.length > 0)
		$("#dispareunia > option[value="+paciente.dispareunia+"]").attr('selected', 'selected');
	else
		$("#dispareunia > option[value='']").attr('selected', 'selected');
	$("#coitorragias > option").removeAttr('selected');
	$("#coitorragias").val(paciente.coitorragias);
	if(paciente.coitorragias.length > 0)
		$("#coitorragias > option[value="+paciente.coitorragias+"]").attr('selected', 'selected');
	else
		$("#coitorragias > option[value='']").attr('selected', 'selected');
	$("#anticonceptivos > option").removeAttr('selected');
	$("#anticonceptivos").val(paciente.anticonceptivos);
	if(paciente.anticonceptivos.length > 0)
		$("#anticonceptivos > option[value="+paciente.anticonceptivos+"]").attr('selected', 'selected');
	else
		$("#anticonceptivos > option[value='']").attr('selected', 'selected');
	$("#ano1").val(paciente.ano1);
	$("#embarazo1").val(paciente.embarazo1);
	$("#peso1").val(paciente.peso1);
	$("#parto1 > option").removeAttr('selected');
	$("#parto1").val(paciente.parto1);
	if(paciente.parto1.length > 0)
		$("#parto1 > option[value="+paciente.parto1+"]").attr('selected', 'selected');
	else
		$("#parto1 > option[value='']").attr('selected', 'selected');
	$("#sexo1 > option").removeAttr('selected');
	$("#sexo1").val(paciente.sexo1);
	if(paciente.sexo1.length > 0)
		$("#sexo1 > option[value="+paciente.sexo1+"]").attr('selected', 'selected');
	else
		$("#sexo1 > option[value='']").attr('selected', 'selected');
	$("#ano2").val(paciente.ano2);
	$("#embarazo2").val(paciente.embarazo2);
	$("#peso2").val(paciente.peso2);
	$("#parto2 > option").removeAttr('selected');
	$("#parto2").val(paciente.parto2);
	if(paciente.parto2.length > 0)
		$("#parto2 > option[value="+paciente.parto2+"]").attr('selected', 'selected');
	else
		$("#parto2 > option[value='']").attr('selected', 'selected');
	$("#sexo2 > option").removeAttr('selected');
	$("#sexo2").val(paciente.sexo2);
	if(paciente.sexo2.length)
		$("#sexo2 > option[value="+paciente.sexo2+"]").attr('selected', 'selected');
	else
		$("#sexo2 > option[value='']").attr('selected', 'selected');
	$("#ano3").val(paciente.ano3);
	$("#embarazo3").val(paciente.embarazo3);
	$("#peso3").val(paciente.peso3);
	$("#parto3 > option").removeAttr('selected');
	$("#parto3").val(paciente.parto3);
	if(paciente.parto3.length > 0)
		$("#parto3 > option[value="+paciente.parto3+"]").attr('selected', 'selected');
	else
		$("#parto3 > option[value='']").attr('selected', 'selected');
	$("#sexo3 > option").removeAttr('selected');
	$("#sexo3").val(paciente.sexo3);
	if(paciente.sexo3.length > 0)
		$("#sexo3 > option[value="+paciente.sexo3+"]").attr('selected', 'selected');
	else
		$("#sexo3 > option[value='']").attr('selected', 'selected');
	$("#ano4").val(paciente.ano4);
	$("#embarazo4").val(paciente.embarazo4);
	$("#peso4").val(paciente.peso4);
	$("#parto4 > option").removeAttr('selected');
	$("#parto4").val(paciente.parto4);
	if(paciente.parto4.length > 0)
		$("#parto4 > option[value="+paciente.parto4+"]").attr('selected', 'selected');
	else
		$("#parto4 > option[value='']").attr('selected', 'selected');
	$("#sexo4 > option").removeAttr('selected');
	$("#sexo4").val(paciente.sexo4);
	if(paciente.sexo4.length > 0)
		$("#sexo4 > option[value="+paciente.sexo4+"]").attr('selected', 'selected');
	else
		$("#sexo4 > option[value='']").attr('selected', 'selected');
	$("#ano5").val(paciente.ano5);
	$("#embarazo5").val(paciente.embarazo5);
	$("#peso5").val(paciente.peso5);
	$("#parto5 > option").removeAttr('selected');
	$("#parto5").val(paciente.parto5);
	if(paciente.parto5.length > 0)
		$("#parto5 > option[value="+paciente.parto5+"]").attr('selected', 'selected');
	else
		$("#parto5 > option[value='']").attr('selected', 'selected');
	$("#sexo5 > option").removeAttr('selected');
	$("#sexo5").val(paciente.sexo5);
	if(paciente.sexo5.length > 0)
		$("#sexo5 > option[value="+paciente.sexo5+"]").attr('selected', 'selected');
	else
		$("#sexo5 > option[value='']").attr('selected', 'selected');
	$("#ano6").val(paciente.ano6);
	$("#embarazo6").val(paciente.embarazo6);
	$("#peso6").val(paciente.peso6);
	$("#parto6 > option").removeAttr('selected');
	$("#parto6").val(paciente.parto6);
	if(paciente.parto6.length > 0)
		$("#parto6 > option[value="+paciente.parto6+"]").attr('selected', 'selected');
	else
		$("#parto6 > option[value='']").attr('selected', 'selected');
	$("#sexo6 > option").removeAttr('selected');
	$("#sexo6").val(paciente.sexo6);
	if(paciente.sexo6.length > 0)
		$("#sexo6 > option[value="+paciente.sexo6+"]").attr('selected', 'selected');
	else
		$("#sexo6 > option[value='']").attr('selected', 'selected');
}

function siguiente(){
	var indice = parseInt($("#indice_paciente").val()) + 1;
	var max = indices.length - 1;
	if (indice > max) indice = 0;
	$("#indice_paciente").val(indice);
	var id_paciente = indices[indice];
	$.ajax({
		url: 'controllers/buscarporid.php',
		type: 'GET',
		dataType: 'json',
		data: {id: id_paciente},
	})
	.always(function(paciente) {
		rellenaPaciente(paciente);
	});
}

function anterior(){
	var indice = parseInt($("#indice_paciente").val()) - 1;
	var max = indices.length - 1;
	if (indice < 0) indice = max;
	$("#indice_paciente").val(indice);
	var id_paciente = indices[indice];
	$.ajax({
		url: 'controllers/buscarporid.php',
		type: 'GET',
		dataType: 'json',
		data: {id: id_paciente},
	})
	.done(function(paciente) {
		rellenaPaciente(paciente);
	});
}

function ultimo(){
	var indice = indices.length - 1;
	$("#indice_paciente").val(indice);
	var id_paciente = indices[indice];
	$.ajax({
		url: 'controllers/buscarporid.php',
		type: 'GET',
		dataType: 'json',
		data: {id: id_paciente},
	})
	.done(function(paciente) {
		rellenaPaciente(paciente);
	});
}

function primero(){
	var indice = 0;
	$("#indice_paciente").val(indice);
	var id_paciente = indices[indice];
	$.ajax({
		url: 'controllers/buscarporid.php',
		type: 'GET',
		dataType: 'json',
		data: {id: id_paciente},
	})
	.done(function(paciente) {
		rellenaPaciente(paciente);
	});
}

function mostrarModal(id){
	$(id).fadeIn();
}

function cerrarModal(el){
	$(el).parents(".ventana-modal").fadeOut();
}

function iniciaLista(){
	$("#num-pacientes").html(indices.length);

	$.ajax({
		url: 'controllers/getclientes.php',
		type: 'GET',
		dataType: 'json',
		data: {},
	})
	.done(function(pacientes) {
		var opciones = "";
		$.each(pacientes, function(index, val) {
			opciones = opciones + "<option value='"+val.nombre_completo+"' data-id='"+val.NUME+"' data-indice='"+index+"' ondblclick=seleccionaLista(this)>"+val.nombre_completo+"</option>";
		});
		$("#selector-lista-pacientes").html(opciones);
	});
}

function seleccionaLista(option){
	var id = $(option).data("id");
	var indice = $(option).data("indice");
	$.ajax({
		url: 'controllers/buscarporid.php',
		type: 'GET',
		dataType: 'json',
		data: {id: id},
	})
	.done(function(paciente) {
		rellenaPaciente(paciente);
		$(".cerrar-modal").trigger('click');
	});
}

function buscadorLista(){
	var texto = $("#buscador-lista").val();

	if(texto.length > 0){
		var options = $("#selector-lista-pacientes option[value^="+texto+"]");
		if(options.length > 0){
			var option = options[0];
		}
		else{
			var options = $("#selector-lista-pacientes option");
			var option = options[0];		
		}
	}
	else{
		var options = $("#selector-lista-pacientes option");
		var option = options[0];	
	}

	$("#selector-lista-pacientes option").removeAttr('selected');
	$(option).attr("selected", "selected");
}

function guardarPaciente(){
	$.ajax({
		url: 'controllers/savePaciente.php',
		type: 'GET',
		dataType: 'json',
		data: {
			id: $("#id_paciente").val(),
			apellidos: $("#apellidos").val(),
			nombre: $("#nombre").val(),
			numero_historia: $("#numero-historia").val(),
			fecha: $("#fecha").val(),
			tipo_enferma: $("#tipo-enferma").val(),
			edad: $("#edad").val(),
			estado_civil: $("#estado-civil").val(),
			ocupacion: $("#ocupacion").val(),
			direccion: $("#direccion").val(),
			ciudad: $("#ciudad").val(),
			telefono: $("#telefono").val(),
			nif: $("#nif").val(),
			rh: $("#grupo-rh").val(),
			antecedentes_familiares: $("#antecedentes-familiares").val(),
			antecedentes_personales: $("#antecedentes-personales").val(),
			historia_clinica: $("#historia-clinica").val(),
			menarquia: $("#menarquia").val(),
			tm: $("#tm").val(),
			fur: $("#fur").val(),
			edad_sexual: $("#edad-sexual").val(),
			cantidad: $("#cantidad").val(),
			dolor: $("#dolor").val(),
			dispareunia: $("#dispareunia").val(),
			coitorragias: $("#coitorragias").val(),
			anticonceptivos: $("#anticonceptivos").val(),
			ano1: $("#ano1").val(),
			ano2: $("#ano2").val(),
			ano3: $("#ano3").val(),
			ano4: $("#ano4").val(),
			ano5: $("#ano5").val(),
			ano6: $("#ano6").val(),
			embarazo1: $("#embarazo1").val(),
			embarazo2: $("#embarazo2").val(),
			embarazo3: $("#embarazo3").val(),
			embarazo4: $("#embarazo4").val(),
			embarazo5: $("#embarazo5").val(),
			embarazo6: $("#embarazo6").val(),
			parto1: $("#parto1").val(),
			parto2: $("#parto2").val(),
			parto3: $("#parto3").val(),
			parto4: $("#parto4").val(),
			parto5: $("#parto5").val(),
			parto6: $("#parto6").val(),
			peso1: $("#peso1").val(),
			peso2: $("#peso2").val(),
			peso3: $("#peso3").val(),
			peso4: $("#peso4").val(),
			peso5: $("#peso5").val(),
			peso6: $("#peso6").val(),
			sexo1: $("#sexo1").val(),
			sexo2: $("#sexo2").val(),
			sexo3: $("#sexo3").val(),
			sexo4: $("#sexo4").val(),
			sexo5: $("#sexo5").val(),
			sexo6: $("#sexo6").val(),
		},
	})
	.always(function(data) {
		if(data.success === false){
			console.log(data.success);
		}
	});
}

function eliminar(){
	var id = $("#id_paciente").val();
	if(confirm("Va a eliminar a la paciente " + $("#apellidos").val())){
		$.ajax({
			url: 'controllers/eliminarpaciente.php',
			type: 'GET',
			dataType: 'json',
			data: {id: id},
		})
		.done(function(data) {
			if(data){
				indices = getIndices();
				primero();
			}
			else{
				console.log(data);
			}
		});
	}
}

function nuevo(){
	$.ajax({
		url: 'controllers/crearnuevo.php',
		type: 'GET',
		dataType: 'json',
		data: {},
	})
	.done(function(data) {
		console.log(data);
		if(data.success){
			indices = getIndices();
			actualizaIndice(data.id);
			primero();
		}
	});
}

function ordenar(){
	indices = getIndices();
	primero();
}

function backup(){
	window.open('controllers/backup.php', '_blank');
}

$(function(){
	$(".pestana").click(function(event) {
		showPanel($(this).data("panel"), $(this));
	});

	$("#buscar").click(function(event) {
		buscar();
	});

	$("#siguiente").click(function(event) {
		siguiente();	
	});

	$("#anterior").click(function(event) {
		anterior();	
	});

	$("#ultimo").click(function(event) {
		ultimo();	
	});

	$("#primero").click(function(event) {
		primero();	
	});

	$("#lista").click(function(event) {
		mostrarModal("#ventana-lista");
	});

	$(".cerrar-modal").click(function(event) {
		cerrarModal(this);
	});

	$("#buscador-lista").keyup(function(event) {
		buscadorLista();
	});

	$(".formulario-principal input, #antecedentes textarea, #historia-clinica, #antecedentes-ginecologicos input").keyup(function(event) {
		guardarPaciente();
	});

	$("#antecedentes-ginecologicos select").change(function(event) {
		guardarPaciente();
	});

	$("#eliminar").click(function(event) {
		eliminar();
	});

	$("#nuevo").click(function(event) {
		nuevo();
	});

	$("#ordenar").click(function(event) {
		ordenar();
	});

	$("#utilidades").click(function(event) {
		mostrarModal("#ventana-utilidades");
	});

	$("#backup").click(function(event) {
		backup();
	});

	$("#restaurar").click(function(event) {
		window.location = "restore.php";
	});

	indices = getIndices();
	primero();
	iniciaLista();
});