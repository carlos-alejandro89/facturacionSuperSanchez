<!DOCTYPE html>
<html lang="es">
  <!--begin::Head-->
  <head>
    <base href="/" />
    <title>Súper Sánchez - Factura Electrónica</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="/assets/media/logos/favicon.png" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body id="kt_body" class="app-blank app-blank">
    <!--begin::Theme mode setup on page load-->
    <script>
      var defaultThemeMode = "light";
      var themeMode;
      if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-theme-mode")) {
          themeMode = document.documentElement.getAttribute("data-theme-mode");
        } else {
          if (localStorage.getItem("data-theme") !== null) {
            themeMode = localStorage.getItem("data-theme");
          } else {
            themeMode = defaultThemeMode;
          }
        }
        if (themeMode === "system") {
          themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }
        document.documentElement.setAttribute("data-theme", themeMode);
      }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
      <!--begin::Authentication - Sign-in -->
      <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <!--begin::Body-->
        <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
          <!--begin::Form-->
          <div class="d-flex flex-center flex-column flex-lg-row-fluid">
            <!--begin::Wrapper-->
            <div class="w-lg-500px p-10">
              <!--begin::Form-->
              <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" method="POST" data-kt-redirect-url="/main" action="{{ route('get-invoices') }}"> @csrf
                <!--begin::Heading-->
                <div class="mb-11">
                  <!--begin::Title-->
                  <img src="/assets/header.jpg" class="card-img-top mb-11">
                  <h1 class="text-dark fw-bolder mb-3">Consultar Facturas</h1>
                  <!--end::Title-->
                  <!--begin::Subtitle-->
                  <div class="text-gray-500 fw-semibold fs-6">Introduzca la cuenta de correo electrónico y RFC que proporcionó al solicitar su factura</div>
                  <!--end::Subtitle=--> 
                  @if(Session::has('error')) 
                  <div class="separator separator-content my-14">
                    <span class="w-125px text-gray-500 fw-semibold fs-7">error:</span>
                  </div>
                  <span class="alert alert-danger fw-semibold fs-6" role="alert">
                    <strong>{{Session::get('error')}}</strong>
                  </span> 
                  @endif 
                 
                </div>
                <!--begin::Heading-->
                <!--begin::Input group=-->
                <div class="fv-row mb-8">
                  <!--begin::Email-->
                  <input type="text" placeholder="Correo Electrónico" name="email" autocomplete="off" class="form-control bg-transparent" value="{{ old('email') }}" />
                  <!--end::Email-->
                </div>
                <!--end::Input group=-->
                <div class="fv-row mb-3">
                  <!--begin::Password-->
                  <input type="text" placeholder="RFC" name="txtRFC" autocomplete="off" class="form-control bg-transparent" />
                  <!--end::Password-->
                </div>
                <!--end::Input group=-->
                <!--begin::Wrapper-->
                <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                  <div></div>
                </div>
                <!--end::Wrapper-->
                <!--begin::Submit button-->
                <div class="d-grid mb-10">
                  <div class="d-flex flex-stack pt-15">
                    <div class="mr-2">
                      <a href="/" name="previousBtn" id="previousBtn" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                        <span class="svg-icon svg-icon-4 me-1">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor" />
                            <path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="currentColor" />
                          </svg>
                        </span>
                        <!--end::Svg Icon--> Regresar
                      </a>
                    </div>
                    <div>
                      <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary" data-kt-stepper-action="next"> Consultar
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                        <span class="svg-icon svg-icon-4 ms-1">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                            <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </button>
                    </div>
                  </div>
                </div>
                <!--end::Submit button-->
                <!--begin::Sign up-->
                <div class="text-gray-500 text-center fw-semibold fs-6">
                  <a href="/" class="link-danger">Aviso de privacidad</a>
                </div>
                <!--end::Sign up-->
              </form>
              <!--end::Form-->
            </div>
            <!--end::Wrapper-->
          </div>
          <!--end::Form-->
          <!--begin::Footer-->
          <div class="d-flex flex-center flex-wrap px-5"></div>
          <!--end::Footer-->
        </div>
        <!--end::Body-->
      </div>
      <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->
    <!--begin::Javascript-->
    <script>
      var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="assets/js/custom/authentication/sign-in/get-invoices.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
  </body>
  <!--end::Body-->
</html>