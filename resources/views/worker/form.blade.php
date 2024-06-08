
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_usuario') }}</label>
    <div>
        {{ Form::text('id_usuario', $worker->id_usuario, ['class' => 'form-control' .
        ($errors->has('id_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Id Usuario']) }}
        {!! $errors->first('id_usuario', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">worker <b>id_usuario</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fecha_ing_emp') }}</label>
    <div>
        {{ Form::text('fecha_ing_emp', $worker->fecha_ing_emp, ['class' => 'form-control' .
        ($errors->has('fecha_ing_emp') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Ing Emp']) }}
        {!! $errors->first('fecha_ing_emp', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">worker <b>fecha_ing_emp</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fecha_sali_emp') }}</label>
    <div>
        {{ Form::text('fecha_sali_emp', $worker->fecha_sali_emp, ['class' => 'form-control' .
        ($errors->has('fecha_sali_emp') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Sali Emp']) }}
        {!! $errors->first('fecha_sali_emp', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">worker <b>fecha_sali_emp</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('estado_emp') }}</label>
    <div>
        {{ Form::text('estado_emp', $worker->estado_emp, ['class' => 'form-control' .
        ($errors->has('estado_emp') ? ' is-invalid' : ''), 'placeholder' => 'Estado Emp']) }}
        {!! $errors->first('estado_emp', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">worker <b>estado_emp</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_puesto') }}</label>
    <div>
        {{ Form::text('id_puesto', $worker->id_puesto, ['class' => 'form-control' .
        ($errors->has('id_puesto') ? ' is-invalid' : ''), 'placeholder' => 'Id Puesto']) }}
        {!! $errors->first('id_puesto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">worker <b>id_puesto</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('sueldo') }}</label>
    <div>
        {{ Form::text('sueldo', $worker->sueldo, ['class' => 'form-control' .
        ($errors->has('sueldo') ? ' is-invalid' : ''), 'placeholder' => 'Sueldo']) }}
        {!! $errors->first('sueldo', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">worker <b>sueldo</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre_emp') }}</label>
    <div>
        {{ Form::text('nombre_emp', $worker->nombre_emp, ['class' => 'form-control' .
        ($errors->has('nombre_emp') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Emp']) }}
        {!! $errors->first('nombre_emp', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">worker <b>nombre_emp</b> instruction.</small>
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
