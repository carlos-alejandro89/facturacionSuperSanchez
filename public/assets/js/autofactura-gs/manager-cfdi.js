function declinarSolicitud(solicitud, motivo){
    var _token = $('input[name="_token"]').val();
    $.ajax({
        url:'manager/cfdi/declinarSolicitud',
        type:'post',
        data:{_token: _token, solicitud: solicitud, motivo: motivo},
        beforeSend:()=>{
            Swal.fire({
                title: 'Declinando solicitud del cliente',
                html: 'Espere un momento por favor',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading()
                },
            });
        },
        success:(response)=>{
            setTimeout(()=>{
                Swal.close();

                Swal.fire(response.Titulo, response.Mensaje, response.TMensaje)
                if(response.TMensaje == "success"){
                    $('button[name="btnDeclinar"]').attr("disabled", true);
                }
            },600);
            
        },
        error:()=>{
            Swal.close();
        }
    });
}