"use strict";
var KTSigninGeneral = function() {
    var e, t, i;
    return {
        init: function() {
            e = document.querySelector("#kt_sign_in_form"), t = document.querySelector("#kt_sign_in_submit"), i = FormValidation.formValidation(e, {
                fields: {
                    email: {
                        validators: {
                            notEmpty: {
                                message: "Usuario es obligatorio"
                            }
                        }
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: "Contraseña es obligatorio"
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
            }), t.addEventListener("click", (function(n) {
                n.preventDefault(), i.validate().then((function(i) {
                    "Valid" == i ? (t.setAttribute("data-kt-indicator", "on"), t.disabled = !0, setTimeout((function() {
                        var formData = new FormData(document.getElementById("kt_sign_in_form"));
                        $.ajax({
                            url:'/accounts/sign-in',
                            type:'post',
                            data: formData,
                            processData: false,  
                            contentType: false,
                            success:(data)=>{
                                t.removeAttribute("data-kt-indicator"), t.disabled = !1;
                                if(data.TMensaje == 'success'){
                                    var i = e.getAttribute("data-kt-redirect-url");
                                    i && (location.href = i);
                                }else{
                                    Swal.fire(data.Mensaje,'',data.TMensaje);
                                }
                            },
                            error:()=>{
                                t.removeAttribute("data-kt-indicator"), t.disabled = !1;
                                Swal.fire('No podemos iniciar sesión, ha ocurrido un error con el servicio','','error');
                            }
                        })
                       
                       // $('#kt_sign_in_form').submit();
                    }), 2e3)) : Swal.fire({
                        text: "Lo sentimos, hemos detectado errores, por favor intentelo nuevamente.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, entendido!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    })
                }))
            }))
        }
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTSigninGeneral.init()
}));