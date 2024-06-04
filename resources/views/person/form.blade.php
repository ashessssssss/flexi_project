
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('cedula_per') }}</label>
    <div>
        {{ Form::text('cedula_per', $person->cedula_per, ['class' => 'form-control' .
        ($errors->has('cedula_per') ? ' is-invalid' : ''), 'placeholder' => 'Cedula Per']) }}
        {!! $errors->first('cedula_per', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">person <b>cedula_per</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre_per') }}</label>
    <div>
        {{ Form::text('nombre_per', $person->nombre_per, ['class' => 'form-control' .
        ($errors->has('nombre_per') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Per']) }}
        {!! $errors->first('nombre_per', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">person <b>nombre_per</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('apellido_per') }}</label>
    <div>
        {{ Form::text('apellido_per', $person->apellido_per, ['class' => 'form-control' .
        ($errors->has('apellido_per') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Per']) }}
        {!! $errors->first('apellido_per', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">person <b>apellido_per</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('sexo_per') }}</label>
    <div>
        {{ Form::text('sexo_per', $person->sexo_per, ['class' => 'form-control' .
        ($errors->has('sexo_per') ? ' is-invalid' : ''), 'placeholder' => 'Sexo Per']) }}
        {!! $errors->first('sexo_per', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">person <b>sexo_per</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fecha_nac_per') }}</label>
    <div>
        {{ Form::text('fecha_nac_per', $person->fecha_nac_per, ['class' => 'form-control' .
        ($errors->has('fecha_nac_per') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Nac Per']) }}
        {!! $errors->first('fecha_nac_per', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">person <b>fecha_nac_per</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('telefono_per') }}</label>
    <div>
        {{ Form::text('telefono_per', $person->telefono_per, ['class' => 'form-control' .
        ($errors->has('telefono_per') ? ' is-invalid' : ''), 'placeholder' => 'Telefono Per']) }}
        {!! $errors->first('telefono_per', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">person <b>telefono_per</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('correo_per') }}</label>
    <div>
        {{ Form::text('correo_per', $person->correo_per, ['class' => 'form-control' .
        ($errors->has('correo_per') ? ' is-invalid' : ''), 'placeholder' => 'Correo Per']) }}
        {!! $errors->first('correo_per', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">person <b>correo_per</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('estado_per') }}</label>
    <div>
        {{ Form::text('estado_per', $person->estado_per, ['class' => 'form-control' .
        ($errors->has('estado_per') ? ' is-invalid' : ''), 'placeholder' => 'Estado Per']) }}
        {!! $errors->first('estado_per', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">person <b>estado_per</b> instruction.</small>
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
