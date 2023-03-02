@extends('layouts.layout')

@section('pageTitle') 
<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
  <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Centro de soporte</h1>
  <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
    <li class="breadcrumb-item text-muted">
      <a href="/" class="text-muted text-hover-primary">Súper Sánchez</a>
    </li>
    <li class="breadcrumb-item">
      <span class="bullet bg-gray-400 w-5px h-2px"></span>
    </li>
    <li class="breadcrumb-item text-muted">Solicitar ayuda</li>
  </ul>
</div>
@endsection 

@section('container')

            
    <!--begin::Card-->
    <div class="card">
        <div class="card-header align-items-center py-5 gap-5">
            <!--begin::Pagination-->
<div class="d-flex align-items-center">
    <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
        <div class="fs-6 fw-bold text-gray-700">{{$datosSolicitud->num_tienda}}</div>
        <div class="fw-semibold text-gray-400">Núm. Tienda</div>
    </div>
    <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
        <div class="fs-6 fw-bold text-gray-700">{{$datosSolicitud->num_ticket}}</div>
        <div class="fw-semibold text-gray-400">Núm. Ticket</div>
    </div>
    <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
        <div class="fs-6 fw-bold text-gray-700">{{$datosSolicitud->num_caja}}</div>
        <div class="fw-semibold text-gray-400">Núm. Caja</div>
    </div>
    <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
        <div class="fs-6 fw-bold text-gray-700">${{number_format($datosSolicitud->monto_compra,2)}}</div>
        <div class="fw-semibold text-gray-400">Monto Compra</div>
    </div>
    <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
        <div class="fs-6 fw-bold text-gray-700">{{date('d/m/Y',strtotime($datosSolicitud->fecha_ticket))}}</div>
        <div class="fw-semibold text-gray-400">Fecha Compra</div>
    </div>
</div>
<!--end::Pagination-->   
            <!--begin::Actions-->
<div class="d-flex">
<a href="/cfdi/home" name="previousBtn" id="previousBtn" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                <span class="svg-icon svg-icon-4 me-1">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor"></rect>
                    <path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="currentColor"></path>
                  </svg>
                </span>
                Regresar
              </a>


</div>
<!--end::Actions-->

     
</div>

        <div class="card-body">
            <!--begin::Title-->
<div class="d-flex flex-wrap gap-2 justify-content-between mb-8">
    <div class="d-flex align-items-center flex-wrap gap-2">
       

        <!--begin::Badges-->
        <span class="badge badge-light-primary my-1 me-2">Factura solicitada</span>
        @if($supportData != null)
        <span class="badge badge-light-danger my-1">{{$supportData->folio_sifol}}</span>
        @endif
        <!--end::Badges-->
    </div>


</div>
<!--end::Title-->
@if($support != null)
<!--begin::Message accordion-->
@php
 echo $support;
@endphp





@endif
            <!--begin::Form-->
<form id="kt_inbox_reply_form" class="rounded border mt-10">
    @csrf
    <!--begin::Body-->
    <div class="d-block">
        <!--begin::To-->
        <div class="d-flex align-items-center border-bottom px-8 min-h-50px">
            <!--begin::Label-->
            <div class="text-dark fw-bold w-75px">
                Para:
            </div>
            <!--end::Label-->

            <!--begin::Input-->
            <input type="text" class="form-control border-0" name="compose_to" value="soporte@sanchezgrupo.com, max@kt.com, sean@dellito.com" data-kt-inbox-form="tagify" />
            <!--end::Input-->

            <!--begin::CC & BCC buttons-->
            <div class="ms-auto w-75px text-end hidden" style="display:none">
                <span class="text-muted fs-bold cursor-pointer text-hover-primary me-2" data-kt-inbox-form="cc_button">Cc</span>
                <span class="text-muted fs-bold cursor-pointer text-hover-primary" data-kt-inbox-form="bcc_button">Bcc</span>
            </div>
            <!--end::CC & BCC buttons-->
        </div>
        <!--end::To-->

        <!--begin::CC-->
        <div class="d-none align-items-center border-bottom ps-8 pe-5 min-h-50px" data-kt-inbox-form="cc">
            <!--begin::Label-->
            <div class="text-dark fw-bold w-75px">
                Cc:
            </div>
            <!--end::Label-->

            <!--begin::Input-->
            <input type="text" class="form-control border-0" name="compose_cc" value="" data-kt-inbox-form="tagify" />
            <!--end::Input-->

            <!--begin::Close-->
            <span class="btn btn-clean btn-xs btn-icon" data-kt-inbox-form="cc_close">
                <i class="la la-close "></i>
            </span>
            <!--end::Close-->
        </div>
        <!--end::CC-->

        <!--begin::BCC-->
        <div class="d-none align-items-center border-bottom inbox-to-bcc ps-8 pe-5 min-h-50px" data-kt-inbox-form="bcc">
            <!--begin::Label-->
            <div class="text-dark fw-bold w-75px">
                Bcc:
            </div>
            <!--end::Label-->

            <!--begin::Input-->
            <input type="text" class="form-control border-0" name="compose_bcc" value="" data-kt-inbox-form="tagify" />
            <!--end::Input-->

            <!--begin::Close-->
            <span class="btn btn-clean btn-xs btn-icon" data-kt-inbox-form="bcc_close">
                <i class="la la-close "></i>
            </span>
            <!--end::Close-->
        </div>
        <!--end::BCC-->

        <!--begin::Subject-->
        <div class="border-bottom">
            <input class="form-control border-0 px-8 min-h-45px" name="compose_subject" placeholder="Asunto" value="Soporte facturación" readonly/>
        </div>
        <!--end::Subject-->

        <!--begin::Message-->
        <input type="hidden" id="txtMessage" name="txtMessage">
        <div id="kt_inbox_form_editor" class="border-0 h-250px px-3">
        </div>
        <!--end::Message-->

        <!--begin::Attachments-->
        <div class="dropzone dropzone-queue px-8 py-4" id="kt_inbox_reply_attachments" data-kt-inbox-form="dropzone">
            <div class="dropzone-items">
                <div class="dropzone-item" style="display:none">
                    <!--begin::Dropzone filename-->
                    <div class="dropzone-file">
                        <div class="dropzone-filename" title="some_image_file_name.jpg">
                            <span data-dz-name>some_image_file_name.jpg</span> <strong>(<span data-dz-size>340kb</span>)</strong>
                        </div>
                        <div class="dropzone-error" data-dz-errormessage></div>
                    </div>
                    <!--end::Dropzone filename-->

                    <!--begin::Dropzone progress-->
                    <div class="dropzone-progress">
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress></div>
                        </div>
                    </div>
                    <!--end::Dropzone progress-->

                    <!--begin::Dropzone toolbar-->
                    <div class="dropzone-toolbar">
                        <span class="dropzone-delete" data-dz-remove>
                            <i class="bi bi-x fs-1"></i>
                        </span>
                    </div>
                    <!--end::Dropzone toolbar-->
                </div>
            </div>
        </div>
        <!--end::Attachments-->
    </div>
    <!--end::Body-->

    <!--begin::Footer-->
    <div class="d-flex flex-stack flex-wrap gap-2 py-5 ps-8 pe-5 border-top">
        <!--begin::Actions-->
        <div class="d-flex align-items-center me-3">
            <!--begin::Send-->
            <div class="btn-group me-4">
                <!--begin::Submit-->
                <span class="btn btn-primary fs-bold px-6" data-kt-inbox-form="send">
                    <span class="indicator-label">
                        Enviar
                    </span>
                    <span class="indicator-progress">
                        Enviando... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </span>
                <!--end::Submit-->

              
            </div>
            <!--end::Send-->

        
        </div>
        <!--end::Actions-->

        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
             <!--begin::More actions-->
             <span class="btn btn-icon btn-sm btn-clean btn-active-light-primary me-2" data-toggle="tooltip" title="More actions">
                <!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
<span class="svg-icon svg-icon-2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="currentColor"/>
<path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="currentColor"/>
</svg>
</span>
<!--end::Svg Icon-->            </span>
            <!--end::More actions-->

            <!--begin::Dismiss reply-->
            <span class="btn btn-icon btn-sm btn-clean btn-active-light-primary" data-inbox="dismiss" data-toggle="tooltip" title="Dismiss reply">
                <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
<span class="svg-icon svg-icon-2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"/>
<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"/>
<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"/>
</svg>
</span>
<!--end::Svg Icon-->            </span>
            <!--end::Dismiss reply-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Footer-->
</form>
<!--end::Form-->        </div>
    </div>
    <!--end::Card-->
@endsection

@push('custom-scripts')
<script src="{{asset('assets-layout/js/custom/apps/inbox/reply.js?v=1.5')}}"></script>
@endpush