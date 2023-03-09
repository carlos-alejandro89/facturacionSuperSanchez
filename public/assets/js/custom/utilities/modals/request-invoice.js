"use strict";
var KTCreateAccount = function() {
    var e, t, i, o, a, r, s = [];
    return {
        init: function() {
            (e = document.querySelector("#kt_modal_create_account")) && new bootstrap.Modal(e), (t = document.querySelector("#kt_create_account_stepper")) && (i = t.querySelector("#kt_create_account_form"), o = t.querySelector('[data-kt-stepper-action="submit"]'), a = t.querySelector('[data-kt-stepper-action="next"]'), (r = new KTStepper(t)).on("kt.stepper.changed", (function(e) {
                4 === r.getCurrentStepIndex() ? (o.classList.remove("d-none"), o.classList.add("d-inline-block"), a.classList.add("d-none")) : 5 === r.getCurrentStepIndex() ? (o.classList.add("d-none"), a.classList.add("d-none")) : (o.classList.remove("d-inline-block"), o.classList.remove("d-none"), a.classList.remove("d-none"))
            })), r.on("kt.stepper.next", (function(e) {
                var t = s[e.getCurrentStepIndex() - 1];
                t ? t.validate().then((function(t) {
                    /*"Valid" == t ? (e.goNext(), KTUtil.scrollTop()) : Swal.fire({
                        text: "Lo sentimos, encontramos datos invalidos y/o faltantes, Por favor verifique su información e intentelo nuevamente.",
                        icon: "warning",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, Entendido!",
                        customClass: {
                            confirmButton: "btn btn-light"
                        }
                    }).then((function() {
                        KTUtil.scrollTop()
                    }))*/
                    if(t == "Valid"){
                        var transac = $('input[name="transac"]:checked').val();
                        if(e.getCurrentStepIndex() == 1){                           

                            if(transac == 'factura_tae'){
                                $(".factura").addClass('d-none');
                                $(".factura-tae").removeClass('d-none');
                                $("#txtNumTelefono").val('');
                                $("#txtNumAutorizacion").val('');
                                $(".ticket").val('000');
                            }else{
                                $(".factura-tae").addClass('d-none');
                                $(".factura").removeClass('d-none');
                                $("#txtNumTelefono").val('0000000000');
                                $("#txtNumAutorizacion").val('00000000');
                                $(".ticket").val('');
                            }
                            
                        }
                        if(e.getCurrentStepIndex() == 3){
                            //console.log('validando ticket');

                            var _token      = $('input[name="_token"]').val();
                            if(transac == 'factura'){
                                var numTienda   = $('input[name="txtNumTienda"]').val();
                                var numCaja     = $('input[name="txtNumCaja"]').val();
                                var numTicket   = $('input[name="txtNumTicket"]').val();
                                var fechaTicket = $('input[name="txtFechaCompra"]').val();
                                var montoTicket = $('input[name="txtMontoCompra"]').val();
                                var endpoint = '/autofactura/ticket/validar';
                                var data_ = {_token: _token, numTienda: numTienda, numCaja: numCaja, numTicket:numTicket, fechaTicket:fechaTicket, montoTicket:montoTicket};
                            }else{
                                var endpoint = '/autofactura/tae/validar';
                                var numTelefono = $('input[name="txtNumTelefono"]').val();
                                var numAutorizacion = $('input[name="txtNumAutorizacion"]').val();
                                var data_ = {_token: _token, numTelefono: numTelefono, numAutorizacion:numAutorizacion, fechaTicket:fechaTicket};
                            }
							

                            $.ajax({
                                url: endpoint,
                                type:'post',
                                data: data_,
                                beforeSend:()=>{

                                },
                                success:(response)=>{
                                    (response.TMensaje == "success") ? e.goNext() : Swal.fire(response.Titulo,response.Mensaje,response.TMensaje);
                                },
                                error:(err)=>{
                                    
                                }
                            });

                        }else{
                           
                            e.goNext();
                            KTUtil.scrollTop();
                        }
                        
                    }else{
                        Swal.fire({
                            text: "Lo sentimos, encontramos datos invalidos y/o faltantes, Por favor verifique su información e intentelo nuevamente.",
                            icon: "warning",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, Entendido!",
                            customClass: {
                                confirmButton: "btn btn-light"
                            }
                        });
                    }
                })) : (e.goNext(), KTUtil.scrollTop())
            })), r.on("kt.stepper.previous", (function(e) {
                e.goPrevious(), KTUtil.scrollTop()
            })), s.push(FormValidation.formValidation(i, {
                fields: {
                    account_type: {
                        validators: {
                            notEmpty: {
                                message: "Seleccione tipo de operación"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })), s.push(FormValidation.formValidation(i, {
                fields: {
                    txtRazonSocial: {
                        validators: {
                            notEmpty: {
                                message: "El Nombre o Razón Social es un campo obligatorio"
                            }
                        }
                    },
                    txtRFC: {
                        validators: {
                            notEmpty: {
                                message: "El RFC es un campo obligatorio"
                            },
                            stringLength: {
                                min: 12,
                                max: 13,
                                message: "El RFC debe contener entre 12 y 13 caracteres"
                            }
                        }
                    },
                    cmbRegimenFiscal: {
                        validators: {
                            notEmpty: {
                                message: "Seleccione una opción de la lista"
                            }
                        }
                    },
                    txtCodigoPostal: {
                        validators: {
                            notEmpty: {
                                message: "El Código Postal es un campo obligatorio"
                            },
                            digits: {
                                message: "Este campo solo admite números"
                            },
                            stringLength: {
                                min: 5,
                                max: 5,
                                message: "El Código Postal debe contener 5 dígitos"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })), s.push(FormValidation.formValidation(i, {
                fields: {
                    txtNumTienda: {
                        validators: {
                            notEmpty: {
                                message: "Introduzca número de tienda"
                            },
                            stringLength: {
                                min: 3,
                                max: 3,
                                message: "El valor de este campo es de 3 caracteres"
                            }
                        }
                    },
                    txtNumCaja: {
                        validators: {
                            notEmpty: {
                                message: "Introduzca número de caja"
                            },
                            digits: {
                                message: "Este campo solo admite números"
                            },
                            stringLength: {
                                min: 3,
                                max: 3,
                                message: "El valor de este campo es de 3 caracteres"
                            }
                        }
                    },
                    txtNumTicket: {
                        validators: {
                            notEmpty: {
                                message: "Introduzca número de Ticket"
                            },
                            digits: {
                                message: "Este campo solo admite números"
                            }
                        }
                    },
                    txtMontoCompra: {
                        validators: {
                            notEmpty: {
                                message: "Introduzca el monto de compra"
                            },
                            numeric: {
                                message: "Este campo solo admite números"
                            }
                        }
                    },
                    txtNumTelefono: {
                        validators: {
                            notEmpty: {
                                message: "Introduzca número de teléfono"
                            },
                            digits: {
                                message: "Este campo solo admite números"
                            },
                            stringLength: {
                                min: 10,
                                max: 10,
                                message: "Introduzca los 10 digitos del número de teléfono"
                            }
                        }
                    },
                    txtNumAutorizacion: {
                        validators: {
                            notEmpty: {
                                message: "Introduzca número de autorización"
                            },
                            digits: {
                                message: "Este campo solo admite números"
                            },
                            stringLength: {
                                min: 6,
                                max: 8,
                                message: "El valor de este campo es de 6 a 8 caracteres"
                            }
                        }
                    },
                    txtFechaCompra: {
                        validators: {
                            notEmpty: {
                                message: "Introduzca la fecha de compra"
                            }
                        }
                    },
                    cmbUsoCFDI: {
                        validators: {
                            notEmpty: {
                                message: "Seleccione Uso del CFDI"
                            }
                        }
                    },
                    
                    
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })), s.push(FormValidation.formValidation(i, {
                fields: {
                    txtCorreo: {
                        validators: {
                            notEmpty: {
                                message: "Introduzca su correo electrónico"
                            },
                            emailAddress: {
                                message: "Proporcione un correo electrónico valido. Ej. micorreo@email.com"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })), o.addEventListener("click", (function(e) {
                s[3].validate().then((function(t) {
                    console.log("validated!"), "Valid" == t ? (e.preventDefault(), o.disabled = !0, o.setAttribute("data-kt-indicator", "on"), setTimeout((function() {
                        //o.removeAttribute("data-kt-indicator"), o.disabled = !1, r.goNext()
                        var formData = new FormData(document.getElementById("kt_create_account_form"));
                      // guardarImplementacion();
                      var transac = $('input[name="transac"]:checked').val();
                      var endpoint = (transac == 'factura') ? '/autofactura/solicitaCFDI' : '/autofactura/tae/generar-factura';
                       
                        $.ajax({
                            url: endpoint,
                            type:'post',
                            data: formData,
                            processData: false,  
                            contentType: false,
                            success:(response)=>{
                                o.removeAttribute("data-kt-indicator"), o.disabled = !1, r.goNext();
                                $('#previousBtn').hide();
                                $('#nuevoCFDI').show();
                            },
                            error:(err)=>{
                                o.removeAttribute("data-kt-indicator"), o.disabled = !1
                            }
                        });
                    }), 2e3)) : Swal.fire({
                        text: "Lo sentimos, encontramos datos invalidos y/o faltantes, Por favor verifique su información e intentelo nuevamente.",
                        icon: "warning",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, Entendido!",
                        customClass: {
                            confirmButton: "btn btn-light"
                        }
                    }).then((function() {
                        KTUtil.scrollTop()
                    }))
                }))
            })))
        }
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTCreateAccount.init()
}));