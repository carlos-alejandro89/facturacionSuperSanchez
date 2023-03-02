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
            <div class="d-flex flex-center flex-column align-items-stretch h-lg-100 w-md-400px">
              <div class="d-flex flex-center flex-column-fluid pb-15 pb-lg-20">
                <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="/manager/sign-in/access">
                  @csrf
                  <div class="text-center mb-11">

                    <img src="/assets/logo_gs_.png" class="mh-125px" >
                    <h1 class="text-dark fw-bolder mb-3"> CFDI Manager </h1>

                    <div class="text-gray-500 fw-semibold fs-6"> Bienvenido al administrador de solicitudes CFDI </div>
                  </div>
                  <div class="fv-row mb-8">
                    <input type="text" placeholder="Usuario" name="txtUser" autocomplete="off" class="form-control bg-transparent" />
                  </div>
                  <div class="fv-row mb-3">
                    <input type="password" placeholder="Contraseña" name="password" autocomplete="off" class="form-control bg-transparent" />
                  </div>
                  <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                    <div></div>
                  </div>

                  <div class="d-grid mb-10">
                    <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                      <span class="indicator-label"> Iniciar sesión</span>
                      <span class="indicator-progress"> Iniciando sesión... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                      </span>
                    </button>
                  </div>
                </form>
              </div>
            </div>
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
    <script src="/assets/js/custom/authentication/sign-in/general.js?v1.5"></script>
  </body>
</html>