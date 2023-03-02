@php
use App\Traits\Common;
@endphp
@extends('layouts.layout')

@section('pageTitle') 
<div class="app-container  container-fluid d-flex flex-stack ">


<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
  <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">{{Session::get('ACCOUNT_CENTRO')}} - {{Session::get('ACCOUNT_NOMBRE_CENTRO')}}</h1>
  <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
    <li class="breadcrumb-item text-muted">
      <a href="/" class="text-muted text-hover-primary">CFDI</a>
    </li>
    <li class="breadcrumb-item">
      <span class="bullet bg-gray-400 w-5px h-2px"></span>
    </li>
    <li class="breadcrumb-item text-muted">Información del documento</li>
  </ul>
</div>
<div class="d-flex align-items-center gap-2 gap-lg-3">
    
    
    <!--begin::Secondary button-->
            <a href="#" class="btn btn-sm fw-bold btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">
            Facturar & Cargar      
            </a>
            <div class="m-0" data-select2-id="select2-data-122-9q4o">
            <!--begin::Menu toggle-->
            <a href="#" class="btn btn-sm btn-flex btn-light-danger fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
<span class="svg-icon svg-icon-6 svg-icon-muted me-1">
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.3" d="M12 10.6L14.8 7.8C15.2 7.4 15.8 7.4 16.2 7.8C16.6 8.2 16.6 8.80002 16.2 9.20002L13.4 12L12 10.6ZM10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 8.99999 16.4 9.19999 16.2L12 13.4L10.6 12Z" fill="currentColor"/>
<path d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM13.4 12L16.2 9.20001C16.6 8.80001 16.6 8.19999 16.2 7.79999C15.8 7.39999 15.2 7.39999 14.8 7.79999L12 10.6L9.2 7.79999C8.8 7.39999 8.2 7.39999 7.8 7.79999C7.4 8.19999 7.4 8.80001 7.8 9.20001L10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 9 16.4 9.2 16.2L12 13.4L14.8 16.2C15 16.4 15.3 16.5 15.5 16.5C15.7 16.5 16 16.4 16.2 16.2C16.6 15.8 16.6 15.2 16.2 14.8L13.4 12Z" fill="currentColor"/>
</svg>
</span>
<!--end::Svg Icon-->               
                Declinar solicitud
            </a>
            <!--end::Menu toggle-->
            
            

<!--begin::Menu 1-->
<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_63dcbccf1991b" data-select2-id="select2-data-kt_menu_63dcbccf1991b" style="">
    <!--begin::Header-->
    <div class="px-7 py-5">
        <div class="fs-5 text-dark fw-bold">Declinar solicitud</div>
    </div>
    <!--end::Header-->

    <!--begin::Menu separator-->
    <div class="separator border-gray-200"></div>
    <!--end::Menu separator-->

    <!--begin::Form-->
    <div class="px-7 py-5" data-select2-id="select2-data-121-f5mf">
        <!--begin::Input group-->
        <div class="mb-10" data-select2-id="select2-data-120-q15c">
            <!--begin::Label-->
            <label class="form-label fw-semibold">Motivo:</label>
            <!--end::Label-->

            <div>
                <select class="form-select form-select-solid" name="cmbMotivo" id="cmbMotivo">
                  @foreach($motivos as $m)
                    <option value="{{$m->id}}">{{$m->motivo}}</option>
                  @endforeach
                </select>
            </div>
        </div>
        <!--end::Input group-->
        <!--begin::Actions-->
        <div class="d-flex justify-content-end">
            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Cancelar</button>

            <button type="submit" name="btnDeclinar"
              @if(in_array($facturacion->estatus_id,[1,2])) 
               class="btn btn-sm fw-bold btn-light-primary"
               onclick="declinarSolicitud({{$facturacion->id}},cmbMotivo.value);"
              @else
               class="btn btn-sm btn-light" disable
              @endif 
              data-kt-menu-dismiss="true" >Confirmar</button>
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Form-->
</div>

</div>

  <a href="/manager/main" class="btn btn-sm fw-bold btn-primary" >
    Regresar     
  </a>
</div>
</div>
@endsection 

@section('container')
@csrf
<div class="d-flex flex-column flex-xl-row">
<div class="flex-column flex-lg-row-auto w-150 w-xl-350px mb-10">
        
<!--begin::Card-->
<div class="card mb-5 mb-xl-8">
    <!--begin::Card body-->
    <div class="card-body pt-15">
        <!--begin::Summary-->
        <div class="d-flex flex-center flex-column mb-5">
            <!--begin::Avatar-->
            <div class="symbol symbol-150px symbol-circle mb-7">
                <img src="/assets/tia-sanchez.png" alt="image">
            </div>
            <!--end::Avatar-->

            <!--begin::Name-->
            <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-1">
                {{ucwords(strtolower($facturacion->razon_social))}}           </a>
            <!--end::Name-->

            <!--begin::Email-->
            <a href="#" class="fs-5 fw-semibold text-muted text-hover-primary mb-6">
            {{strtolower($facturacion->correo_electronico)}}           </a>
            <!--end::Email-->
        </div>
        <!--end::Summary-->

        <!--begin::Details toggle-->
        <div class="d-flex flex-stack fs-4 py-3">
            <div class="fw-bold">
                Datos fiscales
            </div>

           
        </div>
        <!--end::Details toggle-->

        <div class="separator separator-dashed my-3"></div>

        <!--begin::Details content-->
        <div class="pb-5 fs-6">
                            <!--begin::Details item-->
                <div class="fw-bold mt-5">RFC</div>
                <div class="text-gray-600">{{(strtoupper($facturacion->rfc))}}</div>
                <!--begin::Details item-->
                            <!--begin::Details item-->
                <div class="fw-bold mt-5">Regímen Fiscal</div>
                <div class="text-gray-600"><a href="#" class="text-gray-600 text-hover-primary"> {{$facturacion->regimen->cve_regimen}} - {{$facturacion->regimen->desc_regimen}}</a></div>

                <div class="fw-bold mt-5">Uso del CFDI</div>
                <div class="text-gray-600"><a href="#" class="text-gray-600 text-hover-primary"> {{$facturacion->usoCfdi->cve_uso_cfdi}} - {{$facturacion->usoCfdi->desc_uso_cfdi}}</a></div>
                <!--begin::Details item-->
                            <!--begin::Details item-->
                <div class="fw-bold mt-5">Dirección</div>
                <div class="text-gray-600">Calle: {{$facturacion->calle}}, <br>Núm Exterior: {{$facturacion->num_exterior}}, Núm Interior: {{$facturacion->num_interior}}<br>Colonia: {{$facturacion->colonia}}</div>
                <!--begin::Details item-->
                            <!--begin::Details item-->
                
                <div class="fw-bold mt-5">Ciudad</div>
                <div class="text-gray-600">{{$facturacion->ciudad}}, {{$facturacion->estado}}</div>
                <!--begin::Details item-->
                            <!--begin::Details item-->
                <div class="fw-bold mt-5">Código Postal</div>
                <div class="text-gray-600"><a href="/manager/main" class="text-gray-600 text-hover-primary">{{$facturacion->codigo_postal}}</a> </div>
                <!--begin::Details item-->
                    </div>
        <!--end::Details content-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Card-->    </div>
<div class="flex-lg-row-fluid ms-lg-15">
<div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
  <div class="card card-flush py-4 flex-row-fluid">
    <div class="card-header">
      <div class="card-title">
        <h2>Ticket de compra</h2>
      </div>
      <div class="card-toolbar">
      <div class="badge badge-lg badge-light-gray text-gray-600">Solicitud: </div> @php echo Common::labelEstatus($facturacion->estatus_id) @endphp
        </div>
      
    </div>
    <div class="card-body pt-0">
      <div class="table-responsive">
        <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
          <tbody class="fw-semibold text-gray-600">
            
            <tr>
              <td class="text-muted">
                <div class="d-flex align-items-center">
                  <span class="svg-icon svg-icon-2 me-2">
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.3" d="M19 3.40002C18.4 3.40002 18 3.80002 18 4.40002V8.40002H14V4.40002C14 3.80002 13.6 3.40002 13 3.40002C12.4 3.40002 12 3.80002 12 4.40002V8.40002H8V4.40002C8 3.80002 7.6 3.40002 7 3.40002C6.4 3.40002 6 3.80002 6 4.40002V8.40002H2V4.40002C2 3.80002 1.6 3.40002 1 3.40002C0.4 3.40002 0 3.80002 0 4.40002V19.4C0 20 0.4 20.4 1 20.4H19C19.6 20.4 20 20 20 19.4V4.40002C20 3.80002 19.6 3.40002 19 3.40002ZM18 10.4V13.4H14V10.4H18ZM12 10.4V13.4H8V10.4H12ZM12 15.4V18.4H8V15.4H12ZM6 10.4V13.4H2V10.4H6ZM2 15.4H6V18.4H2V15.4ZM14 18.4V15.4H18V18.4H14Z" fill="currentColor"></path>
                      <path d="M19 0.400024H1C0.4 0.400024 0 0.800024 0 1.40002V4.40002C0 5.00002 0.4 5.40002 1 5.40002H19C19.6 5.40002 20 5.00002 20 4.40002V1.40002C20 0.800024 19.6 0.400024 19 0.400024Z" fill="currentColor"></path>
                    </svg>
                  </span> Fecha de compra
                </div>
              </td>
              <td class="fw-bold text-end">{{date('d/m/Y',strtotime($facturacion->fecha_ticket))}}</td>
            </tr>
            <tr>
              <td class="text-muted">
                <div class="d-flex align-items-center">
                  <span class="svg-icon svg-icon-2 me-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.3" d="M3.20001 5.91897L16.9 3.01895C17.4 2.91895 18 3.219 18.1 3.819L19.2 9.01895L3.20001 5.91897Z" fill="currentColor"></path>
                      <path opacity="0.3" d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21C21.6 10.9189 22 11.3189 22 11.9189V15.9189C22 16.5189 21.6 16.9189 21 16.9189H16C14.3 16.9189 13 15.6189 13 13.9189ZM16 12.4189C15.2 12.4189 14.5 13.1189 14.5 13.9189C14.5 14.7189 15.2 15.4189 16 15.4189C16.8 15.4189 17.5 14.7189 17.5 13.9189C17.5 13.1189 16.8 12.4189 16 12.4189Z" fill="currentColor"></path>
                      <path d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21V7.91895C21 6.81895 20.1 5.91895 19 5.91895H3C2.4 5.91895 2 6.31895 2 6.91895V20.9189C2 21.5189 2.4 21.9189 3 21.9189H19C20.1 21.9189 21 21.0189 21 19.9189V16.9189H16C14.3 16.9189 13 15.6189 13 13.9189Z" fill="currentColor"></path>
                    </svg>
                  </span> Núm. Caja
                </div>
              </td>
              <td class="fw-bold text-end"> {{$facturacion->num_caja}} 
              </td>
            </tr>
            <tr>
              <td class="text-muted">
                <div class="d-flex align-items-center">
                <span class="svg-icon svg-icon-2 me-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.3" d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z" fill="currentColor"></path>
                      <path d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z" fill="currentColor"></path>
                      <path d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z" fill="currentColor"></path>
                    </svg>
                  </span> Núm Ticket
                </div>
              </td>
              <td class="fw-bold text-end">{{$facturacion->num_ticket}}</td>
            </tr>
            <tr>
              <td class="text-muted">
                <div class="d-flex align-items-center">
                <span class="svg-icon svg-icon-2 me-2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.3" d="M12.5 22C11.9 22 11.5 21.6 11.5 21V3C11.5 2.4 11.9 2 12.5 2C13.1 2 13.5 2.4 13.5 3V21C13.5 21.6 13.1 22 12.5 22Z" fill="currentColor"/>
<path d="M17.8 14.7C17.8 15.5 17.6 16.3 17.2 16.9C16.8 17.6 16.2 18.1 15.3 18.4C14.5 18.8 13.5 19 12.4 19C11.1 19 10 18.7 9.10001 18.2C8.50001 17.8 8.00001 17.4 7.60001 16.7C7.20001 16.1 7 15.5 7 14.9C7 14.6 7.09999 14.3 7.29999 14C7.49999 13.8 7.80001 13.6 8.20001 13.6C8.50001 13.6 8.69999 13.7 8.89999 13.9C9.09999 14.1 9.29999 14.4 9.39999 14.7C9.59999 15.1 9.8 15.5 10 15.8C10.2 16.1 10.5 16.3 10.8 16.5C11.2 16.7 11.6 16.8 12.2 16.8C13 16.8 13.7 16.6 14.2 16.2C14.7 15.8 15 15.3 15 14.8C15 14.4 14.9 14 14.6 13.7C14.3 13.4 14 13.2 13.5 13.1C13.1 13 12.5 12.8 11.8 12.6C10.8 12.4 9.99999 12.1 9.39999 11.8C8.69999 11.5 8.19999 11.1 7.79999 10.6C7.39999 10.1 7.20001 9.39998 7.20001 8.59998C7.20001 7.89998 7.39999 7.19998 7.79999 6.59998C8.19999 5.99998 8.80001 5.60005 9.60001 5.30005C10.4 5.00005 11.3 4.80005 12.3 4.80005C13.1 4.80005 13.8 4.89998 14.5 5.09998C15.1 5.29998 15.6 5.60002 16 5.90002C16.4 6.20002 16.7 6.6 16.9 7C17.1 7.4 17.2 7.69998 17.2 8.09998C17.2 8.39998 17.1 8.7 16.9 9C16.7 9.3 16.4 9.40002 16 9.40002C15.7 9.40002 15.4 9.29995 15.3 9.19995C15.2 9.09995 15 8.80002 14.8 8.40002C14.6 7.90002 14.3 7.49995 13.9 7.19995C13.5 6.89995 13 6.80005 12.2 6.80005C11.5 6.80005 10.9 7.00005 10.5 7.30005C10.1 7.60005 9.79999 8.00002 9.79999 8.40002C9.79999 8.70002 9.9 8.89998 10 9.09998C10.1 9.29998 10.4 9.49998 10.6 9.59998C10.8 9.69998 11.1 9.90002 11.4 9.90002C11.7 10 12.1 10.1 12.7 10.3C13.5 10.5 14.2 10.7 14.8 10.9C15.4 11.1 15.9 11.4 16.4 11.7C16.8 12 17.2 12.4 17.4 12.9C17.6 13.4 17.8 14 17.8 14.7Z" fill="currentColor"/>
</svg>
</span>Monto de compra
                </div>
              </td>
              <td class="fw-bold text-end">$ {{number_format($facturacion->monto_compra,2)}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div class="card card-flush py-4  flex-row-fluid">
    <div class="card-header">
      <div class="card-title">
        <h2>CFDI</h2>
      </div>
    </div>
    <div class="card-body pt-0">
      <div class="table-responsive">
        <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
          <tbody class="fw-semibold text-gray-600">
            <tr>
              <td class="text-muted">
                <div class="d-flex align-items-center">
                  <span class="svg-icon svg-icon-2 me-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.3" d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z" fill="currentColor"></path>
                      <path d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z" fill="currentColor"></path>
                      <path d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z" fill="currentColor"></path>
                    </svg>
                  </span> UUID
                </div>
              </td>
              <td class="fw-bold text-end">
                <a href="/manager/main" class="text-gray-600 text-hover-primary">---</a>
              </td>
            </tr>
            <tr>
              <td class="text-muted">
                <div class="d-flex align-items-center">
                  <span class="svg-icon svg-icon-2 me-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M20 8H16C15.4 8 15 8.4 15 9V16H10V17C10 17.6 10.4 18 11 18H16C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18H21C21.6 18 22 17.6 22 17V13L20 8Z" fill="currentColor"></path>
                      <path opacity="0.3" d="M20 18C20 19.1 19.1 20 18 20C16.9 20 16 19.1 16 18C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18ZM15 4C15 3.4 14.6 3 14 3H3C2.4 3 2 3.4 2 4V13C2 13.6 2.4 14 3 14H15V4ZM6 16C4.9 16 4 16.9 4 18C4 19.1 4.9 20 6 20C7.1 20 8 19.1 8 18C8 16.9 7.1 16 6 16Z" fill="currentColor"></path>
                    </svg>
                  </span> Uso CFDI
                </div>
              </td>
              <td class="fw-bold text-end">
                <a href="/manager/main" class="text-gray-600 text-hover-primary">---</a>
              </td>
            </tr>
            <tr>
              <td class="text-muted">
                <div class="d-flex align-items-center">
                  <span class="svg-icon svg-icon-2 me-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.3" d="M21.6 11.2L19.3 8.89998V5.59993C19.3 4.99993 18.9 4.59993 18.3 4.59993H14.9L12.6 2.3C12.2 1.9 11.6 1.9 11.2 2.3L8.9 4.59993H5.6C5 4.59993 4.6 4.99993 4.6 5.59993V8.89998L2.3 11.2C1.9 11.6 1.9 12.1999 2.3 12.5999L4.6 14.9V18.2C4.6 18.8 5 19.2 5.6 19.2H8.9L11.2 21.5C11.6 21.9 12.2 21.9 12.6 21.5L14.9 19.2H18.2C18.8 19.2 19.2 18.8 19.2 18.2V14.9L21.5 12.5999C22 12.1999 22 11.6 21.6 11.2Z" fill="currentColor"></path>
                      <path d="M11.3 9.40002C11.3 10.2 11.1 10.9 10.7 11.3C10.3 11.7 9.8 11.9 9.2 11.9C8.8 11.9 8.40001 11.8 8.10001 11.6C7.80001 11.4 7.50001 11.2 7.40001 10.8C7.20001 10.4 7.10001 10 7.10001 9.40002C7.10001 8.80002 7.20001 8.4 7.30001 8C7.40001 7.6 7.7 7.29998 8 7.09998C8.3 6.89998 8.7 6.80005 9.2 6.80005C9.5 6.80005 9.80001 6.9 10.1 7C10.4 7.1 10.6 7.3 10.8 7.5C11 7.7 11.1 8.00005 11.2 8.30005C11.3 8.60005 11.3 9.00002 11.3 9.40002ZM10.1 9.40002C10.1 8.80002 10 8.39998 9.90001 8.09998C9.80001 7.79998 9.6 7.70007 9.2 7.70007C9 7.70007 8.8 7.80002 8.7 7.90002C8.6 8.00002 8.50001 8.2 8.40001 8.5C8.40001 8.7 8.30001 9.10002 8.30001 9.40002C8.30001 9.80002 8.30001 10.1 8.40001 10.4C8.40001 10.6 8.5 10.8 8.7 11C8.8 11.1 9 11.2001 9.2 11.2001C9.5 11.2001 9.70001 11.1 9.90001 10.8C10 10.4 10.1 10 10.1 9.40002ZM14.9 7.80005L9.40001 16.7001C9.30001 16.9001 9.10001 17.1 8.90001 17.1C8.80001 17.1 8.70001 17.1 8.60001 17C8.50001 16.9 8.40001 16.8001 8.40001 16.7001C8.40001 16.6001 8.4 16.5 8.5 16.4L14 7.5C14.1 7.3 14.2 7.19998 14.3 7.09998C14.4 6.99998 14.5 7 14.6 7C14.7 7 14.8 6.99998 14.9 7.09998C15 7.19998 15 7.30002 15 7.40002C15.2 7.30002 15.1 7.50005 14.9 7.80005ZM16.6 14.2001C16.6 15.0001 16.4 15.7 16 16.1C15.6 16.5 15.1 16.7001 14.5 16.7001C14.1 16.7001 13.7 16.6 13.4 16.4C13.1 16.2 12.8 16 12.7 15.6C12.5 15.2 12.4 14.8001 12.4 14.2001C12.4 13.3001 12.6 12.7 12.9 12.3C13.2 11.9 13.7 11.7001 14.5 11.7001C14.8 11.7001 15.1 11.8 15.4 11.9C15.7 12 15.9 12.2 16.1 12.4C16.3 12.6 16.4 12.9001 16.5 13.2001C16.6 13.4001 16.6 13.8001 16.6 14.2001ZM15.4 14.1C15.4 13.5 15.3 13.1 15.2 12.9C15.1 12.6 14.9 12.5 14.5 12.5C14.3 12.5 14.1 12.6001 14 12.7001C13.9 12.8001 13.8 13.0001 13.7 13.2001C13.6 13.4001 13.6 13.8 13.6 14.1C13.6 14.7 13.7 15.1 13.8 15.4C13.9 15.7 14.1 15.8 14.5 15.8C14.8 15.8 15 15.7 15.2 15.4C15.3 15.2 15.4 14.7 15.4 14.1Z" fill="currentColor"></path>
                    </svg>
                  </span> Forma de pago
                </div>
              </td>
              <td class="fw-bold text-end">---</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    @if($facturacion->estatus_id == 3)
    <div class="card-footer text-center">
    @if(File::exists($facturacion->file_pdf))
    <a href="/cfdi/files/pdf/{{$facturacion->uniqid}}" class="btn btn-md btn-light btn-active-light-danger">       
             <i class="fa fa-file-pdf"></i> PDF
    </a>
    @endif

    @if(File::exists($facturacion->file_xml))
    <a href="/cfdi/files/xml/{{$facturacion->uniqid}}" class="btn btn-md btn-light btn-active-light-primary"> 
             <i class="fa fa-file-code fa-3x"></i> XML
    </a>
    </div>
    @endif

    @endif
  </div>
</div>

</div>
</div>

<!--begin::Modal - Create App-->
<div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-900px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header">
						<!--begin::Modal title-->
						<h2>Registrar factura</h2>
						<!--end::Modal title-->
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--end::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body py-lg-10 px-lg-10">
          <div class="col-12">
                <div id="content-file-input" >
                    <form action="" method="post" enctype="multipart/form-data">
                        <!-- file input -->
                        <input type="file" name="files" class="files">

                        <button type="button" class="btn btn-sm btn-success" type="button" onclick="procesarArchivo()">Facturar & Cargar</button>
                    </form>
                </div>
            </div>  
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Create App-->
@endsection

@push('custom-css')
<link href="{{asset('fileuploader/font/font-fileuploader.css')}}" rel="stylesheet">
<link href="{{asset('fileuploader/jquery.fileuploader.min.css')}}" media="all" rel="stylesheet">
<link href="{{asset('fileuploader/jquery.fileuploader-theme-dragdrop.css')}}" media="all" rel="stylesheet">
@endpush

@push('custom-scripts')
<script src="{{asset('jquery.min.js')}}"></script>
<script src="{{asset('fileuploader/jquery.fileuploader.min.js')}}" type="text/javascript"></script>
<script src="{{asset('fileuploader/file_uploader_subir_factura.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/autofactura-gs/manager-cfdi.js')}}"></script>
<script>
   jQuery(document).ready(function(){
   
	 SubirDocs('{{$facturacion->uniqid}}');
   });
</script>
@endpush

