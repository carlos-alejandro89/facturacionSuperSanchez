@extends('layouts.layout')

@section('pageTitle') 
<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
  <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">{{Session::get('ACCOUNT_CENTRO')}} - {{Session::get('ACCOUNT_NOMBRE_CENTRO')}}</h1>
  <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
    <li class="breadcrumb-item text-muted">
      <a href="/" class="text-muted text-hover-primary">Súper Sánchez</a>
    </li>
    <li class="breadcrumb-item">
      <span class="bullet bg-gray-400 w-5px h-2px"></span>
    </li>
    <li class="breadcrumb-item text-muted">Solicitudes por atender</li>
  </ul>
</div>
@endsection 

@section('container')
@if(Session::has('error'))
<div class="alert alert-danger">
{{Session::get('error');}}
</div>
  
@endif
<div class="card card-flush">
  <div class="card-header align-items-center py-5 gap-2 gap-md-5">
    <div class="card-title">
      <div class="d-flex align-items-center position-relative my-1">
        <span class="svg-icon svg-icon-1 position-absolute ms-4">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
          </svg>
        </span>
        <input type="text" data-kt-ecommerce-category-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Buscar" />
      </div>
    </div>
  </div>
  <div class="card-body pt-0">
    @php
    echo $tableResults;
    @endphp
  </div>
@endsection

@push('custom-scripts')
<script>
  $(document).ready(function(){
    $("#kt_solicitudes").dataTable(
      {
        "language": {
            "lengthMenu": "_MENU_",
            "zeroRecords": "Lo sentimos, no hay solicitudes",
            "info": "Showing page _PAGE_ of _PAGES_",
            "infoEmpty": "",
            "infoFiltered": "(Filtro de _MAX_ registros)"
        }
    } 
    );
  });
</script>
@endpush