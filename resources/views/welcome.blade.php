<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Súper Sánchez - Factura Electrónica</title>
    <meta charset="utf-8" />
    <meta name="description" content="Súper Sánchez. Portal para solicitud de facturas electrónicas" />
    <meta name="keywords" content="Super Sanchez, Factura Electrónica" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="/assets/media/logos/favicon.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
  </head>
  <!--begin::Body-->
  <body id="kt_body" class="app-default">

    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
      <!--begin::Authentication - Multi-steps-->
      <div class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-column stepper-multistep" id="kt_create_account_stepper">
        <!--begin::Aside-->
        <div class="d-flex flex-column flex-lg-row-auto w-lg-350px w-xl-500px">
          <div class="d-flex flex-column position-lg-fixed top-0 bottom-0 w-lg-350px w-xl-500px scroll-y bgi-size-cover bgi-position-center">
            <img src="/assets/header.jpg">
            <!--begin::Header-->
            <div class="d-flex flex-center py-10 py-lg-10 mt-lg-10"></div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="d-flex flex-row-fluid justify-content-center p-10">
              <!--begin::Nav-->
              <div class="stepper-nav">
                <!--begin::Step 1-->
                <div class="stepper-item current" data-kt-stepper-element="nav">
                  <!--begin::Wrapper-->
                  <div class="stepper-wrapper">
                    <!--begin::Icon-->
                    <div class="stepper-icon rounded-3">
                      <i class="stepper-check fas fa-check"></i>
                      <span class="stepper-number">1</span>
                    </div>
                    <!--end::Icon-->
                    <!--begin::Label-->
                    <div class="stepper-label">
                      <h3 class="stepper-title fs-2"> Tipo de operación </h3>
                      <div class="stepper-desc fw-normal"> Seleccione el tipo de operación a realizar </div>
                    </div>
                    <!--end::Label-->
                  </div>
                  <!--end::Wrapper-->
                  <!--begin::Line-->
                  <div class="stepper-line h-40px"></div>
                  <!--end::Line-->
                </div>
                <!--end::Step 1-->
                <!--begin::Step 2-->
                <div class="stepper-item" data-kt-stepper-element="nav">
                  <!--begin::Wrapper-->
                  <div class="stepper-wrapper">
                    <!--begin::Icon-->
                    <div class="stepper-icon rounded-3">
                      <i class="stepper-check fas fa-check"></i>
                      <span class="stepper-number">2</span>
                    </div>
                    <!--end::Icon-->
                    <!--begin::Label-->
                    <div class="stepper-label">
                      <h3 class="stepper-title fs-2"> Información Fiscal </h3>
                      <div class="stepper-desc fw-normal"> Introduzca sus datos fiscales </div>
                    </div>
                    <!--end::Label-->
                  </div>
                  <!--end::Wrapper-->
                  <!--begin::Line-->
                  <div class="stepper-line h-40px"></div>
                  <!--end::Line-->
                </div>
                <!--end::Step 2-->
                <!--begin::Step 3-->
                <div class="stepper-item" data-kt-stepper-element="nav">
                  <!--begin::Wrapper-->
                  <div class="stepper-wrapper">
                    <!--begin::Icon-->
                    <div class="stepper-icon">
                      <i class="stepper-check fas fa-check"></i>
                      <span class="stepper-number">3</span>
                    </div>
                    <!--end::Icon-->
                    <!--begin::Label-->
                    <div class="stepper-label">
                      <h3 class="stepper-title fs-2"> Datos del Ticket </h3>
                      <div class="stepper-desc fw-normal"> Proporcione datos del ticket de compra </div>
                    </div>
                    <!--end::Label-->
                  </div>
                  <!--end::Wrapper-->
                  <!--begin::Line-->
                  <div class="stepper-line h-40px"></div>
                  <!--end::Line-->
                </div>
                <!--end::Step 3-->
                <!--begin::Step 4-->
                <div class="stepper-item" data-kt-stepper-element="nav">
                  <!--begin::Wrapper-->
                  <div class="stepper-wrapper">
                    <!--begin::Icon-->
                    <div class="stepper-icon">
                      <i class="stepper-check fas fa-check"></i>
                      <span class="stepper-number">4</span>
                    </div>
                    <!--end::Icon-->
                    <!--begin::Label-->
                    <div class="stepper-label">
                      <h3 class="stepper-title "> Forma de Contacto </h3>
                      <div class="stepper-desc fw-normal"> Proporcione su correo electrónico </div>
                    </div>
                    <!--end::Label-->
                  </div>
                  <!--end::Wrapper-->
                  <!--begin::Line-->
                  <div class="stepper-line h-40px"></div>
                  <!--end::Line-->
                </div>
                <!--end::Step 4-->
                <!--begin::Step 5-->
                <div class="stepper-item" data-kt-stepper-element="nav">
                  <!--begin::Wrapper-->
                  <div class="stepper-wrapper">
                    <!--begin::Icon-->
                    <div class="stepper-icon">
                      <i class="stepper-check fas fa-check"></i>
                      <span class="stepper-number">5</span>
                    </div>
                    <!--end::Icon-->
                    <!--begin::Label-->
                    <div class="stepper-label">
                      <h3 class="stepper-title "> Completado </h3>
                      <div class="stepper-desc fw-normal"> Solicitud recibida </div>
                    </div>
                    <!--end::Label-->
                  </div>
                  <!--end::Wrapper-->
                </div>
                <!--end::Step 5-->
              </div>
              <!--end::Nav-->
            </div>
            <!--end::Body-->
            <!--begin::Footer-->
            <div class="d-flex flex-center flex-wrap px-5 py-10">
              <!--begin::Links-->
              <div class="d-flex fw-normal">
                <a href="#" class="text-danger px-5" target="_blank">Aviso de privacidad</a>
              </div>
              <!--end::Links-->
            </div>
            <!--end::Footer-->
          </div>
        </div>
        <!--begin::Aside-->
        <!--begin::Body-->
        <div class="d-flex flex-column flex-lg-row-fluid py-10 app-content" id="kt_app_content">
          <!--begin::Content-->
          <div class="d-flex flex-center flex-column flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="w-lg-650px w-xl-700px p-10 p-lg-15 mx-auto">
              <!--begin::Form-->
              <form class="my-auto pb-5" novalidate="novalidate" id="kt_create_account_form">
                <!--begin::Step 1-->
                
                <div class="current" data-kt-stepper-element="content">
                  <!--begin::Wrapper-->
                  <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-10 pb-lg-15">
                      <h2 class="fw-bold d-flex align-items-center text-dark"> Seleccione una opción:</h2>
                      <!--begin::Notice-->
                      <div class="text-muted fw-semibold fs-6"> Seleccione la opción del tipo de operación que desea realizar. </div>
                      <!--end::Notice-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="fv-row">
                      <!--begin::Row-->
                      <div class="row">
                        
                        <!--begin::Col-->
                        <div class="col-lg-6">
                          <!--begin::Option-->
                          <input type="radio" class="btn-check" name="transac" value="factura" checked="checked" id="kt_create_account_form_transac_personal" />
                          <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-10" for="kt_create_account_form_transac_personal">
                            <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2022-12-26-231111/core/html/src/media/icons/duotune/general/gen005.svg-->
                            <span class="svg-icon svg-icon-muted svg-icon-2hx">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="currentColor" />
                                <rect x="7" y="17" width="6" height="2" rx="1" fill="currentColor" />
                                <rect x="7" y="12" width="10" height="2" rx="1" fill="currentColor" />
                                <rect x="7" y="7" width="6" height="2" rx="1" fill="currentColor" />
                                <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
                              </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <!--begin::Info-->
                            <span class="d-block fw-semibold text-start">
                              <span class="text-dark fw-bold d-block fs-4 mb-2"> Solicitar Factura </span>
                              <span class="text-muted fw-semibold fs-6">Se requiere información del ticket de compra e Información Fiscal</span>
                            </span>
                            <!--end::Info-->
                          </label>
                          <!--end::Option-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-6">
                          <!--begin::Option-->
                          <input type="radio" class="btn-check" name="transac" value="factura_tae" id="kt_create_account_form_transac_TAE" />
                          <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-10" for="kt_create_account_form_transac_TAE">
                            <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2022-12-26-231111/core/html/src/media/icons/duotune/general/gen005.svg-->
                            <span class="svg-icon svg-icon-muted svg-icon-2hx">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="currentColor" />
                                <rect x="7" y="17" width="6" height="2" rx="1" fill="currentColor" />
                                <rect x="7" y="12" width="10" height="2" rx="1" fill="currentColor" />
                                <rect x="7" y="7" width="6" height="2" rx="1" fill="currentColor" />
                                <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
                              </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <!--begin::Info-->
                            <span class="d-block fw-semibold text-start">
                              <span class="text-dark fw-bold d-block fs-4 mb-2"> Factura Tiempo Aire </span>
                              <span class="text-muted fw-semibold fs-6">Facturación de tiempo aire Telcel, AT&T, Bait y más. Tenga a la mano su ticket de compra</span>
                            </span>
                            <!--end::Info-->
                          </label>
                          <!--end::Option-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-12">
                          <!--begin::Option-->
                          <input type="radio" class="btn-check" name="transac" value="corporate" id="kt_create_account_form_transac_corporate" />
                          <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center" for="kt_create_account_form_transac_corporate">
                            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                            <a href="/cfdi/consulta">
                            <span class="svg-icon svg-icon-3x me-5">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
                                <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
                              </svg>
                            </span>
                            </a>
                            <!--end::Svg Icon-->
                            <!--begin::Info-->
                            <a href="/cfdi/consulta">
                            <span class="d-block fw-semibold text-start">
                              <span class="text-dark fw-bold d-block fs-4 mb-2">Consultar Facturas</span>
                              <span class="text-muted fw-semibold fs-6">Se requiere RFC y Correo Electrónico que propocionó al solicitar factura</span>
                            </span>
                            </a>
                            <!--end::Info-->
                          </label>
                          
                          <!--end::Option-->
                        </div>
                        <!--end::Col-->
                      </div>
                      <!--end::Row-->
                    </div>
                    <!--end::Input group-->
                  </div>
                  <!--end::Wrapper-->
                </div>
                <!--end::Step 1-->
                <!--begin::Step 2-->
                <div class="" data-kt-stepper-element="content">
                  <!--begin::Wrapper-->
                  <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-10 pb-lg-10">
                      <!--begin::Title-->
                      <h2 class="fw-bold text-dark">Información Fiscal</h2>
                      <!--end::Title-->
                      <!--begin::Notice-->
                      <div class="text-muted fw-semibold fs-6"> Proporcione su información fiscal, cuide introducir los datos como se muestran en su constancia de situación fiscal </div>
                      <!--end::Notice-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row">
                      <label class="form-label mb-3">RFC</label>
                      <!--input type="text" class="form-control form-control-lg form-control-solid" name="txtRFC" autocomplete="off" /-->
                      <div class="input-group">
                        <input type="text" class="form-control form-control-solid" placeholder="Introduzca su RFC y haga click en el boton Autocompletar..." name="txtRFC" id="txtRFC" autocomplete="off">
                        <button type="button" class="btn btn-light-primary" onclick="autoCompletar();">
                            <span class="svg-icon svg-icon-2 ">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
                                </svg>
                            </span>
                            Autocompletar
                        </button>
                    </div>
                    </div>
                    <!--end::Input group-->
                    
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row">
                      <label class="form-label mb-3">Nombre ó Razón social</label>
                      <input type="text" class="form-control form-control-lg form-control-solid" name="txtRazonSocial" autocomplete="off" />
                    </div>
                    <!--end::Input group-->
                    
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                      <!--begin::Label-->
                      <label class="form-label required">Régimen Fiscal</label>
                      <!--end::Label-->
                      <!--begin::Input-->
                      <select name="cmbRegimenFiscal" id="cmbRegimenFiscal" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Seleccione su régimen fiscal..." data-allow-clear="true" data-hide-search="true" onchange="getUsoCFDI(this.value)">
                        <option></option>
                        @foreach($sat_regimen as $sr)
                        <option value="{{$sr->id}}">{{$sr->cve_regimen}} - {{$sr->desc_regimen}}</option>
                        @endforeach
                      </select>
                      <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Heading-->
                    <div class="pb-5 pb-lg-5">
                      <!--begin::Title-->
                      <h2 class="fw-bold text-dark">Domicilio Fiscal</h2>
                      <!--end::Title-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row">
                      <label class="form-label mb-3">Calle</label>
                      <input type="text" class="form-control form-control-lg form-control-solid" name="txtCalle" autocomplete="off" />
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-10 row">
                      <div class="col-6">
                        <label class="form-label mb-3">Núm. Exterior</label>
                        <input type="text" class="form-control form-control-lg form-control-solid" name="txtNumExt" autocomplete="off"/>
                      </div>
                      <div class="col-6">
                        <label class="form-label mb-3">Núm. Interior</label>
                        <input type="text" class="form-control form-control-lg form-control-solid" name="txtNumInt" autocomplete="off"/>
                      </div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row">
                      <label class="form-label mb-3">Colonia</label>
                      <input type="text" class="form-control form-control-lg form-control-solid" name="txtColonia" autocomplete="off"/>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-10 row">
                      <div class="col-6">
                        <label class="form-label mb-3">Ciudad</label>
                        <input type="text" class="form-control form-control-lg form-control-solid" name="txtCiudad" autocomplete="off"/>
                      </div>
                      <div class="col-6">
                        <label class="form-label mb-3">Estado</label>
                        <input type="text" class="form-control form-control-lg form-control-solid" name="txtEstado" autocomplete="off"/>
                      </div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row">
                      <div class="col-6">
                        <label class="form-label mb-3">Código Postal</label>
                        <input type="text" class="form-control form-control-lg form-control-solid" name="txtCodigoPostal" autocomplete="off"/>
                      </div>
                    </div>
                    <!--end::Input group-->
                  </div>
                  <!--end::Wrapper-->
                </div>
                <!--end::Step 2-->
                <!--begin::Step 3-->
                <div class="" data-kt-stepper-element="content">
                  <!--begin::Wrapper-->
                  <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-10 pb-lg-12">
                      <!--begin::Title-->
                      <h2 class="fw-bold text-dark">Ticket de Compra</h2>
                      <!--end::Title-->
                      <!--begin::Notice-->
                      <div class="text-muted fw-semibold fs-6"> Por favor, introduzca los datos solicitados a continuación. Si lo desea puede utilizar la <a href="{{asset('assets/ticket_sanchez.png')}}" class="link-primary fw-bold overlay" data-fslightbox=“lightbox-projects”>ayuda visual</a> para encontrar los datos del ticket </div>
                      <!--end::Notice-->
                    </div>
                    <!--end::Heading-->
                    <div class="factura">
                    <div class="row mb-10">
                      <div class="col-6">
                        <label class="form-label required">Número de tienda</label>
                        <input name="txtNumTienda" class="form-control form-control-lg form-control-solid ticket" autocomplete="off"/>
                      </div>
                      <div class="col-6">
                        <label class="form-label required">Número de caja</label>
                        <input name="txtNumCaja" class="form-control form-control-lg form-control-solid ticket" autocomplete="off"/>
                      </div>
                    </div>
                    <!--end::Input group-->
                    <div class="row mb-10">
                      <div class="col-6">
                        <label class="form-label required">Número de Ticket</label>
                        <input name="txtNumTicket" class="form-control form-control-lg form-control-solid ticket" autocomplete="off"/>
                      </div>
                      <div class="col-6">
                        <label class="form-label required">Monto de la compra</label>
                        <input name="txtMontoCompra" class="form-control form-control-lg form-control-solid ticket" autocomplete="off"/>
                      </div>
                    </div>                    
                    </div>

                    <div class="factura-tae">
                      <div class="row mb-10">
                        <div class="col-6">
                          <label class="form-label required">Número de Teléfono</label>
                          <input name="txtNumTelefono" id="txtNumTelefono" class="form-control form-control-lg form-control-solid ticket_tae" autocomplete="off"/>
                        </div>
                        <div class="col-6">
                          <label class="form-label required">Número de Autorización</label>
                          <input name="txtNumAutorizacion" id="txtNumAutorizacion" class="form-control form-control-lg form-control-solid ticket_tae" autocomplete="off"/>
                        </div>
                      </div> 
                    </div>

                    <div class="row mb-10">
                      <div class="col-6">
                        <label class="form-label required">Fecha de compra</label>
                        <input name="txtFechaCompra" class="form-control form-control-lg form-control-solid" autocomplete="off"/>
                      </div>
                    </div>
                    <!--begin::Input group-->
                    
                    <!--begin::Input group-->
                    <div class="row mb-10">
                      <!--begin::Label-->
                      <label class="form-label required">Uso del CFDI</label>
                      <!--end::Label-->
                      <!--begin::Input-->
                      <select name="cmbUsoCFDI" id="cmbUsoCFDI" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Seleccione una opción..." data-allow-clear="true" data-hide-search="true">
                        <option></option>
                        
                      </select>
                      <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                  </div>
                  <!--end::Wrapper-->
                </div>
                <!--end::Step 3-->
                <!--begin::Step 4-->
                <div class="" data-kt-stepper-element="content">
                  <!--begin::Wrapper-->
                  <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-10 pb-lg-15">
                      <!--begin::Title-->
                      <h2 class="fw-bold text-dark">Enviar Factura</h2>
                      <!--end::Title-->
                      <!--begin::Notice-->
                      <div class="text-muted fw-semibold fs-6"> Por favor proporcione una cuenta de correo electrónico. Enviaremos su factura a la dirección proporcionada </div>
                      <!--end::Notice-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-0">
                      <!--begin::Label-->
                      <label class="fs-6 fw-semibold form-label required">Correo Electrónico</label>
                      <!--end::Label-->
                      <!--begin::Input-->
                      <input name="txtCorreo" class="form-control form-control-lg form-control-solid" placeholder="minombre@correo.com" autocomplete="off"/>
                      <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                  </div>
                  <!--end::Wrapper-->
                </div>
                <!--end::Step 4-->
                <!--begin::Step 5-->
                <div class="" data-kt-stepper-element="content">
                  <!--begin::Wrapper-->
                  <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-8 pb-lg-10">
                      <!--begin::Title-->
                      <h2 class="fw-bold text-dark">¡Listo!</h2>
                      <!--end::Title-->
                      <!--begin::Notice-->
                      <div class="text-muted fw-semibold fs-6"> Gracias por utilizar este servicio </div>
                      <!--end::Notice-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Body-->
                    <div class="mb-0">
                      <!--begin::Text-->
                      <div class="fs-6 text-gray-600 mb-5"> Hemos recibido su solicitud con exito, en un lapso no mayor a 24 horas usted recibirá un mensaje en el correo electrónico que proporcionó. Si desea consultar el estatus de su solicitud haga click <a href="/cfdi/consulta" class="link-primary fw-bold">Aquí</a>
                      </div>
                      <!--end::Text-->
                    </div>
                    <!--end::Body-->
                  </div>
                  <!--end::Wrapper-->
                </div>
                <!--end::Step 5-->
                <!--begin::Actions-->
                <div class="d-flex flex-stack pt-15">
                  <div class="mr-2">
                    <button type="button" name="previousBtn" id="previousBtn" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                      <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                      <span class="svg-icon svg-icon-4 me-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor" />
                          <path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="currentColor" />
                        </svg>
                      </span>
                      <!--end::Svg Icon--> Regresar
                    </button>
                  </div>
                  <div>
                    <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
                      <span class="indicator-label"> Solicitar Factura
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                        <span class="svg-icon svg-icon-4 ms-2">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                            <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </span>
                      <span class="indicator-progress"> Por favor espere... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                      </span>
                    </button>
                    <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next"> Continuar
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
                  <a href="/" name="nuevoCFDI" id="nuevoCFDI" style="display:none" class="btn btn-lg btn-light-primary me-3" >
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
														<span class="svg-icon svg-icon-4 me-1">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor" />
																<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->Solicitar nuevo CFDI</a>
                </div>
                {{csrf_field()}}
                <!--end::Actions-->
              </form>
              <!--end::Form-->
            </div>
            <!--end::Wrapper-->
          </div>
          <!--end::Content-->
        </div>
        <!--end::Body-->
      </div>
      <!--end::Authentication - Multi-steps-->
    </div>
    <!--end::Root-->
    <!--begin::Javascript-->
    <script>
      var hostUrl = "/assets";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
    <script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{asset('assets/plugins/custom/fslightbox/fslightbox.bundle.js')}}"></script>
    <script src="{{asset('assets/js/custom/utilities/modals/request-invoice.js?v1.7')}}"></script>
    <script src="{{asset('assets/js/autofactura-gs/request-invoice.js?v1.7')}}"></script>
    <script>
    $(document).ready(()=>{
        $('[name="txtFechaCompra"]').flatpickr({
                enableTime: !0,
                dateFormat: "d/m/Y",
                maxDate:"today",
                enableTime: false,
                locale: {
        firstDayOfWeek: 1,
        weekdays: {
          shorthand: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
          longhand: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],         
        }, 
        months: {
          shorthand: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Оct', 'Nov', 'Dic'],
          longhand: ['Enero', 'Febrero', 'Мarzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        },
      }
            });
    })
</script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
  </body>
  <!--end::Body-->
</html>