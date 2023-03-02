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