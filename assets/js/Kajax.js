/*!
 * Kajax.js by @kenyk7
 * Description: for send data ajax request.RequetsData: 1=succes, 2=Error and othres = error with report data
 * Dependencies: jQuery 1.8+, Pnotify.js with Spanish Messages, Optional: fixed proggresbar bootstrap
 * @license  GPL
 * @version 1.0
 */
 
//ussage methods
// var forms = new Kajax();
 
// for form with file or file pure
// forms.sendFormFile("#form");
 
// for form not file
// forms.sendFormData(".form");
 
// for delete ajax
// forms.btnDelete($(".btn-delete"));
// add selector attr data-action="url-get-action"
 
// and repeat for forms
// ...

function Kajax(){
 
	var arrayInputs = [];

	var errorServer = function(){
		alert("Error del servidor Inténtelo mas tarde");
	}

	// var removeItem = function (arr, item) {
	//     for(var i = arr.length; i--;) {
	// 		if(arr[i] === item) {
	// 		   arr.splice(i, 1);
	// 		}
	//     }
	// }
	
	var refresh = function(){
		setTimeout(function(){
			location.reload();
		},1500);
	}
 
	var progressBar = function(percentComplete,formMultipart){
 
		var inputS = $(formMultipart+' [type=submit]');
 
        inputS.children('.fa').addClass('fa-spinner fa-spin');
 
        $(".progress").fadeIn();
        $(".progress-bar").css('width', percentComplete+'%');
 
        if (percentComplete === 100) {
        	$(".progress").fadeOut();
        	inputS.children('.fa').removeClass('fa-spinner fa-spin');
        }
	}
 
	this.sendFormData = function(formSimple){
		$(formSimple).on('submit', function(event) {
			event.preventDefault();
			$.ajax({
			   method: "POST",
			   url: $(this).attr('action'),
			   data: $(this).serialize()
			}).done(function(data) {
				if(data['message'] === 'success'){
					new PNotify({title: 'OK!',text: 'Datos agregados correctamente',type: 'success',styling: 'fontawesome'});
						refresh();
				}else if(data['message'] === 'error'){
					new PNotify({title: 'Error!',text: 'Ha ocurrido un error con la base de datos inténtelo Luego',type: 'error',styling: 'fontawesome'});
				}else{
					new PNotify({title: 'Error!',text: 'Error en la validación de sus datos:' + data['message'] ,type: 'error',styling: 'fontawesome'});
				}
			}).fail(function(data) {
			    errorServer();
			});
		});
	}
					
	this.sendFormFile = function(formMultipart){
		var idInputFile = $(formMultipart+' input[type=file]').attr('id');
		
		$(formMultipart).on('submit', function(event) {
			event.preventDefault();
 
			var formdata = new FormData();
 
			$(formMultipart+' input[name!='+idInputFile+']').each(function() {
				arrayInputs.push($(this).attr('name'));
			});
 
			$(formMultipart+' select').each(function() {
				arrayInputs.push($(this).attr('name'));
			});
 
			$(formMultipart+' textarea').each(function() {
				arrayInputs.push($(this).attr('name'));
			});
 
			if(arrayInputs[0] === ""){
				arrayInputs[0] = "HOLA";
			}
 
			console.log(arrayInputs);
 
			formdata.append('userfile', $('#'+idInputFile+'')[0].files[0]);
 
			for(i=0;i<arrayInputs.length;i++){
			    formdata.append(arrayInputs[i], $(formMultipart+' [name='+arrayInputs[i]+'').val());
			}
			// reset array
			arrayInputs = [];
 
			$.ajax({
				url: $(this).attr('action'),
				type: "POST",
				data: formdata,
				processData: false,
				contentType: false,
				xhr: function(){
					var xhr = new window.XMLHttpRequest();
				    xhr.upload.addEventListener("progress", function(evt) {
				      if (evt.lengthComputable) {
				        var percentComplete = evt.loaded / evt.total;
				        percentComplete = parseInt(percentComplete * 100);
				        progressBar(percentComplete,formMultipart);
				      }
				    }, false);
				    return xhr;
				}
			}).done(function(data) {
				if(data['message'] === 'success'){
					new PNotify({title: 'OK!',text: 'Los datos ha sido enviados Correctamente',type: 'success',styling: 'fontawesome'});
						refresh();
				}else if(data['message'] === 'error'){
					new PNotify({title: 'Error!',text: 'Ha ocurrido un error con la base de datos inténtelo Luego',type: 'error',styling: 'fontawesome'});
				}else{
					new PNotify({title: 'Error!',text: 'Ha ocurrido el siguiente error:<br> '+data['message'] ,type: 'error',styling: 'fontawesome'});
				}
			}).fail(function(data) {
			    errorServer();
			    console.log(data);
			});
		});
	}
 
}