@php
use App\Traits\Common;
@endphp
<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_history">
      <thead>
        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
          <th class="min-w-50px">Razón social</th>
          <th class="min-w-50px">Núm. Ticket</th>
          <th class="min-w-50px">Núm. Sucursal</th>
          <th class="min-w-70px">Núm. Caja</th>
          <th class="min-w-50px">Fecha Compra</th>
          <th class="min-w-50px">Estatus</th>
          <th class="text-end min-w-50px">Monto Compra</th>
          <th class="min-w-50px"></th>
        </tr>
      </thead>
      <tbody class="fw-semibold text-gray-600">
        @foreach($query as $q)
        <tr>
        <td>
            <div class="d-flex">
              <div class="ms-5">
                <div class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1">{{$q->razon_social}}</div>
              </div>
            </div>
          </td>
          <td>
            <div class="d-flex">
              <div class="ms-5">
                <div class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1">{{$q->num_ticket}}</div>
              </div>
            </div>
          </td>
          <td>
            <div class="d-flex">
              <div class="ms-5">
                <div class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1">{{$q->num_tienda}}</div>
              </div>
            </div>
          </td>
          <td>
            <div class="d-flex">
              <div class="ms-5">
                <div class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1">{{$q->num_caja}}</div>
              </div>
            </div>
          </td>
          <td>
            <div class="d-flex">
              <div class="ms-5">
                <div class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1">{{date('d/m/Y',strtotime($q->fecha_ticket))}}</div>
              </div>
            </div>
          </td>
          <td>
          @php echo Common::labelEstatus($q->estatus_id) @endphp
          </td>
          <td class="text-end">
          <div class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1">${{number_format($q->monto_compra,2)}}</div>
          </td>
          <td class="text-end">
          <a href="/manager/cfdi/{{$q->uniqid}}" class="btn btn-sm btn-light btn-active-light-primary"> 
            Ver Información
            <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-01-26-051612/core/html/src/media/icons/duotune/arrows/arr064.svg-->
            <span class="svg-icon svg-icon-muted svg-icon-2x"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"/>
            <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"/>
            </svg>
            </span>
            <!--end::Svg Icon--> 
          </a>

          </td>
        </tr>
        @endforeach
      </tbody>
    </table>