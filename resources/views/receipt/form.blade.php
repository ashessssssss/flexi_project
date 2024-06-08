
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_usuario') }}</label>
    <div>
        {{ Form::text('id_usuario', $receipt->id_usuario, ['class' => 'form-control' .
        ($errors->has('id_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Id Usuario']) }}
        {!! $errors->first('id_usuario', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">receipt <b>id_usuario</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_empleado') }}</label>
    <div>
        {{ Form::text('id_empleado', $receipt->id_empleado, ['class' => 'form-control' .
        ($errors->has('id_empleado') ? ' is-invalid' : ''), 'placeholder' => 'Id Empleado']) }}
        {!! $errors->first('id_empleado', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">receipt <b>id_empleado</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_cita') }}</label>
    <div>
        {{ Form::text('id_cita', $receipt->id_cita, ['class' => 'form-control' .
        ($errors->has('id_cita') ? ' is-invalid' : ''), 'placeholder' => 'Id Cita']) }}
        {!! $errors->first('id_cita', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">receipt <b>id_cita</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_prod') }}</label>
    <div>
        {{ Form::text('id_prod', $receipt->id_prod, ['class' => 'form-control' .
        ($errors->has('id_prod') ? ' is-invalid' : ''), 'placeholder' => 'Id Prod']) }}
        {!! $errors->first('id_prod', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">receipt <b>id_prod</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fecha_factura') }}</label>
    <div>
        {{ Form::text('fecha_factura', $receipt->fecha_factura, ['class' => 'form-control' .
        ($errors->has('fecha_factura') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Factura']) }}
        {!! $errors->first('fecha_factura', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">receipt <b>fecha_factura</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('hora_factura') }}</label>
    <div>
        {{ Form::text('hora_factura', $receipt->hora_factura, ['class' => 'form-control' .
        ($errors->has('hora_factura') ? ' is-invalid' : ''), 'placeholder' => 'Hora Factura']) }}
        {!! $errors->first('hora_factura', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">receipt <b>hora_factura</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('tipo_pago') }}</label>
    <div>
        {{ Form::text('tipo_pago', $receipt->tipo_pago, ['class' => 'form-control' .
        ($errors->has('tipo_pago') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Pago']) }}
        {!! $errors->first('tipo_pago', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">receipt <b>tipo_pago</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('estado') }}</label>
    <div>
        {{ Form::text('estado', $receipt->estado, ['class' => 'form-control' .
        ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
        {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">receipt <b>estado</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('descuento_porcentaje') }}</label>
    <div>
        {{ Form::text('descuento_porcentaje', $receipt->descuento_porcentaje, ['class' => 'form-control' .
        ($errors->has('descuento_porcentaje') ? ' is-invalid' : ''), 'placeholder' => 'Descuento Porcentaje']) }}
        {!! $errors->first('descuento_porcentaje', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">receipt <b>descuento_porcentaje</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('descuento_monto') }}</label>
    <div>
        {{ Form::text('descuento_monto', $receipt->descuento_monto, ['class' => 'form-control' .
        ($errors->has('descuento_monto') ? ' is-invalid' : ''), 'placeholder' => 'Descuento Monto']) }}
        {!! $errors->first('descuento_monto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">receipt <b>descuento_monto</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('subtotal') }}</label>
    <div>
        {{ Form::text('subtotal', $receipt->subtotal, ['class' => 'form-control' .
        ($errors->has('subtotal') ? ' is-invalid' : ''), 'placeholder' => 'Subtotal']) }}
        {!! $errors->first('subtotal', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">receipt <b>subtotal</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('impuesto') }}</label>
    <div>
        {{ Form::text('impuesto', $receipt->impuesto, ['class' => 'form-control' .
        ($errors->has('impuesto') ? ' is-invalid' : ''), 'placeholder' => 'Impuesto']) }}
        {!! $errors->first('impuesto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">receipt <b>impuesto</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('total_factura') }}</label>
    <div>
        {{ Form::text('total_factura', $receipt->total_factura, ['class' => 'form-control' .
        ($errors->has('total_factura') ? ' is-invalid' : ''), 'placeholder' => 'Total Factura']) }}
        {!! $errors->first('total_factura', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">receipt <b>total_factura</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
