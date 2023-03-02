<!DOCTYPE html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <title>Súper Sánchez - Facturación</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="{{asset('assets/media/logos/favicon.png')}}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{asset('/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
  </head>
  <!--end::Head-->

    <!--begin::Body-->
    <body  id="kt_body"  class="app-blank" >
       
        
        <!--begin::Root-->
<div class="d-flex flex-column flex-root" id="kt_app_root">
    

    <!--begin::Wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Header-->
        <div class="bg-body d-flex flex-column-auto justify-content-cenrer align-items-start gap-2 gap-lg-4 py-4 px-10 overflow-auto" id="kt_app_header_nav">
              
        </div>
        <!--end::Header-->

        <!--begin::Body-->
        <div class="scroll-y flex-column-fluid px-10 py-10"
            data-kt-scroll="true" 
            data-kt-scroll-activate="true" 
            data-kt-scroll-height="auto" 
            data-kt-scroll-dependencies="#kt_app_header_nav"  
            data-kt-scroll-offset="5px" 
            data-kt-scroll-save-state="true" 

            style="background-color:#D5D9E2; --kt-scrollbar-color: #d9d0cc; --kt-scrollbar-hover-color: #d9d0cc"
        >

        <!--begin::Email template-->      
		<style>
            html,body {
                padding:0;
                margin:0;
                font-family: Inter, Helvetica, "sans-serif";                                       
            }            

			a:hover {
                color: #009ef7;
            }
        </style>
        
        <div id="#kt_app_body_content" style="background-color:#D5D9E2; font-family:Arial,Helvetica,sans-serif; line-height: 1.5; min-height: 100%; font-weight: normal; font-size: 15px; color: #2F3044; margin:0; padding:0; width:100%;">
            <div style="background-color:#ffffff; padding: 45px 0 34px 0; border-radius: 24px; margin:40px auto; max-width: 600px;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" height="auto" style="border-collapse:collapse">
                    <tbody>                      
                        <tr>
                            <td align="center" valign="center" style="text-align:center; padding-bottom: 10px">
                                
    <!--begin:Email content-->
    <div style="margin-bottom:55px; text-align:left">
        <!--begin:Logo-->
        <div style="margin:10px 60px 54px 60px; text-align:center;">
            <a href="http://supersanchez.com" rel="noopener" target="_blank">
            <img alt="SuperSanchezLogo" src="{{asset('assets/logo.png')}}" style="height: 35px" />
            </a>
        </div>
        <!--end:Logo-->                            

        <!--begin:Text-->
        <div style="font-size: 14px; text-align:center; font-weight: 500; margin:0 60px 38px 60px; font-family:Arial,Helvetica,sans-serif">
            <p style="color:#181C32; font-size: 30px; font-weight:700; line-height:1.4; margin-bottom:6px">
                ¡Hemos recibido su solicitud!            </p>
            
                      
        </div>  
        <!--end:Text--> 
 
        <!--begin:Media-->
        <div style="margin:0 60px 38px 60px">
            <img alt="" style="width:100%" src="{{asset('assets/media/email/img-2.png')}}"/> 
        </div>     
        <!--end:Media-->  
        
        <!--begin:Text-->
        <div style="font-size:14px; text-align:left; font-weight:500; margin:0 60px 33px 60px; font-family:Arial,Helvetica,sans-serif">
            <p style="color:#181C32; font-size: 18px; font-weight:600; margin-bottom:27px">
                {{$facturacion->razon_social}},
            </p>            

            <p style="color:#3F4254; line-height:1.6">
                Hola, le informamos que hemos recibido su solicitud con exito, en un lapso no mayor a 24 horas usted recibirá un mensaje en el correo electrónico que proporcionó. Si desea consultar el estatus de su solicitud haga click en el botón "Consultar Estatus"
            </p> 
            <p style="margin-bottom:2px; color:#5E6278">Si tiene dudas por favor comuniquese al: <span style="color:red; font-weight: 600">+52 6 3344 55 56</span>
        </div>  
        <!--end:Text-->
         
        <!--begin:Action-->
        <a href="{{route('consulta-cfdi')}}" target="_blank" style="text-decoration:none;background-color:#004A9A; border-radius:6px; display:inline-block; margin-left:60px; padding:11px 19px; color: #FFFFFF; font-size: 14px; font-weight:500; font-family:Arial,Helvetica,sans-serif">
            Consultar Estatus
        </a> 
        <!--end:Action-->        
    </div>
    <!--end:Email content-->    
                            </td>
                        </tr>  

                         
                        <tr style="display: flex; justify-content: center; margin:0 60px 35px 60px">
                    <td align="start" valign="start" style="padding-bottom: 10px;">
                      <p style="color:#181C32; font-size: 18px; font-weight: 600; margin-bottom:13px">Datos de facturación:</p>
                      <!--begin::Wrapper-->
                      <div style="background: #F9F9F9; border-radius: 12px; padding:35px 30px">
                        <!--begin::Item-->
                        <div style="display:flex">
                          <!--begin::Media-->
                          <div style="display: flex; justify-content: center; align-items: center; width:40px; height:40px; margin-right:13px">
                            <span style="position: absolute">
                              <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                              <span class="svg-icon svg-icon-3 svg-icon-success">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path opacity="0.3" d="M18 10V20C18 20.6 18.4 21 19 21C19.6 21 20 20.6 20 20V10H18Z" fill="currentColor" />
                                  <path opacity="0.3" d="M11 10V17H6V10H4V20C4 20.6 4.4 21 5 21H12C12.6 21 13 20.6 13 20V10H11Z" fill="currentColor" />
                                  <path opacity="0.3" d="M10 10C10 11.1 9.1 12 8 12C6.9 12 6 11.1 6 10H10Z" fill="currentColor" />
                                  <path opacity="0.3" d="M18 10C18 11.1 17.1 12 16 12C14.9 12 14 11.1 14 10H18Z" fill="currentColor" />
                                  <path opacity="0.3" d="M14 4H10V10H14V4Z" fill="currentColor" />
                                  <path opacity="0.3" d="M17 4H20L22 10H18L17 4Z" fill="currentColor" />
                                  <path opacity="0.3" d="M7 4H4L2 10H6L7 4Z" fill="currentColor" />
                                  <path d="M6 10C6 11.1 5.1 12 4 12C2.9 12 2 11.1 2 10H6ZM10 10C10 11.1 10.9 12 12 12C13.1 12 14 11.1 14 10H10ZM18 10C18 11.1 18.9 12 20 12C21.1 12 22 11.1 22 10H18ZM19 2H5C4.4 2 4 2.4 4 3V4H20V3C20 2.4 19.6 2 19 2ZM12 17C12 16.4 11.6 16 11 16H6C5.4 16 5 16.4 5 17C5 17.6 5.4 18 6 18H11C11.6 18 12 17.6 12 17Z" fill="currentColor" />
                                </svg>
                              </span>
                              <!--end::Svg Icon-->
                            </span>
                          </div>
                          <!--end::Media-->
                          <!--begin::Block-->
                          <div>
                            <!--begin::Content-->
                            <div>
                              <!--begin::Title-->
                              <a href="#" style="text-decoration:none;color:#181C32; font-size: 14px; font-weight: 600;font-family:Arial,Helvetica,sans-serif">Número de Tienda</a>
                              <!--end::Title-->
                              <!--begin::Desc-->
                              <p style="text-decoration:none;color:#5E6278; font-size: 13px; font-weight: 500; padding-top:3px; margin:0;font-family:Arial,Helvetica,sans-serif">{{$facturacion->num_tienda}}</p>
                              <!--end::Desc-->
                            </div>
                            <!--end::Content-->
                            <div class="separator separator-dashed" style="margin:17px 0 15px 0"></div>
                            <!--end::Separator-->
                          </div>
                          <!--end::Block-->
                        </div>
                        <!--end::Item-->
                        <div style="display:flex">
                          <!--begin::Media-->
                          <div style="display: flex; justify-content: center; align-items: center; width:40px; height:40px; margin-right:13px">
                            <span style="position: absolute">
                              <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                              <span class="svg-icon svg-icon-3 svg-icon-success">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M2 16C2 16.6 2.4 17 3 17H21C21.6 17 22 16.6 22 16V15H2V16Z" fill="currentColor" />
                                  <path opacity="0.3" d="M21 3H3C2.4 3 2 3.4 2 4V15H22V4C22 3.4 21.6 3 21 3Z" fill="currentColor" />
                                  <path opacity="0.3" d="M15 17H9V20H15V17Z" fill="currentColor" />
                                </svg>
                              </span>
                              <!--end::Svg Icon-->
                            </span>
                          </div>
                          <!--end::Media-->
                          <!--begin::Block-->
                          <div>
                            <!--begin::Content-->
                            <div>
                              <!--begin::Title-->
                              <a href="#" style="text-decoration:none;color:#181C32; font-size: 14px; font-weight: 600;font-family:Arial,Helvetica,sans-serif">Número de Caja</a>
                              <!--end::Title-->
                              <!--begin::Desc-->
                              <p style="text-decoration:none;color:#5E6278; font-size: 13px; font-weight: 500; padding-top:3px; margin:0;font-family:Arial,Helvetica,sans-serif">{{$facturacion->num_caja}}</p>
                              <!--end::Desc-->
                            </div>
                            <!--end::Content-->
                            <div class="separator separator-dashed" style="margin:17px 0 15px 0"></div>
                            <!--end::Separator-->
                          </div>
                          <!--end::Block-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div style="display:flex">
                          <!--begin::Media-->
                          <div style="display: flex; justify-content: center; align-items: center; width:40px; height:40px; margin-right:13px">
                            <span style="position: absolute">
                              <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                              <span class="svg-icon svg-icon-3 svg-icon-success">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path opacity="0.3" d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z" fill="currentColor"></path>
                                  <path d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z" fill="currentColor"></path>
                                  <path d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z" fill="currentColor"></path>
                                </svg>
                              </span>
                              <!--end::Svg Icon-->
                            </span>
                          </div>
                          <!--end::Media-->
                          <!--begin::Block-->
                          <div>
                            <!--begin::Content-->
                            <div>
                              <!--begin::Title-->
                              <a href="#" style="text-decoration:none;color:#181C32; font-size: 14px; font-weight: 600;font-family:Arial,Helvetica,sans-serif">Número de ticket</a>
                              <!--end::Title-->
                              <!--begin::Desc-->
                              <p style="text-decoration:none;color:#5E6278; font-size: 13px; font-weight: 500; padding-top:3px; margin:0;font-family:Arial,Helvetica,sans-serif">{{$facturacion->num_ticket}}</p>
                              <!--end::Desc-->
                            </div>
                            <!--end::Content-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed" style="margin:17px 0 15px 0"></div>
                            <!--end::Separator-->
                          </div>
                          <!--end::Block-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div style="display:flex">
                          <!--begin::Media-->
                          <div style="display: flex; justify-content: center; align-items: center; width:40px; height:40px; margin-right:13px">
                            <span style="position: absolute">
                              <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                              <span class="svg-icon svg-icon-3 svg-icon-success">
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path opacity="0.3" d="M19 3.40002C18.4 3.40002 18 3.80002 18 4.40002V8.40002H14V4.40002C14 3.80002 13.6 3.40002 13 3.40002C12.4 3.40002 12 3.80002 12 4.40002V8.40002H8V4.40002C8 3.80002 7.6 3.40002 7 3.40002C6.4 3.40002 6 3.80002 6 4.40002V8.40002H2V4.40002C2 3.80002 1.6 3.40002 1 3.40002C0.4 3.40002 0 3.80002 0 4.40002V19.4C0 20 0.4 20.4 1 20.4H19C19.6 20.4 20 20 20 19.4V4.40002C20 3.80002 19.6 3.40002 19 3.40002ZM18 10.4V13.4H14V10.4H18ZM12 10.4V13.4H8V10.4H12ZM12 15.4V18.4H8V15.4H12ZM6 10.4V13.4H2V10.4H6ZM2 15.4H6V18.4H2V15.4ZM14 18.4V15.4H18V18.4H14Z" fill="currentColor"></path>
                                  <path d="M19 0.400024H1C0.4 0.400024 0 0.800024 0 1.40002V4.40002C0 5.00002 0.4 5.40002 1 5.40002H19C19.6 5.40002 20 5.00002 20 4.40002V1.40002C20 0.800024 19.6 0.400024 19 0.400024Z" fill="currentColor"></path>
                                </svg>
                              </span>
                              <!--end::Svg Icon-->
                            </span>
                          </div>
                          <!--end::Media-->
                          <!--begin::Block-->
                          <div>
                            <!--begin::Content-->
                            <div>
                              <!--begin::Title-->
                              <a href="#" style="text-decoration:none;color:#181C32; font-size: 14px; font-weight: 600;font-family:Arial,Helvetica,sans-serif">Fecha de compra</a>
                              <!--end::Title-->
                              <!--begin::Desc-->
                              <p style="color:#5E6278; font-size: 13px; font-weight: 500; padding-top:3px; margin:0;font-family:Arial,Helvetica,sans-serif">{{$facturacion->fecha_ticket}}</p>
                              <!--end::Desc-->
                            </div>
                            <!--end::Content-->
                          </div>
                          <!--end::Block-->
                        </div>
                        <!--end::Item-->
                    
                        <!--begin::Item-->
                        <div style="display:flex">
                          <!--begin::Media-->
                          <div style="display: flex; justify-content: center; align-items: center; width:40px; height:40px; margin-right:13px">
                            <span style="position: absolute">
                              <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                              <span class="svg-icon svg-icon-3 svg-icon-success">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path opacity="0.3" d="M12.5 22C11.9 22 11.5 21.6 11.5 21V3C11.5 2.4 11.9 2 12.5 2C13.1 2 13.5 2.4 13.5 3V21C13.5 21.6 13.1 22 12.5 22Z" fill="currentColor"></path>
                                  <path d="M17.8 14.7C17.8 15.5 17.6 16.3 17.2 16.9C16.8 17.6 16.2 18.1 15.3 18.4C14.5 18.8 13.5 19 12.4 19C11.1 19 10 18.7 9.10001 18.2C8.50001 17.8 8.00001 17.4 7.60001 16.7C7.20001 16.1 7 15.5 7 14.9C7 14.6 7.09999 14.3 7.29999 14C7.49999 13.8 7.80001 13.6 8.20001 13.6C8.50001 13.6 8.69999 13.7 8.89999 13.9C9.09999 14.1 9.29999 14.4 9.39999 14.7C9.59999 15.1 9.8 15.5 10 15.8C10.2 16.1 10.5 16.3 10.8 16.5C11.2 16.7 11.6 16.8 12.2 16.8C13 16.8 13.7 16.6 14.2 16.2C14.7 15.8 15 15.3 15 14.8C15 14.4 14.9 14 14.6 13.7C14.3 13.4 14 13.2 13.5 13.1C13.1 13 12.5 12.8 11.8 12.6C10.8 12.4 9.99999 12.1 9.39999 11.8C8.69999 11.5 8.19999 11.1 7.79999 10.6C7.39999 10.1 7.20001 9.39998 7.20001 8.59998C7.20001 7.89998 7.39999 7.19998 7.79999 6.59998C8.19999 5.99998 8.80001 5.60005 9.60001 5.30005C10.4 5.00005 11.3 4.80005 12.3 4.80005C13.1 4.80005 13.8 4.89998 14.5 5.09998C15.1 5.29998 15.6 5.60002 16 5.90002C16.4 6.20002 16.7 6.6 16.9 7C17.1 7.4 17.2 7.69998 17.2 8.09998C17.2 8.39998 17.1 8.7 16.9 9C16.7 9.3 16.4 9.40002 16 9.40002C15.7 9.40002 15.4 9.29995 15.3 9.19995C15.2 9.09995 15 8.80002 14.8 8.40002C14.6 7.90002 14.3 7.49995 13.9 7.19995C13.5 6.89995 13 6.80005 12.2 6.80005C11.5 6.80005 10.9 7.00005 10.5 7.30005C10.1 7.60005 9.79999 8.00002 9.79999 8.40002C9.79999 8.70002 9.9 8.89998 10 9.09998C10.1 9.29998 10.4 9.49998 10.6 9.59998C10.8 9.69998 11.1 9.90002 11.4 9.90002C11.7 10 12.1 10.1 12.7 10.3C13.5 10.5 14.2 10.7 14.8 10.9C15.4 11.1 15.9 11.4 16.4 11.7C16.8 12 17.2 12.4 17.4 12.9C17.6 13.4 17.8 14 17.8 14.7Z" fill="currentColor"></path>
                                </svg>
                              </span>
                              <!--end::Svg Icon-->
                            </span>
                          </div>
                          <!--end::Media-->
                          <!--begin::Block-->
                          <div>
                            <!--begin::Content-->
                            <div>
                              <!--begin::Title-->
                              <a href="#" style="text-decoration:none;color:#181C32; font-size: 14px; font-weight: 600;font-family:Arial,Helvetica,sans-serif">Monto de compra</a>
                              <!--end::Title-->
                              <!--begin::Desc-->
                              <p style="color:#5E6278; font-size: 13px; font-weight: 500; padding-top:3px; margin:0;font-family:Arial,Helvetica,sans-serif">{{number_format($facturacion->monto_compra,2)}}</p>
                              <!--end::Desc-->
                            </div>
                            <!--end::Content-->
                          </div>
                          <!--end::Block-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div style="display:flex">
                          <!--begin::Media-->
                          <div style="display: flex; justify-content: center; align-items: center; width:40px; height:40px; margin-right:13px">
                            <span style="position: absolute">
                              <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                              <span class="svg-icon svg-icon-3 svg-icon-success">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="currentColor"/>
                                <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="currentColor"/>
                                </svg>
                              </span>
                              <!--end::Svg Icon-->
                            </span>
                          </div>
                          <!--end::Media-->
                          <!--begin::Block-->
                          <div>
                            <!--begin::Content-->
                            <div>
                              <!--begin::Title-->
                              <a href="#" style="text-decoration:none;color:#181C32; font-size: 14px; font-weight: 600;font-family:Arial,Helvetica,sans-serif">Razón social</a>
                              <!--end::Title-->
                              <!--begin::Desc-->
                              <p style="color:#5E6278; font-size: 13px; font-weight: 500; padding-top:3px; margin:0;font-family:Arial,Helvetica,sans-serif">{{$facturacion->razon_social}}</p>
                              <!--end::Desc-->
                            </div>
                            <!--end::Content-->
                          </div>
                          <!--end::Block-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div style="display:flex">
                          <!--begin::Media-->
                          <div style="display: flex; justify-content: center; align-items: center; width:40px; height:40px; margin-right:13px">
                            <span style="position: absolute">
                              <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                              <span class="svg-icon svg-icon-3 svg-icon-success">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M21 10.7192H3C2.4 10.7192 2 11.1192 2 11.7192C2 12.3192 2.4 12.7192 3 12.7192H6V14.7192C6 18.0192 8.7 20.7192 12 20.7192C15.3 20.7192 18 18.0192 18 14.7192V12.7192H21C21.6 12.7192 22 12.3192 22 11.7192C22 11.1192 21.6 10.7192 21 10.7192Z" fill="currentColor"/>
                                <path d="M11.6 21.9192C11.4 21.9192 11.2 21.8192 11 21.7192C10.6 21.4192 10.5 20.7191 10.8 20.3191C11.7 19.1191 12.3 17.8191 12.7 16.3191C12.8 15.8191 13.4 15.4192 13.9 15.6192C14.4 15.7192 14.8 16.3191 14.6 16.8191C14.2 18.5191 13.4 20.1192 12.4 21.5192C12.2 21.7192 11.9 21.9192 11.6 21.9192ZM8.7 19.7192C10.2 18.1192 11 15.9192 11 13.7192V8.71917C11 8.11917 11.4 7.71917 12 7.71917C12.6 7.71917 13 8.11917 13 8.71917V13.0192C13 13.6192 13.4 14.0192 14 14.0192C14.6 14.0192 15 13.6192 15 13.0192V8.71917C15 7.01917 13.7 5.71917 12 5.71917C10.3 5.71917 9 7.01917 9 8.71917V13.7192C9 15.4192 8.4 17.1191 7.2 18.3191C6.8 18.7191 6.9 19.3192 7.3 19.7192C7.5 19.9192 7.7 20.0192 8 20.0192C8.3 20.0192 8.5 19.9192 8.7 19.7192ZM6 16.7192C6.5 16.7192 7 16.2192 7 15.7192V8.71917C7 8.11917 7.1 7.51918 7.3 6.91918C7.5 6.41918 7.2 5.8192 6.7 5.6192C6.2 5.4192 5.59999 5.71917 5.39999 6.21917C5.09999 7.01917 5 7.81917 5 8.71917V15.7192V15.8191C5 16.3191 5.5 16.7192 6 16.7192ZM9 4.71917C9.5 4.31917 10.1 4.11918 10.7 3.91918C11.2 3.81918 11.5 3.21917 11.4 2.71917C11.3 2.21917 10.7 1.91916 10.2 2.01916C9.4 2.21916 8.59999 2.6192 7.89999 3.1192C7.49999 3.4192 7.4 4.11916 7.7 4.51916C7.9 4.81916 8.2 4.91918 8.5 4.91918C8.6 4.91918 8.8 4.81917 9 4.71917ZM18.2 18.9192C18.7 17.2192 19 15.5192 19 13.7192V8.71917C19 5.71917 17.1 3.1192 14.3 2.1192C13.8 1.9192 13.2 2.21917 13 2.71917C12.8 3.21917 13.1 3.81916 13.6 4.01916C15.6 4.71916 17 6.61917 17 8.71917V13.7192C17 15.3192 16.8 16.8191 16.3 18.3191C16.1 18.8191 16.4 19.4192 16.9 19.6192C17 19.6192 17.1 19.6192 17.2 19.6192C17.7 19.6192 18 19.3192 18.2 18.9192Z" fill="currentColor"/>
                                </svg>
                              </span>
                              <!--end::Svg Icon-->
                            </span>
                          </div>
                          <!--end::Media-->
                          <!--begin::Block-->
                          <div>
                            <!--begin::Content-->
                            <div>
                              <!--begin::Title-->
                              <a href="#" style="text-decoration:none;color:#181C32; font-size: 14px; font-weight: 600;font-family:Arial,Helvetica,sans-serif">RFC</a>
                              <!--end::Title-->
                              <!--begin::Desc-->
                              <p style="color:#5E6278; font-size: 13px; font-weight: 500; padding-top:3px; margin:0;font-family:Arial,Helvetica,sans-serif">{{$facturacion->rfc}}</p>
                              <!--end::Desc-->
                            </div>
                            <!--end::Content-->
                          </div>
                          <!--end::Block-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div style="display:flex">
                          <!--begin::Media-->
                          <div style="display: flex; justify-content: center; align-items: center; width:40px; height:40px; margin-right:13px">
                            <span style="position: absolute">
                              <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                              <span class="svg-icon svg-icon-3 svg-icon-success">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.5 11C8.98528 11 11 8.98528 11 6.5C11 4.01472 8.98528 2 6.5 2C4.01472 2 2 4.01472 2 6.5C2 8.98528 4.01472 11 6.5 11Z" fill="currentColor"/>
                                <path opacity="0.3" d="M13 6.5C13 4 15 2 17.5 2C20 2 22 4 22 6.5C22 9 20 11 17.5 11C15 11 13 9 13 6.5ZM6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22ZM17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22Z" fill="currentColor"/>
                                </svg>
                              </span>
                              <!--end::Svg Icon-->
                            </span>
                          </div>
                          <!--end::Media-->
                          <!--begin::Block-->
                          <div>
                            <!--begin::Content-->
                            <div>
                              <!--begin::Title-->
                              <a href="#" style="text-decoration:none;color:#181C32; font-size: 14px; font-weight: 600;font-family:Arial,Helvetica,sans-serif">Régimen Fiscal</a>
                              <!--end::Title-->
                              <!--begin::Desc-->
                              <p style="color:#5E6278; font-size: 13px; font-weight: 500; padding-top:3px; margin:0;font-family:Arial,Helvetica,sans-serif">{{$facturacion->regimen->cve_regimen}} - {{$facturacion->regimen->desc_regimen}}</p>
                              <!--end::Desc-->
                            </div>
                            <!--end::Content-->
                          </div>
                          <!--end::Block-->
                        </div>
                        <!--end::Item-->
                      </div>
                      <!--end::Wrapper-->
                      
                    </td>
                  </tr>
                  <tr>
                    <td align="center" valign="center" style="text-align:center; padding-bottom: 20px;">
                      <a href="#" style="text-decoration:none;margin-right:10px">
                        <img alt="Logo" src="{{asset('assets/media/email/icon-linkedin.svg')}}" />
                      </a>
                      <a href="#" style="text-decoration:none;margin-right:10px">
                        <img alt="Logo" src="{{asset('assets/media/email/icon-dribbble.svg')}}" />
                      </a>
                      <a href="#" style="text-decoration:none;margin-right:10px">
                        <img alt="Logo" src="{{asset('assets/media')}}/email/icon-facebook.svg" />
                      </a>
                      <a href="#" style="text-decoration:none;">
                        <img alt="Logo" src="{{asset('assets/media/email/icon-twitter.svg')}}" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td align="center" valign="center" style="font-size: 13px; padding:0 15px; text-align:center; font-weight: 500; color: #A1A5B7;font-family:Arial,Helvetica,sans-serif">
                      <p> &copy Copyright Súper Sánchez. </p>
                    </td>
                  </tr>
                    </tbody>   
                </table> 
            </div>
        </div>
        <!--end::Email template-->

        </div>
        <!--end::Body-->
    </div>
    <!--end::Wrapper-->

 </div>
<!--end::Root-->
        
        <!--begin::Javascript-->
        <script>
            var hostUrl = "assets/";        </script>

                    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
                            <script src="assets/plugins/global/plugins.bundle.js"></script>
                            <script src="assets/js/scripts.bundle.js"></script>
                        <!--end::Global Javascript Bundle-->
        
        
                <!--end::Javascript-->
        
            </body>
    <!--end::Body-->
</html>