
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_usuario') }}</label>
    <div>
        {{ Form::text('id_usuario', $appoiment->id_usuario, ['class' => 'form-control' .
        ($errors->has('id_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Id Usuario']) }}
        {!! $errors->first('id_usuario', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">appoiment <b>id_usuario</b> instruction.</small>
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
    <label class="form-label">   {{ Form::label('id_vh') }}</label>
    <div>
        {{ Form::text('id_vh', $appoiment->id_vh, ['class' => 'form-control' .
        ($errors->has('id_vh') ? ' is-invalid' : ''), 'placeholder' => 'Id Vh']) }}
        {!! $errors->first('id_vh', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">appoiment <b>id_vh</b> instruction.</small>
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
    <label class="form-label">   {{ Form::label('estado_cita') }}</label>
    <div>
        {{ Form::text('estado_cita', $appoiment->estado_cita, ['class' => 'form-control' .
        ($errors->has('estado_cita') ? ' is-invalid' : ''), 'placeholder' => 'Estado Cita']) }}
        {!! $errors->first('estado_cita', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">appoiment <b>estado_cita</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_prod') }}</label>
    <div>
        {{ Form::text('id_prod', $appoiment->id_prod, ['class' => 'form-control' .
        ($errors->has('id_prod') ? ' is-invalid' : ''), 'placeholder' => 'Id Prod']) }}
        {!! $errors->first('id_prod', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">appoiment <b>id_prod</b> instruction.</small>
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
