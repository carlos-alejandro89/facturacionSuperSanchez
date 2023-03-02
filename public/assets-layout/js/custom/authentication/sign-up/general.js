"use strict";
var KTSignupGeneral = function() {
    var e, t, a, r, s = function() {
        return 100 === r.getScore()
    };
    return {
        init: function() {
            e = document.querySelector("#kt_sign_up_form"), t = document.querySelector("#kt_sign_up_submit"), r = KTPasswordMeter.getInstance(e.querySelector('[data-kt-password-meter="true"]')), a = FormValidation.formValidation(e, {
                fields: {
                    "name": {
                        validators: {
                            notEmpty: {
                                message: "El nombre es requerido"
                            }
                        }
                    },
                    "last-name": {
                        validators: {
                            notEmpty: {
                                message: "Last Name is required"
                            }
                        }
                    },
                    email: {
                        validators: {
                            regexp: {
                                regexp: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
                                message: "El dato proporcionado no es un email valido"
                            },
                            notEmpty: {
                                message: "Se requiere una cuenta de correo electrónico"
                            }
                        }
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: "Introduzca un password"
                            },
                            callback: {
                                message: "Introduzca un password valido por favor",
                                callback: function(e) {
                                    if (e.value.length > 0) return s()
                                }
                            }
                        }
                    },
                    "password_confirmation": {
                        validators: {
                            notEmpty: {
                                message: "Confirme el password"
                            },
                            identical: {
                                compare: function() {
                                    return e.querySelector('[name="password"]').value
                                },
                                message: "El password y su confirmación no son iguales"
                            }
                        }
                    },
                    toc: {
                        validators: {
                            notEmpty: {
                                message: "You must accept the terms and conditions"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger({
                        event: {
                            password: !1
                        }
                    }),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            }), t.addEventListener("click", (function(s) {
                s.preventDefault(), a.revalidateField("password"), a.validate().then((function(a) {
                    "Valid" == a ? (t.setAttribute("data-kt-indicator", "on"), t.disabled = !0, setTimeout((function() {
                        t.removeAttribute("data-kt-indicator");

                        $('#kt_sign_up_form').submit();
                       /* t.removeAttribute("data-kt-indicator"), t.disabled = !1, Swal.fire({
                            text: "Se ha creado la cuenta correctamente",
                            icon: "success",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, Iniciar sesión!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        }).then((function(t) {
                            if (t.isConfirmed) {
                                e.reset(), r.reset();
                                var a = e.getAttribute("data-kt-redirect-url");
                                a && (location.href = a)
                            }
                        }))*/
                    }), 1500)) : Swal.fire({
                        text: "Lo sentimos, datos incompletos.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Entendido!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    })
                }))
            })), e.querySelector('input[name="password"]').addEventListener("input", (function() {
                this.value.length > 0 && a.updateFieldStatus("password", "NotValidated")
            }))
        }
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTSignupGeneral.init()
}));