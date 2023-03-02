@extends('layouts.layout') 

@section('pageTitle') 
<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
  <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Mis Facturas</h1>
  <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
    <li class="breadcrumb-item text-muted">
      <a href="/" class="text-muted text-hover-primary">Súper Sánchez</a>
    </li>
    <li class="breadcrumb-item">
      <span class="bullet bg-gray-400 w-5px h-2px"></span>
    </li>
    <li class="breadcrumb-item text-muted">Registro de solicitudes</li>
  </ul>
</div>
@endsection 
@section('container') 
<div class="card mb-5 mb-xl-10">
  <div class="card-body pt-9 pb-0">
    <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
      <div class="me-7 mb-4">
        <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
          <img src="/assets/tia-sanchez.png" alt="image" />
          <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
        </div>
      </div>
      <div class="flex-grow-1">
        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
          <div class="d-flex flex-column">
            <div class="d-flex align-items-center mb-2">
              <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{Session::get('RAZON_SOCIAL')}}</a>
              <a href="#">
                <span class="svg-icon svg-icon-1 svg-icon-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                    <path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="currentColor" />
                    <path d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white" />
                  </svg>
                </span>
              </a>
            </div>
            <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
              <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                <span class="svg-icon svg-icon-4 me-1">
                  <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.3" d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z" fill="currentColor" />
                    <path d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z" fill="currentColor" />
                    <rect x="7" y="6" width="4" height="4" rx="2" fill="currentColor" />
                  </svg>
                </span>{{Session::get('RFC')}}
              </a>
              <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                <span class="svg-icon svg-icon-4 me-1">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
                    <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
                  </svg>
                </span>{{Session::get('CODIGO_POSTAL')}}
              </a>
              <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                <span class="svg-icon svg-icon-4 me-1">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor" />
                    <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor" />
                  </svg>
                </span>
                {{Session::get('CORREO_ELECTRONICO')}}
              </a>
            </div>
          </div>
          <div class="d-flex my-4">
            <div class="mr-2">
              <a href="/" name="previousBtn" id="previousBtn" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                <span class="svg-icon svg-icon-4 me-1">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor" />
                    <path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="currentColor" />
                  </svg>
                </span>
                Salir
              </a>
            </div>
          </div>
        </div>
        <div class="d-flex flex-wrap flex-stack">
          <div class="d-flex flex-column flex-grow-1 pe-8">
            <div class="d-flex flex-wrap">
              <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                <div class="d-flex align-items-center">
                  <span class="svg-icon svg-icon-3 svg-icon-success me-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                      <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
                    </svg>
                  </span>
                  <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="@if (array_key_exists('FACTURADO',$count)) {{$count['FACTURADO']}} @else 0 @endif">0</div>
                </div>
                <div class="fw-semibold fs-6 text-gray-400">Facturado</div>
              </div>

              <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                <div class="d-flex align-items-center">
                  <span class="svg-icon svg-icon-3 svg-icon-danger me-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                      <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
                    </svg>
                  </span>
                  <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="@if (array_key_exists('DECLINADA',$count)) {{$count['DECLINADA']}} @else 0 @endif">0</div>
                </div>
                <div class="fw-semibold fs-6 text-gray-400">Declinada</div>
              </div>
              <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                <div class="d-flex align-items-center">
                  <span class="svg-icon svg-icon-3 svg-icon-warning me-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                      <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
                    </svg>
                  </span>
                  <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="@if (array_key_exists('EN PROCESO',$count)){{ $count['EN PROCESO']}} @else 0 @endif">0</div>
                </div>
                <div class="fw-semibold fs-6 text-gray-400">En proceso</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!--ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold"><li class="nav-item mt-2"><a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="/metronic8/demo1/../demo1/account/overview.html">
                        Overview                    </a></li><li class="nav-item mt-2"><a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/metronic8/demo1/../demo1/account/settings.html">
                        Settings                    </a></li><li class="nav-item mt-2"><a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/metronic8/demo1/../demo1/account/security.html">
                        Security                    </a></li><li class="nav-item mt-2"><a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/metronic8/demo1/../demo1/account/activity.html">
                        Activity                    </a></li><li class="nav-item mt-2"><a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/metronic8/demo1/../demo1/account/billing.html">
                        Billing                    </a></li><li class="nav-item mt-2"><a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/metronic8/demo1/../demo1/account/statements.html">
                        Statements                    </a></li><li class="nav-item mt-2"><a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/metronic8/demo1/../demo1/account/referrals.html">
                        Referrals                    </a></li><li class="nav-item mt-2"><a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/metronic8/demo1/../demo1/account/api-keys.html">
                        API Keys                    </a></li><li class="nav-item mt-2"><a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/metronic8/demo1/../demo1/account/logs.html">
                        Logs                    </a></li></!--ul-->

    
  </div>
  
</div> 
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
<script src="{{asset('assets/js/autofactura-gs/customer-invoice.js')}}"></script>
@endpush