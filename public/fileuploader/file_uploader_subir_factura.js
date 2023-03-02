function SubirDocs(uniqid) {
	var _token = $('input[name="_token"]').val();
	// enable fileuploader plugin
	$('input[name="files"]').fileuploader({
		captions: 'es',
        limit: 2,
        changeInput: '<div class="fileuploader-input">' +
					      '<div class="fileuploader-input-inner">' +
						      '<div class="fileuploader-icon-main"></div>' +
							  '<h3 class="fileuploader-input-caption"><span>${captions.feedback}</span></h3>' +
							  '<p>${captions.or}</p>' +
							  '<button type="button" class="fileuploader-input-button"><span>${captions.button}</span></button>' +
						  '</div>' +
					  '</div>',
        theme: 'dragdrop',
        enableApi: true,
        extensions: ['xml','pdf'],
		upload: {
            url: '/manager/cfdi/confirmar-operacion',
            data: {_token:_token, uniqid: uniqid},
            type: 'POST',
            enctype: 'multipart/form-data',
            start: false,
            synchron: true,
            beforeSend: null,
            onSuccess: function(result, item) {
                var data = {};				
                // get data
				if (result && result.files)
                    data = result;
                else
					data.hasWarnings = true;
                
				// if success
                if (data.isSuccess && data.files[0]) {
                    item.name = data.files[0].name;
					item.html.find('.column-title > div:first-child').text(data.files[0].old_name).attr('title', data.files[0].old_name);
                }
				
				// if warnings
				if (data.hasWarnings) {
					for (var warning in data.warnings) {
						alert(data.warnings[warning]);
					}
					
					item.html.removeClass('upload-successful').addClass('upload-failed');
					return this.onError ? this.onError(item) : null;
				}
                
                item.html.find('.fileuploader-action-remove').addClass('fileuploader-action-success');
                setTimeout(function() {
                    item.html.find('.progress-bar2').fadeOut(400);
                }, 400);
            },
            onError: function(item) {
				var progressBar = item.html.find('.progress-bar2');
				
				if(progressBar.length) {
					progressBar.find('span').html(0 + "%");
                    progressBar.find('.fileuploader-progressbar .bar').width(0 + "%");
					item.html.find('.progress-bar2').fadeOut(400);
				}
                
                item.upload.status != 'cancelled' && item.html.find('.fileuploader-action-retry').length == 0 ? item.html.find('.column-actions').prepend(
                    '<button type="button" class="fileuploader-action fileuploader-action-retry" title="Retry"><i class="fileuploader-icon-retry"></i></button>'
                ) : null;
            },
            onProgress: function(data, item) {
                var progressBar = item.html.find('.progress-bar2');
				
                if(progressBar.length > 0) {
                    progressBar.show();
                    progressBar.find('span').html(data.percentage + "%");
                    progressBar.find('.fileuploader-progressbar .bar').width(data.percentage + "%");
                }
            },
            onComplete: () => {
                enviarFactura(uniqid);
            },
        },
		onRemove: function(item) {
			/*$.post('/SIFOL/Folios/v2/EliminarDocumento', {
				_token:_token,
				_Folio:_Folio,
				file: item.name
			});*/
		},
		captions: $.extend(true, {}, $.fn.fileuploader.languages['es'], {
            feedback: 'Arrastre y suelte sus archivos aquí',
            feedback2: 'Arrastre y suelte sus archivos aquí',
            drop: 'Arrastre y suelte sus archivos aquí',
            or: 'o',
            button: 'Examinar archivos',
        }),
	});
	
}

function enviarFactura(uniqid){
    var _token = $('input[name="_token"]').val();
    $.ajax({
        url: '/manager/cfdi/enviar-archivos',
        data: {_token:_token, uniqid: uniqid},
        type:'post',
        success:function(){
            Swal.fire({title:'Proceso satisfactorio!',text:'Has cargado correctamente los archivos de la factura.',icon:'success',allowOutsideClick: false}).then((i)=>{if(i.isConfirmed){location.reload()}});
        },
        error:function(){

        }
        
    });
}

function procesarArchivo(){
    var api = $.fileuploader.getInstance('input.files');
    if(api.isEmpty() == false){
        //
        var myFiles = api.getFiles();
        var countXML = 0;
        var countPDF = 0;
        myFiles.forEach((i)=>{
            countPDF += (i.extension == 'pdf') ? 1 : 0;
            countXML += (i.extension == 'xml') ? 1 : 0;
        });
        if(countXML > 1 || countPDF > 1){
            Swal.fire('No podemos procesar los archivos','No es posible procesar la carga de los archivos, ya que solo se permite 1 xml y 1 pdf a la vez','warning');
            return false;
        }

        if(countPDF == 0 || countXML == 0){
            Swal.fire('¡Suba ambos archivos!','Es necesario subir los archivos XML y PDF de la factura','warning');
            return false;
        }
        
        api.uploadStart();    
        
    }else{
        alert('Debe cargar los archivos correspondientes a la factura');
    }   
}