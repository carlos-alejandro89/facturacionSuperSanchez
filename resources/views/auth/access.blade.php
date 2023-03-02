<!DOCTYPE html>
<html lang="es">
  <head>
    <base href="/"/>
        <title>CFDI Manager - Iniciar Sesión</title>
        <meta charset="utf-8" />
        
        <link rel="shortcut icon" href="{{asset('assets/media/logos/favicon.png')}}" />

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
        <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
  </head>

  <body id="kt_body" class="app-blank bgi-size-cover bgi-position-center">

    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>

    <div class="d-flex flex-column flex-root" id="kt_app_root">

      <style>
        body {
          background-image: url('/assets/media/auth/bg10.jpeg');
        }

        [data-bs-theme="dark"] body {
          background-image: url('/assets/media/auth/bg10-dark.jpeg');
        }
      </style>

      <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <div class="d-flex flex-lg-row-fluid">
          <div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
          <div class="bg-body d-flex flex-column flex-center rounded-4 w-md-600px p-10">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column align-items-stretch h-lg-100 w-md-400px">
                <!--begin::Wrapper-->
                <div class="d-flex flex-center flex-column-fluid pb-15 pb-lg-20">
                    
<!--begin::Form-->
<form class="form w-100 mb-13" novalidate="novalidate" data-kt-redirect-url="/manager/main" id="kt_sing_in_two_steps_form">
    @csrf
    <!--begin::Icon-->
    <div class="text-center mb-10">
        <img alt="Logo" class="mh-125px" src="/assets/logo_gs_.png">
    </div>
    <!--end::Icon-->

    <!--begin::Heading-->
    <div class="text-center mb-10">
        <!--begin::Title-->
        <h1 class="text-dark mb-3">
            Verificación de dos pasos
        </h1>
        <!--end::Title-->      

        <!--begin::Sub-title-->   
        <div class="text-muted fw-semibold fs-5 mb-5">Introduce tu firma. Es la misma que utilizas en SIFOL</div>
        <!--end::Sub-title-->   

        <!--begin::Mobile no-->    
        <div class="fw-bold text-dark fs-3">{{Session::get('ACCOUNT_CENTRO')}} - {{Session::get('ACCOUNT_NOMBRE_CENTRO')}}</div>
        <!--end::Mobile no-->    
    </div>
    <!--end::Heading-->

    <!--begin::Section-->
    <div class="mb-10">
        <!--begin::Label-->
        <div class="fw-bold text-start text-dark fs-6 mb-1 ms-1">Escribe los 6 digítos de tu firma</div>
        <!--end::Label-->

        <!--begin::Input group-->
        <div class="d-flex flex-wrap flex-stack">                      
            <input type="password" name="code_1" data-inputmask="'placeholder': ''" maxlength="1" class="form-control bg-transparent h-60px w-60px fs-2qx text-center mx-1 my-2" inputmode="text">
            <input type="password" name="code_2" data-inputmask="'placeholder': ''" maxlength="1" class="form-control bg-transparent h-60px w-60px fs-2qx text-center mx-1 my-2" inputmode="text">
            <input type="password" name="code_3" data-inputmask="'placeholder': ''" maxlength="1" class="form-control bg-transparent h-60px w-60px fs-2qx text-center mx-1 my-2" inputmode="text"> 
            <input type="password" name="code_4" data-inputmask="'placeholder': ''" maxlength="1" class="form-control bg-transparent h-60px w-60px fs-2qx text-center mx-1 my-2" inputmode="text"> 
            <input type="password" name="code_5" data-inputmask="'placeholder': ''" maxlength="1" class="form-control bg-transparent h-60px w-60px fs-2qx text-center mx-1 my-2" inputmode="text">                     
            <input type="password" name="code_6" data-inputmask="'placeholder': ''" maxlength="1" class="form-control bg-transparent h-60px w-60px fs-2qx text-center mx-1 my-2" inputmode="text"> 
        </div>                
        <!--begin::Input group-->
    </div>
    <!--end::Section-->

    <!--begin::Submit-->
    <div class="d-flex flex-center">
        <button type="button" id="kt_sing_in_two_steps_submit" class="btn btn-lg btn-primary fw-bold">
            <span class="indicator-label">
                Entrar al sistema
            </span>
            <span class="indicator-progress">
                Validando firma... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
        </button>
    </div>
    <!--end::Submit-->
</form>
<!--end::Form-->

<!--begin::Notice-->

<!--end::Notice-->
                </div>
                <!--end::Wrapper-->

                <!--begin::Footer-->  
                
                <!--end::Footer-->
            </div>
            <!--end::Content-->
        </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      var hostUrl = "/assets/";
    </script>
    <script src="/assets/plugins/global/plugins.bundle.js"></script>
                            <script src="/assets/js/scripts.bundle.js"></script>
                        <!--end::Global Javascript Bundle-->
        
        
                    <!--begin::Custom Javascript(used for this page only)-->
                            <script src="/assets/js/custom/authentication/sign-in/two-steps.js?v1.5"></script>
  </body>
</html>