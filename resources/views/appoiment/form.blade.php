
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_cliente') }}</label>
    <div>
        {{ Form::text('id_cliente', $appoiment->id_cliente, ['class' => 'form-control' .
        ($errors->has('id_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Id Cliente']) }}
        {!! $errors->first('id_cliente', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">appoiment <b>id_cliente</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_servicio') }}</label>
    <div>
        {{ Form::text('id_servicio', $appoiment->id_servicio, ['class' => 'form-control' .
        ($errors->has('id_servicio') ? ' is-invalid' : ''), 'placeholder' => 'Id Servicio']) }}
        {!! $errors->first('id_servicio', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">appoiment <b>id_servicio</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fecha_cita') }}</label>
    <div>
        {{ Form::text('fecha_cita', $appoiment->fecha_cita, ['class' => 'form-control' .
        ($errors->has('fecha_cita') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Cita']) }}
        {!! $errors->first('fecha_cita', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">appoiment <b>fecha_cita</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('hora_cita') }}</label>
    <div>
        {{ Form::text('hora_cita', $appoiment->hora_cita, ['class' => 'form-control' .
        ($errors->has('hora_cita') ? ' is-invalid' : ''), 'placeholder' => 'Hora Cita']) }}
        {!! $errors->first('hora_cita', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">appoiment <b>hora_cita</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_empleado') }}</label>
    <div>
        {{ Form::text('id_empleado', $appoiment->id_empleado, ['class' => 'form-control' .
        ($errors->has('id_empleado') ? ' is-invalid' : ''), 'placeholder' => 'Id Empleado']) }}
        {!! $errors->first('id_empleado', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">appoiment <b>id_empleado</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('estado_emp') }}</label>
    <div>
        {{ Form::text('estado_emp', $appoiment->estado_emp, ['class' => 'form-control' .
        ($errors->has('estado_emp') ? ' is-invalid' : ''), 'placeholder' => 'Estado Emp']) }}
        {!! $errors->first('estado_emp', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">appoiment <b>estado_emp</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Enviar</button>
            </div>
        </div>
    </div>
