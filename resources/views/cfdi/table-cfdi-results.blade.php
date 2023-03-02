@php
use App\Traits\Common;
@endphp
<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_category_table">
      <thead>
        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
          <th class="w-10px pe-2">
            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
              <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_category_table .form-check-input" value="1" />
            </div>
          </th>
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
            <div class="form-check form-check-sm form-check-custom form-check-solid">
              <input class="form-check-input" type="checkbox" value="1" />
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
          @if(File::exists($q->file_xml))
          <a href="/cfdi/files/pdf/{{$q->uniqid}}" class="btn btn-sm btn-light btn-active-light-danger"> 
             <i class="fa fa-file-pdf"></i> PDF
          </a>
          @endif
          @if(File::exists($q->file_xml))
          <a href="/cfdi/files/xml/{{$q->uniqid}}" class="btn btn-sm btn-light btn-active-light-primary"> 
             <i class="fa fa-file-code"></i> XML
          </a>
          @endif
          <a href="/cfdi/support/{{$q->uniqid}}" class="btn btn-sm btn-light btn-active-light-danger"> 
             <i class="fa fa-headset"></i> Solicitar ayuda
          </a>

          </td>
        </tr>
        @endforeach
      </tbody>
    </table>