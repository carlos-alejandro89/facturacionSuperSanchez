"use strict";
var KTCreateAccount = function() {
    var e, t, i, o, a, r, s = [];
    return {
        init: function() {
            (e = document.querySelector("#kt_modal_create_account")) && new bootstrap.Modal(e), (t = document.querySelector("#kt_create_account_stepper")) && (i = t.querySelector("#kt_create_account_form"), o = t.querySelector('[data-kt-stepper-action="submit"]'), a = t.querySelector('[data-kt-stepper-action="next"]'), (r = new KTStepper(t)).on("kt.stepper.changed", (function(e) {
                4 === r.getCurrentStepIndex() ? (o.classList.remove("d-none"), o.classList.add("d-inline-block"), a.classList.add("d-none")) : 5 === r.getCurrentStepIndex() ? (o.classList.add("d-none"), a.classList.add("d-none")) : (o.classList.remove("d-inline-block"), o.classList.remove("d-none"), a.classList.remove("d-none"))
            })), r.on("kt.stepper.next", (function(e) {
                console.log("stepper.next");
                var t = s[e.getCurrentStepIndex() - 1];
                t ? t.validate().then((function(t) {
                    console.log("validated!"), "Valid" == t ? (e.goNext(), KTUtil.scrollTop()) : Swal.fire({
                        text: "Lo sentimos, encontramos datos invalidos y/o faltantes, Por favor verifique su información e intentelo nuevamente.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, Entendido!",
                        customClass: {
                            confirmButton: "btn btn-light"
                        }
                    }).then((function() {
                        KTUtil.scrollTop()
                    }))
                })) : (e.goNext(), KTUtil.scrollTop())
            })), r.on("kt.stepper.previous", (function(e) {
                console.log("stepper.previous"), e.goPrevious(), KTUtil.scrollTop()
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
                       
                        $.ajax({
                            url:'/autofactura/solicitaCFDI',
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
                        icon: "error",
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