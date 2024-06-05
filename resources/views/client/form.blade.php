
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_usuario') }}</label>
    <div>
        {{ Form::text('id_usuario', $client->id_usuario, ['class' => 'form-control' .
        ($errors->has('id_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Id Usuario']) }}
        {!! $errors->first('id_usuario', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">client <b>id_usuario</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fecha_registro') }}</label>
    <div>
        {{ Form::text('fecha_registro', $client->fecha_registro, ['class' => 'form-control' .
        ($errors->has('fecha_registro') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Registro']) }}
        {!! $errors->first('fecha_registro', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">client <b>fecha_registro</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fecha_salida') }}</label>
    <div>
        {{ Form::text('fecha_salida', $client->fecha_salida, ['class' => 'form-control' .
        ($errors->has('fecha_salida') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Salida']) }}
        {!! $errors->first('fecha_salida', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">client <b>fecha_salida</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('estado') }}</label>
    <div>
        {{ Form::text('estado', $client->estado, ['class' => 'form-control' .
        ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
        {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">client <b>estado</b> instruction.</small>
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
