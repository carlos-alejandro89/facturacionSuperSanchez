"use strict";
var KTCreateAccount = function() {
    var e, t, i, o, a, r, s = [];
    return {
        init: function() {
            (e = document.querySelector("#kt_modal_create_account")) && new bootstrap.Modal(e), (t = document.querySelector("#kt_create_account_stepper")) && (i = t.querySelector("#kt_create_account_form"), o = t.querySelector('[data-kt-stepper-action="submit"]'), a = t.querySelector('[data-kt-stepper-action="next"]'), (r = new KTStepper(t)).on("kt.stepper.changed", (function(e) {
                6 === r.getCurrentStepIndex() ? (o.classList.remove("d-none"), o.classList.add("d-inline-block"), a.classList.add("d-none")) : 7 === r.getCurrentStepIndex() ? (o.classList.add("d-none"), a.classList.add("d-none")) : (o.classList.remove("d-inline-block"), o.classList.remove("d-none"), a.classList.remove("d-none"))
            })), r.on("kt.stepper.next", (function(e) {
                //console.log("stepper.next");
                var t = s[e.getCurrentStepIndex() - 1];
                t ? t.validate().then((function(t) {
                    console.log("validated!"), "Valid" == t ? (e.goNext(), KTUtil.scrollTop()) : Swal.fire({
                        text: "Los datos requeridos están incompletos.",
                        title: 'Datos incompletos',
                        icon: "warning",
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
                    txtNombreTaller: {
                        validators: {
                            notEmpty: {
                                message: 'El campo "Nombre del Taller" es obligatorio'
                            }
                        }
                    },
                    txtDireccion:{
                        validators: {
                            notEmpty: {
                                message: 'El campo "Dirección" es obligatorio'
                            }
                        }
                    },
                    txtResponsable:{
                        validators: {
                            notEmpty: {
                                message: 'El campo "Responsable del taller" es obligatorio'
                            }
                        }
                    },
                    txtFechaImplementacion:{
                        validators: {
                            notEmpty: {
                                message: 'El campo "Fecha de implementación" es obligatorio'
                            }
                        }
                    },
                    cmbTecnicos: {
                        validators: {
                            notEmpty: {
                                message: "Seleccione un técnico de la lista"
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
                    txtSistemaRepintado: {
                        validators: {
                            notEmpty: {
                                message: "Campo Requerido"
                            }
                        }
                    },
                    txtTiendaMateriales: {
                        validators: {
                            notEmpty: {
                                message: "Campo Requerido"
                            }
                        }
                    },
                    cmbPrimario: {
                        validators: {
                            notEmpty: {
                                message: "Seleccione un primario de la lista"
                            }
                        }
                    },
                    cmbBaseColor: {
                        validators: {
                            notEmpty: {
                                message: "Seleccione base color de la lista"
                            }
                        }
                    },
                    cmbTransparente: {
                        validators: {
                            notEmpty: {
                                message: "Seleccione un Transparente de la lista"
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
                    cmbLaboratorio: {
                        validators: {
                            notEmpty: {
                                message: "Seleccione una opción"
                            }
                        }
                    },
                    cmbCabina: {
                        validators: {
                            notEmpty: {
                                message: "Seleccione una opción"
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
                    txtHojalateros: {
                        validators: {
                            notEmpty: {
                                message: "Indique el número de Hojalateros que tiene el taller"
                            },
                            digits: {
                                message: "Este campo solo acepta numeros"
                            }
                        }
                    },
                    txtPreparadores: {
                        validators: {
                            notEmpty: {
                                message: "Indique el número de Preparadores que tiene el taller"
                            },
                            digits: {
                                message: "Este campo solo acepta numeros"
                            }
                        }
                    },
                    txtPintores: {
                        validators: {
                            notEmpty: {
                                message: "Indique el número de Pintores que tiene el taller"
                            },
                            digits: {
                                message: "Este campo solo acepta numeros"
                            }
                        }
                    },
                    txtPulidores: {
                        validators: {
                            notEmpty: {
                                message: "Indique el número de Pulidores que tiene el taller"
                            },
                            digits: {
                                message: "Este campo solo acepta numeros"
                            }
                        }
                    },
                    
                
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
                    txtReparacionesQualitas: {
                        validators: {
                            notEmpty: {
                                message: "Indique el número de Reparaciones Qualitas"
                            },
                            digits: {
                                message: "Este campo solo acepta numeros"
                            }
                        }
                    },
                    txtReparacionesOtros: {
                        validators: {
                            notEmpty: {
                                message: "Indique el número de Reparaciones de otras aseguradoras"
                            },
                            digits: {
                                message: "Este campo solo acepta numeros"
                            }
                        }
                    },
                   
                    
                
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
                    cmbHerramientaConsumo: {
                        validators: {
                            notEmpty: {
                                message: "Seleccione una opción"
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
            }))
            , o.addEventListener("click", (function(e) {
                s[3].validate().then((function(t) {
                    console.log("validated!"), "Valid" == t ? (e.preventDefault(), o.disabled = !0, o.setAttribute("data-kt-indicator", "on"), setTimeout((function() {
                       /* o.removeAttribute("data-kt-indicator"), o.disabled = !1, r.goNext();
                        $('#previousBtn').hide();
                        $('#newImplementacion').show();*/
                        var formData = new FormData(document.getElementById("kt_create_account_form"));
                      // guardarImplementacion();
                       
                        $.ajax({
                            url:'/implementacion-talleres/guardarImplementacion',
                            type:'post',
                            data: formData,
                            processData: false,  
                            contentType: false,
                            success:(response)=>{
                                o.removeAttribute("data-kt-indicator"), o.disabled = !1, r.goNext();
                                $('#previousBtn').hide();
                                $('#newImplementacion').show();
                            },
                            error:(err)=>{
                                o.removeAttribute("data-kt-indicator"), o.disabled = !1
                            }
                        });
                    }), 2e3)) : Swal.fire({
                        text: "Lo sentimos, la información proporcionada es incompleta, por favor intentelo nuevamente.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, entendido!",
                        customClass: {
                            confirmButton: "btn btn-light"
                        }
                    }).then((function() {
                        KTUtil.scrollTop()
                    }))
                }))
            }))
            )
        }
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTCreateAccount.init()
}));