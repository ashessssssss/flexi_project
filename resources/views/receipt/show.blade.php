@extends('tablar::page')

@section('title', 'View Receipt')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        View
                    </div>
                    <h2 class="page-title">
                        {{ __('Receipt ') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('receipts.index') }}" class="btn btn-primary d-none d-sm-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                            Receipt List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    @if(config('tablar','display_alert'))
                        @include('tablar::common.alert')
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Receipt Details</h3>
                        </div>
                        <div class="card-body">
                            
<div class="form-group">
<strong>Id Usuario:</strong>
{{ $receipt->id_usuario }}
</div>
<div class="form-group">
<strong>Id Empleado:</strong>
{{ $receipt->id_empleado }}
</div>
<div class="form-group">
<strong>Id Cita:</strong>
{{ $receipt->id_cita }}
</div>
<div class="form-group">
<strong>Id Prod:</strong>
{{ $receipt->id_prod }}
</div>
<div class="form-group">
<strong>Fecha Factura:</strong>
{{ $receipt->fecha_factura }}
</div>
<div class="form-group">
<strong>Hora Factura:</strong>
{{ $receipt->hora_factura }}
</div>
<div class="form-group">
<strong>Tipo Pago:</strong>
{{ $receipt->tipo_pago }}
</div>
<div class="form-group">
<strong>Estado:</strong>
{{ $receipt->estado }}
</div>
<div class="form-group">
<strong>Descuento Porcentaje:</strong>
{{ $receipt->descuento_porcentaje }}
</div>
<div class="form-group">
<strong>Descuento Monto:</strong>
{{ $receipt->descuento_monto }}
</div>
<div class="form-group">
<strong>Subtotal:</strong>
{{ $receipt->subtotal }}
</div>
<div class="form-group">
<strong>Impuesto:</strong>
{{ $receipt->impuesto }}
</div>
<div class="form-group">
<strong>Total Factura:</strong>
{{ $receipt->total_factura }}
</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


