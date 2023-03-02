function getUsoCFDI(regimen){
    var _token = $('input[name="_token"]').val();
    $.ajax({
        url:'/autofactura/getUsoCFDI',
        type:'post',
        data: {_token: _token, regimen:regimen },
        success:(response)=>{
            var cmb = '#cmbUsoCFDI';
            var usos_cfdi = response.usos_cfdi;

          $(cmb).empty();
          usos_cfdi.forEach((i)=>{
            var newOption = new Option(i.cve_uso_cfdi+' - '+i.desc_uso_cfdi, i.id, false, false);
            $(cmb).append(newOption);
          });

          $(cmb).trigger('change');
          
        },
        error:()=>{

        }
    })
}

function autoCompletar(){
  var _token = $('input[name="_token"]').val();
  var rfc = $('#txtRFC').val();

  if(rfc.length < 12 || rfc.length > 13 ){
    Swal.fire('Proporcione RFC valido','El RFC debe contener entre 12 y 13 caracteres','warning');
    return false;
  }

  $.ajax({
    url:'/autofactura/clientes/get-info',
    type:'post',
    data: {_token: _token, rfc:rfc },
    success:(response)=>{

      if(response == false){
        Swal.fire('','No encontramos registros con el RFC proporcionado, por favor introduzca sus datos por primera vez','warning');
        $('.form-control').val('');
        return false;
      }

      $('input[name="txtRazonSocial"]').val(response.razon_social);
      $('input[name="txtCalle"]').val(response.calle);
      $('input[name="txtNumExt"]').val(response.num_exterior);
      $('input[name="txtNumInt"]').val(response.num_interior);
      $('input[name="txtColonia"]').val(response.colonia);
      $('input[name="txtCiudad"]').val(response.ciudad);
      $('input[name="txtEstado"]').val(response.estado);
      $('input[name="txtCodigoPostal"]').val(response.codigo_postal);
      $('input[name="txtCorreo"]').val(response.correo_electronico);

      var cmb =  document.querySelector('#cmbRegimenFiscal');
      cmb.value = (response.regimen_id);
      $(cmb).trigger('change');
    },
    error:()=>{
      Swal.fire('','No pudimos obtener datos con el RFC proporcionado, por favor introduzca sus datos manualmente','warning');
    }
})
}