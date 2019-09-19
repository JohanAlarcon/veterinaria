/********************CAMPOS DEL REGISTRO DE OJO******************************************/
// Reflejo

var schirmerd;
var presionind;
var schirmeri;
var presionini; 
var reflejoAd;
var reflejoAi;
var reflejoPdd;
var reflejoPdi;
var reflejoPid;
var reflejoPii;
var cultivod;
var cultivoi;

//Globo

var globod;
var globoi;

//swal("Datos Globo: \n"+globod+"\n"+globoi);

//Parpado

var parpadod;
var parpadoi;

//swal("Datos Parpado: \n"+parpadod+"\n"+parpadoi);

//Conjuntiva

var conjutipd;
var conjutipi;
var conjuparpad;
var conjuparpai;

//swal("Datos Conjuntiva: \n"+conjutipd+"\n"+conjutipi+"\n"+conjuparpad+"\n"+conjuparpai);

//Cornea

var testfd;
var testfi;
var testbd;
var testbi;
var gonioscipiad;
var gonioscipiai;
var selectcord;
var selectcori;

//swal("Datos Cornea: \n"+testfd+"\n"+testfi+"\n"+testbd+"\n"+testbi+"\n"+gonioscipiad
//+"\n"+gonioscipiai);

//Iris

var sinequiad;
var sinequiai;
var selectirisd;
var selectirisi;

//swal("Datos Iris: \n"+sinequiad+"\n"+sinequiai);

//Lente

var lented;
var lentei;

//swal("Datos Lente: \n"+lented+"\n"+lentei);

//Fondo

var fondod;
var fondoi;


function validarPropietario() {
	/*****************************AJAX PARA VISUALIZAR PROPIETARIOS YA EXISTENTES*****************************************************/
//Nota. los include obstruyen la corrida del JS
var datos = $('#frmajax').serialize();
var numHistoriaClinica=document.getElementById("historia").value;
var documento = $('#duenumerodoc').val();
var bandera=1;

if (documento != "" ) {				
	$.ajax({
		type: "POST",
		url: "http://localhost/veterinaria/validar.php",
		data:datos + '&bandera=' + bandera,
	}).done( function(info){					
						$("#registrarPropietario").html(info); // DIV DONDE SE VISUALIZA EL MSJ								
					});	
}else{
	swal("Digite cedula");
}  

}

function saveMascota() {
	/*****************************AJAX PARA GUARDAR MASCOTA*****************************************************/	
	var datos = $('#frmajax2').serialize();
	var nombre = $('#masconombre').val();
	var nacio = $('#masnacio').val();
	var sexo =$('#massexo').val();
	var especie=$('#masespecie').val();
	var raza=$('#masraza').val();
	var motivoConsulta=$('#motivoConsulta').val();
	var bandera=3;

	if (nombre != "" && nacio != "" && sexo !="" &&  especie != "" && raza != "" && motivoConsulta != "") {
		$.ajax({
			type: "POST",
			url: "http://localhost/veterinaria/guardar.php",
			data:datos + '&bandera=' + bandera,

		})
		swal("* Mascota Registrada *");
		 document.getElementById("duenumerodocMedico").value = document.getElementById("duenumerodocMascota").value;   //--> asigna numero de cedula al tab de medico    
		 document.getElementById("idMascota").value = document.getElementById("cedulaMascota").value;    
		 ocultarMascota();	
		$('.nav-tabs a[href="#medico"]').tab('show'); //--> IMPORTANTE pasa al siguiente TAB canino segun el id        
        $('.nav-tabs a[href="#recent10"]').addClass('hidden');   //--> deshabilitar el tab actual (para quitar se utiliza : removeClass)      
    } else {

    	swal("Faltan campos por diligenciar");
    }
}

function terminarHistoriaClinica() {
	/*****************************AJAX PARA VISUALIZAR MEDICO*****************************************************/	
	var datos = $('#frmajax3').serialize();
	var cedulaMedico = $('#CedulaMedico').val();
	var idMascota = $('#idMascota').val();
	var cedulaPropietario = $('#duenumerodocMedico').val();
	var bandera=4;
	var mensajeError="<span style='font-size: 10pt; font-weight: bold; color: red; text-align: center;'>* MEDICO NO REGISTRADO*</span>";
	
	if (cedulaMedico != ""){
		$.ajax({
			type: "POST",
			url: "http://localhost/veterinaria/consultar.php",
			data:datos + '&bandera=' + bandera,
		}).done( function(respuesta){							
			if(respuesta==0){
						$("#resultado").html(mensajeError); // DIV DONDE SE VISUALIZA EL MSJ error	
					}else{
						$.ajax({
							type: "POST",
							url: "http://localhost/veterinaria/guardar.php",
							data:datos + '&bandera=' + bandera,
							success: function(data) {
								/*$("#resultado").html(data);*/
								swal("* Historia Clinica Registrada *");
								document.getElementById("idMascota").value = "";
								document.getElementById("duenumerodocMedico").value = "";
								document.getElementById("CedulaMedico").value = "";
								document.getElementById("duenumerodoc").value="";//tambien me limpia la cedula del propietario en caso de que se halla añadido una nueva mascota
								location.reload(); 
							}
						})
					}
				});

	}else{
		swal("* Faltan Campos por diligenciar *");
	} 
}


    // Solo permite ingresar numeros.

    function soloNumeros(e){

    	var key = window.Event ? e.which : e.keyCode

    	return ((key >= 48 && key <= 57) || (key==8)) 

    }

//---------------------------------------------- AJAX PARA GUARDAR PROPIETARIO -----------------------------

function savePropietario(){
	var datos = $('#frmajax').serialize();
	var numHistoriaClinica=document.getElementById("historia").value;
	var documento = $('#duenumerodoc').val();
	var nombre = $('#dueñonombre').val();
	var telefono = $('#dueñotel').val();          
	var direccion = $('#dueñodirecc').val();
	var tipoDocumento = $('#tipodocumento').val();
	var departamento = $('#departamento').val();
	var municipio = $('#municipio').val();
	var bandera=14;

	if ($('#dueñodirecc').val().length > 0 & $('#dueñonombre').val().length > 0 & $('#dueñotel').val().length > 0 
		& municipio!="" & departamento!= "" & tipoDocumento!= "") {   
                // entra si todos los campos estan llenos
            $.ajax({
            	type: "POST",
            	url: "http://localhost/veterinaria/guardar.php",
            	data:datos + '&bandera=' + bandera,               

            }).done( function(info){            
            	swal("* Propietario Registrado *");
                	document.getElementById("duenumerodocMascota").value = document.getElementById("duenumerodoc").value;   //--> asigna numero de cedula al tab de mascota    
                	ocultarPropietario();
                	$('.nav-tabs a[href="#recent10"]').tab('show'); //--> IMPORTANTE pasa al siguiente TAB canino segun el id        
                	$('.nav-tabs a[href="#popular10"]').addClass('hidden');   //--> deshabilitar el tab actual (para quitar se utiliza : removeClass) 

                });  
        }else{

        	swal("*Faltan camposs por digitar*"); 
        } 

    }

    function addMascota(){
    	if(document.getElementById("duenumerodoc").value==""){
    		swal("* Digite la cedula del propietario *")
    	}else{
        				document.getElementById("duenumerodocMascota").value = document.getElementById("duenumerodoc").value;   //--> asigna numero de cedula al tab de mascota    
              	$('.nav-tabs a[href="#recent10"]').tab('show'); //--> IMPORTANTE pasa al siguiente TAB canino segun el id        
               	$('.nav-tabs a[href="#popular10"]').addClass('hidden');   //--> deshabilitar el tab actual (para quitar se utiliza : removeClass)*/
               }
           }

      //---------------------------------------------- OCULTAR INPUT'S de regitro de propietario-----------------------------


      function ocultarPropietario() {
      	document.getElementById("duenumerodoc").value = "";
      	document.getElementById("dueñonombre").value = "";
      	document.getElementById("dueñotel").value = "";
      	document.getElementById("dueñodirecc").value = ""; 
      	$('#tipodocumento').val('');
      	$('#municipio').val('');
      	$('#departamento').val('');
      	var div = document.getElementById('registrarPropietario');
      	div.style.display = 'none';
      } 

      function ocultarMascota() {
      	document.getElementById("duenumerodocMascota").value = "";
      	document.getElementById("masconombre").value = "";
      	document.getElementById("masnacio").value = "unlimited";
      	document.getElementById("motivoConsulta").value = "";
      	$('#massexo').val('');
      	$('#masespecie').val('');
      	$('#masraza').val('');
      } 

      function mostrarEstadisticas() {	
      	var radioValue = $("input[name='buscador']:checked").val();
      	if(radioValue == "reflejo"){
      		location.href ="http://localhost/veterinaria/EstadisticasReflejo.php";
      	}else
      	if(radioValue == "globo"){
      		location.href ="http://localhost/veterinaria/estadisticasGlobo.php";
      	}else
      	if(radioValue == "parpados"){
      		location.href ="http://localhost/veterinaria/estadisticasParpados.php";
      	}else
      	if(radioValue == "conjuntiva"){
      		location.href ="http://localhost/veterinaria/estadisticasConjuntiva.php";
      	}else
      	if(radioValue == "cornea"){
				//Falta
				swal("*Cornea : falta*");
			}else
			if(radioValue == "iris"){
				//Falta
				swal("*Iris : falta*");
			}else
			if(radioValue == "lente"){
				location.href ="http://localhost/veterinaria/estadisticasLente.php";
			}else
			if(radioValue == "fondo"){
				location.href ="http://localhost/veterinaria/estadisticasFondo.php";
			}

		} 


		
		function validarPropietario() {
			/*****************************AJAX PARA VISUALIZAR PROPIETARIOS YA EXISTENTES*****************************************************/
//Nota. los include obstruyen la corrida del JS
var datos = $('#frmajax').serialize();
var numHistoriaClinica=document.getElementById("historia").value;
var documento = $('#duenumerodoc').val();
var bandera=1;

if (documento != "" ) {				
	$.ajax({
		type: "POST",
		url: "http://localhost/veterinaria/validar.php",
		data:datos + '&bandera=' + bandera,
	}).done( function(info){					
						$("#registrarPropietario").html(info); // DIV DONDE SE VISUALIZA EL MSJ								
					});	
}else{
	swal("Digite cedula");
}  

}

function saveMascota() {
	/*****************************AJAX PARA GUARDAR MASCOTA*****************************************************/	
	var datos = $('#frmajax2').serialize();
	var nombre = $('#masconombre').val();
	var nacio = $('#masnacio').val();
	var sexo =$('#massexo').val();
	var especie=$('#masespecie').val();
	var raza=$('#masraza').val();
	var bandera=3;

	if (nombre != "" && nacio != "" && sexo !="" &&  especie != "" && raza != "") {
		$.ajax({
			type: "POST",
			url: "http://localhost/veterinaria/guardar.php",
			data:datos + '&bandera=' + bandera,

		})
		swal("* Mascota Registrada *");
		 document.getElementById("duenumerodocMedico").value = document.getElementById("duenumerodocMascota").value;   //--> asigna numero de cedula al tab de medico    
		 document.getElementById("idMascota").value = document.getElementById("cedulaMascota").value;    
		 ocultarMascota();	
		$('.nav-tabs a[href="#medico"]').tab('show'); //--> IMPORTANTE pasa al siguiente TAB canino segun el id        
        $('.nav-tabs a[href="#recent10"]').addClass('hidden');   //--> deshabilitar el tab actual (para quitar se utiliza : removeClass)      
    } else {

    	swal("Faltan campos por diligenciar");
    }
}

function asociarMedico() {
	/*****************************AJAX PARA VISUALIZAR MEDICO*****************************************************/	
	var datos = $('#frmajax3').serialize();
	var cedulaMedico = $('#CedulaMedico').val();
	var idMascota = $('#idMascota').val();
	var cedulaPropietario = $('#duenumerodocMedico').val();
	var bandera=4;
	var mensajeError="<span style='font-size: 10pt; font-weight: bold; color: red; text-align: center;'>* MEDICO NO REGISTRADO*</span>";
	
	if (cedulaPropietario != "" & idMascota != "" & cedulaMedico != "") {	
		$.ajax({
			type: "POST",
			url: "http://localhost/veterinaria/consultar.php",
			data:datos + '&bandera=' + bandera,
		}).done( function(respuesta){							
			if(respuesta==0){
						$("#resultado").html(mensajeError); // DIV DONDE SE VISUALIZA EL MSJ error	
					}else{
						$.ajax({
							type: "POST",
							url: "http://localhost/veterinaria/guardar.php",
							data:datos + '&bandera=' + bandera,

						})
						swal("* Historia Clinica Registrada *");
						document.getElementById("idMascota").value = "";
						document.getElementById("duenumerodocMedico").value = "";
						document.getElementById("CedulaMedico").value = "";
						location.reload();
					}
				});

	}else{
		swal("* Faltan Campos por diligenciar *");
	} 
}


    // Solo permite ingresar numeros.

    function soloNumeros(e){

    	var key = window.Event ? e.which : e.keyCode

    	return ((key >= 48 && key <= 57) || (key==8)) 

    }

//---------------------------------------------- AJAX PARA GUARDAR PROPIETARIO -----------------------------

function savePropietario(){
	var datos = $('#frmajax').serialize();
	var numHistoriaClinica=document.getElementById("historia").value;
	var documento = $('#duenumerodoc').val();
	var nombre = $('#dueñonombre').val();
	var telefono = $('#dueñotel').val();          
	var direccion = $('#dueñodirecc').val();
	var tipoDocumento = $('#tipodocumento').val();//variable de la cedula 
	var departamento = $('#departamento').val();
	var municipio = $('#municipio').val();
	var bandera=14;

	if ($('#dueñodirecc').val().length > 0 & $('#dueñonombre').val().length > 0 & $('#dueñotel').val().length > 0 & municipio!="" & departamento!= "" & tipoDocumento!= "") {   
                // entra si todos los campos estan llenos
                $.ajax({
                	type: "POST",
                	url: "http://localhost/veterinaria/guardar.php",
                	data:datos + '&bandera=' + bandera,               

                }).done( function(info){            
                	swal("* Propietario Registrado *");
                	document.getElementById("duenumerodocMascota").value = document.getElementById("duenumerodoc").value;   //--> asigna numero de cedula al tab de mascota    
                	ocultarPropietario();
                	$('.nav-tabs a[href="#recent10"]').tab('show'); //--> IMPORTANTE pasa al siguiente TAB canino segun el id        
                	$('.nav-tabs a[href="#popular10"]').addClass('hidden');   //--> deshabilitar el tab actual (para quitar se utiliza : removeClass) 

                });  
            }else{

            	swal("*Faltan camposs por digitar*"); 
            } 

        }



	//---------------------------------------------- AJAX PARA GUARDAR REFLEJO -----------------------------

	function nextReflejo(){
		schirmerd = $('#schirmerd').val();
		presionind = $('#presionInd').val();
		schirmeri = $('#schirmeri').val();
		presionini = $('#presionIni').val(); 
		reflejoAd = $('#reflejoAd').val();
		reflejoAi = $('#reflejoAi').val();
		reflejoPdd = $('#reflejoPdd').val();
		reflejoPdi = $('#reflejoPdi').val();
		reflejoPid = $('#reflejoPid').val();
		reflejoPii = $('#reflejoPii').val();
		cultivod = $('#cultivod').val();
		cultivoi = $('#cultivoi').val();
		var bandera=5;
		if (schirmerd != "" && presionind != "" && schirmeri != ""&& presionini != ""&& reflejoAd != "" && reflejoAi  != "" 
			&& reflejoPdd != ""&& reflejoPdi != ""&& reflejoPid != "" && reflejoPii != ""&& cultivod != ""&& cultivoi != "") {   
					// entra si todos los campos estan llenos
				$('a[href="#globo"]').tab('show'); 
				li2();
			}else{

				swal("*Faltan campos por digitar*"); 
			} 	
		}


	//---------------------------------------------- AJAX PARA GUARDAR GLOBO -----------------------------
	function nextGlobo(){
		var bandera=6;
		globod = $('#globod').val();
		globoi = $('#globoi').val();
		

		if (globod != "" && globoi != "") {   
					// entra si todos los campos estan llenos
					$('a[href="#parpados"]').tab('show'); 
					li3();
				}else{

					swal("*Faltan campos por digitar*"); 
				} 

			}

			function anteriorGlobo(){
				$('a[href="#reflejo"]').tab('show'); 
				li1();
			}


	//---------------------------------------------- AJAX PARA GUARDAR PARPADOS -----------------------------

	function nextParpado(){
		var bandera=7;
		parpadod = $('#parpadod').val();
		parpadoi = $('#parpadoi').val();
		

		if (parpadod != "" && parpadoi != "") {   
					// entra si todos los campos estan llenos
					$('a[href="#conjuntiva"]').tab('show'); 
					li4();
				}else{

					swal("*Faltan campos por digitar*"); 
				}

				
			}

			function anteriorParpado(){
				$('a[href="#globo"]').tab('show'); 
				li2();
			}


	//---------------------------------------------- AJAX PARA GUARDAR CONJUNTIVA -----------------------------

	function nextConjuntiva(){

		var bandera=8;
		conjutipd = $('#conjutipd').val();
		conjutipi = $('#conjutipi').val();
		conjuparpad = $('#conjuparpad').val();
		conjuparpai = $('#conjuparpai').val();
		

		if (conjutipd != "" && conjutipi != "" && conjuparpad != "" && conjuparpai != "") {   
			$('a[href="#cornea"]').tab('show'); 
			li5();
		}else{

			swal("*Faltan campos por digitar*"); 
		}
	}

	function anteriorConjuntiva(){
		$('a[href="#parpados"]').tab('show'); 
		li3();
	}

	//---------------------------------------------- AJAX PARA GUARDAR CORNEA -----------------------------

	function nextCornea(){
		testfd = $('#testfd').val();
		testfi = $('#testfi').val();
		testbd = $('#testbd').val();
		testbi = $('#testbi').val();
		gonioscipiad = $('#gonioscopiad').val();
		gonioscipiai = $('#gonioscopiai').val();
		bandera=9;

      //------ validar : mostrarselectcord() -------------
      var arr = $('[name="checksCord[]"]:checked').map(function(){
      	return this.value;
      }).get();
      selectcord = arr.join(',');


		 //------ validar : mostrarselectcori() -------------
		 var arr1 = $('[name="checksCori[]"]:checked').map(function(){
		 	return this.value;
		 }).get();
		 selectcori = arr1.join(',');

			//swal("derecho : "+selectcord+"\nIzquierdo : "+selectcori);

			if (selectcori!="" && selectcord!="" && testfd!= "" && testfi!= "" && gonioscipiai!= "" && testbd!= "" && testbi!= "" && 
				gonioscipiad!= "" && gonioscipiai!= ""  ) {   
					// entra si todos los campos estan llenos	
				$('a[href="#iris"]').tab('show'); 
				li6();
			}else{
				swal("*Faltan campos por digitar*"); 
			} 
		}


		function anteriorCornea(){
			$('a[href="#conjuntiva"]').tab('show'); 
			li4();
		}


	//---------------------------------------------- AJAX PARA GUARDAR IRIS -----------------------------
	function nextIris(){
		sinequiad = $('#sinequiad').val();
		sinequiai = $('#sinequiai').val();
		var bandera=10;

		 //------ validar : mostrarselectirisd() -------------
		 var arr = $('[name="checksIrisd[]"]:checked').map(function(){
		 	return this.value;
		 }).get();
		 selectirisd = arr.join(',');

		  //------ validar : mostrarselectirisi() -------------
		  var arr1 = $('[name="checksIrisi[]"]:checked').map(function(){
		  	return this.value;
		  }).get();
		  selectirisi = arr1.join(',');

		  //swal("derecho : "+selectirisd+"\nIzquierdo : "+selectirisi);

		  if (sinequiad!= "" && sinequiai!= "" && selectirisd!= "" && selectirisi!= "") {   
					// entra si todos los campos estan llenos
					$('a[href="#lente"]').tab('show'); 
					li7();
				}else{

					swal("*Faltan campos por digitar*"); 
				} 
				
			}

			function anteriorIris(){
				$('a[href="#cornea"]').tab('show'); 
				li5();
			}


	//---------------------------------------------- AJAX PARA GUARDAR LENTE -----------------------------

	function nextLente(){

		var bandera=11;
		lented = $('#lented').val();
		lentei = $('#lentei').val();
		
		

		if (lented != "" && lentei != "" ) {   
					// entra si todos los campos estan llenos
					$('a[href="#fondo"]').tab('show'); 
					li8();
				}else{

					swal("*Faltan campos por digitar*"); 
				} 
				
			}

			function anteriorLente(){
				$('a[href="#iris"]').tab('show'); 
				li6();
			}

	//---------------------------------------------- AJAX PARA GUARDAR FONDO -----------------------------

	function anteriorFondo(){
		$('a[href="#lente"]').tab('show'); 
		li7();
	}

//---------------- Validar Datos ---------------------------------------

// entra si todos los campos del formulario estan llenos 

	/*swal("Numero de historia clinica : "+ numHistoriaClinica+
	"\nDATOS REFLEJO: \n"+schirmerd+"\n"+presionind+"\n"+schirmeri+"\n"+presionini+"\n"+reflejoAd
	+"\n"+reflejoAi+"\n"+reflejoPdd+"\n"+reflejoPdi+"\n"+reflejoPid+"\n"+reflejoPii+"\n"+cultivod+"\n"+cultivoi+
	"\nDATOS GLOBO: \n"+globod+"\n"+globoi+
	"\nDATOS PARPADO: \n"+parpadod+"\n"+parpadoi+
	"\nDATOS COJUNTIVA: \n"+conjutipd+"\n"+conjutipi+"\n"+conjuparpad+"\n"+conjuparpai+
	"\nDATOS CORNEA: \n"+testfd+"\n"+testfi+"\n"+testbd+"\n"+testbi+"\n"+gonioscipiad
	+"\n"+gonioscipiai+
	"\nDATOS IRIS: \n"+sinequiad+"\n"+sinequiai+
	"\nDATOS LENTE: \n"+lented+"\n"+lentei+
	"\nDATOS FONDO: \n"+fondod+"\n"+fondoi);
	//swal("CORNEA : "+selectcord+"\n"+selectcori+"\nIRIS"+selectirisd+"\n"+selectirisi);*/
	function validarCampos(){

		if (schirmerd != "" && presionind != "" && schirmeri != ""&& presionini != ""&& reflejoAd != "" && reflejoAi  != "" 
			&& reflejoPdd != ""&& reflejoPdi != ""&& reflejoPid != "" && reflejoPii != ""&& cultivod != ""&& cultivoi != ""
			&& globod != "" && globoi != ""
			&& parpadod != "" && parpadoi != ""
			&& conjutipd != "" && conjutipi != "" && conjuparpad != "" && conjuparpai != ""
			&& selectcori!="" && selectcord!="" && testfd!= "" && testfi!= "" && gonioscipiai!= "" && testbd!= "" && testbi!= "" && 
			gonioscipiad!= "" && gonioscipiai!= "" 
			&& sinequiad!= "" && sinequiai!= "" && selectirisd!= "" && selectirisi!= ""
			&& lented != "" && lentei != "" 
			&& fondod != "" && fondoi != "" ){

			return true;
	}else{
		return false;
	}
}


// JS CANVAS INCIO

var color = "#000000";
var tamano = 3;
var pintura = false;

function pintar(event) {
	var canvas = document.getElementById("canvas");
	var ctx = canvas.getContext("2d");

	if (pintura) {
		ctx.fillStyle = color;
		ctx.fillRect(event.clientX - 10 , event.clientY + -30, tamano, tamano);
	}

}

function activar() {
	pintura = true;
}

function desactivar() {
	pintura = false;
}

function borrador(){
	document.getElementById("canvas").style.cursor = "url('Imagenes/borradorcursor.png'), default";
	color = "#FFFFFF";
	document.getElementById("colores").setAttribute("disabled", "");
}

function lapiz(){
	document.getElementById("canvas").style.cursor = "url('Imagenes/puntero.png'), default";
	color = document.getElementById("colores").value;
	document.getElementById("colores").removeAttribute("disabled");
}

function scolor() {
	color = document.getElementById("colores").value;
}

function stamano(numero) {
	tamano = numero;
}

function cargarFondo() {
	var img = document.getElementById("imagen_prueba");
	var ctx = canvas.getContext("2d");
   ctx.drawImage(img, 0, -10, 225, 160);//--> ctx.drawImage(img, [correr en eje x], [correr en eje Y], [Ancho], [Alto]);
}

function guardarLenteD() {

	var canvas = document.getElementById("canvas");
	var imagen = canvas.toDataURL("image/png");
	var bandera=1;


	$.ajax({
		type: "POST",
		url: "http://localhost/veterinaria/guardarCanvas.php?bandera="+bandera,
		data:{
			base64: imagen
		},              
	}).done( function(info){            
		alert(info);
		document.getElementById('guardarimagen').disabled = true;

	});

}

function guardarLenteI() {

	var canvas = document.getElementById("canvas");
	var imagen = canvas.toDataURL("image/png");
	var bandera=2;


	$.ajax({
		type: "POST",
		url: "http://localhost/veterinaria/guardarCanvas.php?bandera="+bandera,
		data:{
			base64: imagen
		},              
	}).done( function(info){            
		alert(info);
		document.getElementById('guardarimagen').disabled = true;

	});

}

function guardarParpadoD() {

	var canvas = document.getElementById("canvas");
	var imagen = canvas.toDataURL("image/png");
	var bandera=3;


	$.ajax({
		type: "POST",
		url: "http://localhost/veterinaria/guardarCanvas.php?bandera="+bandera,
		data:{
			base64: imagen
		},              
	}).done( function(info){            
		alert(info);
		document.getElementById('guardarimagen').disabled = true;

	});

}

function guardarParpadoI() {

	var canvas = document.getElementById("canvas");
	var imagen = canvas.toDataURL("image/png");
	var bandera=4;


	$.ajax({
		type: "POST",
		url: "http://localhost/veterinaria/guardarCanvas.php?bandera="+bandera,
		data:{
			base64: imagen
		},              
	}).done( function(info){            
		alert(info);
		document.getElementById('guardarimagen').disabled = true;

	});

}

function guardarCorneaD() {

	var canvas = document.getElementById("canvas");
	var imagen = canvas.toDataURL("image/png");
	var bandera=5;


	$.ajax({
		type: "POST",
		url: "http://localhost/veterinaria/guardarCanvas.php?bandera="+bandera,
		data:{
			base64: imagen
		},              
	}).done( function(info){            
		alert(info);
		document.getElementById('guardarimagen').disabled = true;

	});

}

function guardarCorneaI() {

	var canvas = document.getElementById("canvas");
	var imagen = canvas.toDataURL("image/png");
	var bandera=6;


	$.ajax({
		type: "POST",
		url: "http://localhost/veterinaria/guardarCanvas.php?bandera="+bandera,
		data:{
			base64: imagen
		},              
	}).done( function(info){            
		alert(info);
		document.getElementById('guardarimagen').disabled = true;

	});

}

function guardarIrisD() {

	var canvas = document.getElementById("canvas");
	var imagen = canvas.toDataURL("image/png");
	var bandera=7;


	$.ajax({
		type: "POST",
		url: "http://localhost/veterinaria/guardarCanvas.php?bandera="+bandera,
		data:{
			base64: imagen
		},              
	}).done( function(info){            
		alert(info);
		document.getElementById('guardarimagen').disabled = true;

	});

}

function guardarIrisI() {

	var canvas = document.getElementById("canvas");
	var imagen = canvas.toDataURL("image/png");
	var bandera=8;


	$.ajax({
		type: "POST",
		url: "http://localhost/veterinaria/guardarCanvas.php?bandera="+bandera,
		data:{
			base64: imagen
		},              
	}).done( function(info){            
		alert(info);
		document.getElementById('guardarimagen').disabled = true;

	});

}

function guardarFondoD() {

	var canvas = document.getElementById("canvas");
	var imagen = canvas.toDataURL("image/png");
	var bandera=9;


	$.ajax({
		type: "POST",
		url: "http://localhost/veterinaria/guardarCanvas.php?bandera="+bandera,
		data:{
			base64: imagen
		},              
	}).done( function(info){            
		alert(info);
		document.getElementById('guardarimagen').disabled = true;

	});

}

function guardarFondoI() {

	var canvas = document.getElementById("canvas");
	var imagen = canvas.toDataURL("image/png");
	var bandera=10;


	$.ajax({
		type: "POST",
		url: "http://localhost/veterinaria/guardarCanvas.php?bandera="+bandera,
		data:{
			base64: imagen
		},              
	}).done( function(info){            
		alert(info);
		document.getElementById('guardarimagen').disabled = true;

	});

}



// JS CANVAS FIN

	//---------------------------------------------- AJAX PARA GUARDAR OJO -----------------------------

	function saveOjo(){

		var numHistoriaClinica=document.getElementById("historia").value;
		fondod = $('#fondod').val();
		fondoi = $('#fondoi').val();
		var bandera=5;


		var datos={bandera:+bandera,numHistoriaClinica:+numHistoriaClinica,schirmerd: + schirmerd, presionind: + presionind, schirmeri: + schirmeri,
			presionini:+ presionini, reflejoAd:+ reflejoAd,reflejoAi:+ reflejoAi,reflejoPdd:+ reflejoPdd, reflejoPdi: + reflejoPdi,
			reflejoPid:+ reflejoPid ,reflejoPii: + reflejoPii, cultivod: + cultivod,cultivoi: + cultivoi,globod:+ globod, 
			globoi:+ globoi,parpadod: + parpadod,parpadoi:+ parpadoi, conjutipd: + conjutipd,conjutipi:+ conjutipi ,conjuparpad:+ conjuparpad,conjuparpai:+ conjuparpai,
			testfd:+ testfd,testfi:+ testfi,testbd:+ testbd,testbi:+testbi,gonioscipiad:+ gonioscipiad,gonioscipiai:+ gonioscipiai,
			sinequiad: + sinequiad,sinequiai:+sinequiai,lented:+ lented,lentei:+ lentei,fondod:+ fondod,fondoi:+ fondoi};

			if (validarCampos()) {  

				$.ajax({
					type: "POST",
					url: "http://localhost/veterinaria/guardar.php",
					data:datos,                
				}).done( function(info){	
					saveUnionIris();
					saveUnionCornea();			
					swal(info); //-- > miro que esta llegando a la funcion guardar		
					
					window.location.replace("http://localhost/veterinaria/regis-info-personal.php");
				});	

			}else{
				swal("*Faltan campos por digitar en el formulario*"); 
			} 
		}

		function saveUnionIris(){
			var numHistoriaClinica=document.getElementById("historia").value;
			var bandera=6;
			//------ validar : mostrarselectirisd() -------------
			var arr = $('[name="checksIrisd[]"]:checked').map(function(){
				return this.value;
			}).get();
			selectirisd = arr;

			//------ validar : mostrarselectirisi() -------------
			var arr1 = $('[name="checksIrisi[]"]:checked').map(function(){
				return this.value;
			}).get();
			selectirisi = arr1;

			var ArrayDerecho=arr.length;
			var ArrayIzquierdo=arr1.length;

			var datos={numHistoriaClinica:+numHistoriaClinica,bandera:+bandera,'selectirisd': JSON.stringify(selectirisd),'selectirisi': JSON.stringify(selectirisi),
			ArrayDerecho:+ArrayDerecho,ArrayIzquierdo:+ArrayIzquierdo};

			$.ajax({
				type: "POST",
				url: "http://localhost/veterinaria/guardar.php",
				data:datos,                
			}).done( function(info){				

							swal(info); //-- > miro que esta llegando a la funcion guardar							
						});	
		}


		function saveUnionCornea(){
			var numHistoriaClinica=document.getElementById("historia").value;
			var bandera=7;

			/*----- validar : mostrarselectcord() -------------*/
			var arr = $('[name="checksCord[]"]:checked').map(function(){
				return this.value;
			}).get();
			selectcord = arr;


			/*------ validar : mostrarselectcori() -------------*/
			var arr1 = $('[name="checksCori[]"]:checked').map(function(){
				return this.value;
			}).get();
			selectcori = arr1;

			var ArrayDerecho=arr.length;
			var ArrayIzquierdo=arr1.length;


			var datos={numHistoriaClinica:+numHistoriaClinica,bandera:+bandera,'selectcord': JSON.stringify(selectcord),'selectcori': JSON.stringify(selectcori),
			ArrayDerecho:+ArrayDerecho,ArrayIzquierdo:+ArrayIzquierdo};
			$.ajax({
				type: "POST",
				url: "http://localhost/veterinaria/guardar.php",
				data:datos,                
			}).done( function(info){				

							swal(info); //-- > miro que esta llegando a la funcion guardar							
						});	

		}
	//---------------------------------------------- AJAX PARA GUARDAR USUARIO -----------------------------

	function saveUsuario(){
		var datos=$('#frmajax').serialize();
		var nombre=$('#name').val();
		
		var correo=$('#email').val();
		var contra=$('#pwd').val();
		var contraconf=$('#pwd_confirm').val();
		var bandera=15;
		var mensajeError="<span style='font-size: 10pt; font-weight: bold; color: red; text-align: center;'>* MEDICO NO REGISTRADO*</span>";
		
		
		if (nombre != "" && correo != "" && contra != ""  && contraconf != "" ) {   
			if(contra == contraconf){

					// entra si todos los campos estan llenos
					$.ajax({
						type: "POST",
						url: "http://localhost/veterinaria/guardar.php",
						data:datos + '&bandera=' + bandera,               

					}).done( function(respuesta){							
						if(respuesta==0){
									$("#resultado").html(mensajeError); // DIV DONDE SE VISUALIZA EL MSJ error	
								}else{
									$.ajax({
										type: "POST",
										url: "http://localhost/veterinaria/guardar.php",
										data:datos + '&bandera=' + bandera,

									})
									alert("* Registrado *");
									document.getElementById("name").value = "";
									document.getElementById("email").value = "";
									document.getElementById("pwd").value = "";
									location.reload();
								}
							});

				}else{

					swal("*Contraseñas no coinciden*"); 
				} 
			}else{
				swal("*Faltan campos por digitar*"); 
			}

		}

			//---------------------------------------------- AJAX VERIFICAR LOGIN -----------------------------

			function comparar(){
				var datos=$('#frmajax').serialize();
				var nombre=$('#username').val();
				var contra=$('#pwd').val();
				var bandera=16;


				if (nombre != "" && contra != "") {   
							// entra si todos los campos estan llenos
							$.ajax({
								type: "POST",
								url: "http://localhost/veterinaria/guardar.php",
								data:datos + '&bandera=' + bandera,               

							}).done( function( info ){
								$("#mensaje").html( info ); // DIV DONDE SE VISUALIZA EL MSJ
							}); 
						}else{

							swal("*Faltan campos por digitar*"); 
						} 

					}



	//---------------------------------------------- AJAX PARA GUARDAR DIAGNOSTICO -----------------------------

	function saveDiagnostico(){
			//Diagnostico
			var daignosticos = document.getElementById("diferenciales").value;
			var datos=$('#frmajaxDiagnostico').serialize();
			var examenes = $('#examenes').val();
			var diagnosticofinal = $('#diagnostico').val();
			var tratamiento = $('#tratamiento').val();
			var observaciones = $('#observaciones').val(); 

			var numHistoriaClinica=document.getElementById("historia").value;
			var bandera=13;

			var datos={numHistoriaClinica:+numHistoriaClinica,bandera:+bandera,daignosticos:+daignosticos};

			if (daignosticos != "" && diagnosticofinal != "" && tratamiento != "" && observaciones != "" ) {   
					// entra si todos los campos estan llenos
					$.ajax({
						type: "POST",
						url: "http://localhost/veterinaria/guardar.php",
						data:'&daignosticos=' + daignosticos + '&bandera=' + bandera + '&numHistoriaClinica=' + numHistoriaClinica
						+ '&examenes=' + examenes + '&diagnosticofinal=' + diagnosticofinal  + '&tratamiento=' + tratamiento
						+ '&observaciones=' + observaciones ,                

					}).done( function(info){  
						swal(info);   
						document.getElementById("tratamiento").value = "";
						document.getElementById("examenes").value = "";
						document.getElementById("diagnostico").value = "";   
						document.getElementById("observaciones").value = "";
						document.getElementById("diferenciales").value = "";      
						//swal("* Datos almacenados *");
					});  
				}else{
					swal("*Faltan campos por digitar*");
				}
			}


      //---------------------------------------------- OCULTAR INPUT'S de regitro de propietario-----------------------------


      function ocultarPropietario() {
      	document.getElementById("duenumerodoc").value = "";
      	document.getElementById("dueñonombre").value = "";
      	document.getElementById("dueñotel").value = "";
      	document.getElementById("dueñodirecc").value = ""; 
      	$('#tipodocumento').val('');
      	$('#municipio').val('');
      	$('#departamento').val('');
      	var div = document.getElementById('registrarPropietario');
      	div.style.display = 'none';
      } 

      function ocultarMascota() {
      	document.getElementById("duenumerodocMascota").value = "";
      	document.getElementById("masconombre").value = "";
      	document.getElementById("masnacio").value = "unlimited";
      	$('#massexo').val('');
      	$('#masespecie').val('');
      	$('#masraza').val('');
      } 

      function mostrarEstadisticas() {	
      	var radioValue = $("input[name='buscador']:checked").val();
      	if(radioValue == "reflejo"){
      		location.href ="http://localhost/veterinaria/estadisticasReflejo.php";
      	}else
      	if(radioValue == "globo"){
      		location.href ="http://localhost/veterinaria/estadisticasGlobo.php";
      	}else
      	if(radioValue == "parpados"){
      		location.href ="http://localhost/veterinaria/estadisticasParpados.php";
      	}else
      	if(radioValue == "conjuntiva"){
      		location.href ="http://localhost/veterinaria/estadisticasConjuntiva.php";
      	}else
      	if(radioValue == "cornea"){
      		location.href ="http://localhost/veterinaria/estadisticasCornea.php";
      	}else
      	if(radioValue == "iris"){
      		location.href ="http://localhost/veterinaria/estadisticasIris.php";
      	}else
      	if(radioValue == "lente"){
      		location.href ="http://localhost/veterinaria/estadisticasLente.php";
      	}else
      	if(radioValue == "fondo"){
      		location.href ="http://localhost/veterinaria/estadisticasFondo.php";
      	}
      }

      function saveMedico(){
			//---------------------------------------------- AJAX PARA INSERTAR MEDICO ---------------------------------------------->
			var datos = $('#frmajax').serialize();
			var nombre = $('#nombre').val();
			var documento = $('#documento').val();
			var telefono = $('#telefono').val();
			var tipoDocumento= $('#tipodocumento').val();
			var bandera=1;
			
			if (nombre == "" | documento == "" | telefono == "" | tipoDocumento == "") {
				swal("* Faltan campos por digitar *");
			} else {
				
				$.ajax({
					type: "POST",
					url: "http://localhost/veterinaria/guardar.php",
					data:datos + '&bandera=' + bandera,

				}).done( function(info){				
					document.getElementById("nombre").value = "";
					document.getElementById("documento").value = "";
					document.getElementById("telefono").value = "";		
					$('#tipodocumento').val('');	
						$("#mensaje").html(info); // DIV DONDE SE VISUALIZA EL MSJ								
					});				
			}

		}



//REPORTES

function generarReporteCedula()
{
	var cedula = $('#cedula').val();
	if(cedula==""){
		swal("* Digite cedula *");
	}else{
		window.open('fpdf/reporteCedula.php?cedula='+cedula,"Reporte PDF","width=auto,height=auto");
	}


}


function li1()
{
	$('#li1').addClass("nav-active");

	$('#li2').removeClass("nav-active");
	$('#li3').removeClass("nav-active");
	$('#li4').removeClass("nav-active");
	$('#li5').removeClass("nav-active");
	$('#li6').removeClass("nav-active");
	$('#li7').removeClass("nav-active");
	$('#li8').removeClass("nav-active");
	$('#li9').removeClass("nav-active");

}

function li2()
{
	$('#li2').addClass("nav-active");

	$('#li1').removeClass("nav-active");
	$('#li3').removeClass("nav-active");
	$('#li4').removeClass("nav-active");
	$('#li5').removeClass("nav-active");
	$('#li6').removeClass("nav-active");
	$('#li7').removeClass("nav-active");
	$('#li8').removeClass("nav-active");
	$('#li9').removeClass("nav-active");

}

function li3()
{
	$('#li3').addClass("nav-active");

	$('#li2').removeClass("nav-active");
	$('#li1').removeClass("nav-active");
	$('#li4').removeClass("nav-active");
	$('#li5').removeClass("nav-active");
	$('#li6').removeClass("nav-active");
	$('#li7').removeClass("nav-active");
	$('#li8').removeClass("nav-active");
	$('#li9').removeClass("nav-active");

}

function li4()
{
	$('#li4').addClass("nav-active");

	$('#li2').removeClass("nav-active");
	$('#li3').removeClass("nav-active");
	$('#li1').removeClass("nav-active");
	$('#li5').removeClass("nav-active");
	$('#li6').removeClass("nav-active");
	$('#li7').removeClass("nav-active");
	$('#li8').removeClass("nav-active");
	$('#li9').removeClass("nav-active");

}

function li5()
{
	$('#li5').addClass("nav-active");

	$('#li2').removeClass("nav-active");
	$('#li3').removeClass("nav-active");
	$('#li4').removeClass("nav-active");
	$('#li1').removeClass("nav-active");
	$('#li6').removeClass("nav-active");
	$('#li7').removeClass("nav-active");
	$('#li8').removeClass("nav-active");
	$('#li9').removeClass("nav-active");

}

function li6()
{
	$('#li6').addClass("nav-active");

	$('#li2').removeClass("nav-active");
	$('#li3').removeClass("nav-active");
	$('#li4').removeClass("nav-active");
	$('#li5').removeClass("nav-active");
	$('#li1').removeClass("nav-active");
	$('#li7').removeClass("nav-active");
	$('#li8').removeClass("nav-active");
	$('#li9').removeClass("nav-active");

}

function li7()
{
	$('#li7').addClass("nav-active");

	$('#li2').removeClass("nav-active");
	$('#li3').removeClass("nav-active");
	$('#li4').removeClass("nav-active");
	$('#li5').removeClass("nav-active");
	$('#li6').removeClass("nav-active");
	$('#li1').removeClass("nav-active");
	$('#li8').removeClass("nav-active");
	$('#li9').removeClass("nav-active");

}

function li8()
{
	$('#li8').addClass("nav-active");

	$('#li2').removeClass("nav-active");
	$('#li3').removeClass("nav-active");
	$('#li4').removeClass("nav-active");
	$('#li5').removeClass("nav-active");
	$('#li6').removeClass("nav-active");
	$('#li7').removeClass("nav-active");
	$('#li1').removeClass("nav-active");
	$('#li9').removeClass("nav-active");

}

function li9()
{
	$('#li9').addClass("nav-active");

	$('#li2').removeClass("nav-active");
	$('#li3').removeClass("nav-active");
	$('#li4').removeClass("nav-active");
	$('#li5').removeClass("nav-active");
	$('#li6').removeClass("nav-active");
	$('#li7').removeClass("nav-active");
	$('#li8').removeClass("nav-active");
	$('#li1').removeClass("nav-active");
}

