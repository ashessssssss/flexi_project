
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre_serv') }}</label>
    <div>
        {{ Form::text('nombre_serv', $service->nombre_serv, ['class' => 'form-control' .
        ($errors->has('nombre_serv') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Serv']) }}
        {!! $errors->first('nombre_serv', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">service <b>nombre_serv</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_tipo_serv') }}</label>
    <div>
        {{ Form::text('id_tipo_serv', $service->id_tipo_serv, ['class' => 'form-control' .
        ($errors->has('id_tipo_serv') ? ' is-invalid' : ''), 'placeholder' => 'Id Tipo Serv']) }}
        {!! $errors->first('id_tipo_serv', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">service <b>id_tipo_serv</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('desc_serv') }}</label>
    <div>
        {{ Form::text('desc_serv', $service->desc_serv, ['class' => 'form-control' .
        ($errors->has('desc_serv') ? ' is-invalid' : ''), 'placeholder' => 'Desc Serv']) }}
        {!! $errors->first('desc_serv', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">service <b>desc_serv</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('precio_serv') }}</label>
    <div>
        {{ Form::text('precio_serv', $service->precio_serv, ['class' => 'form-control' .
        ($errors->has('precio_serv') ? ' is-invalid' : ''), 'placeholder' => 'Precio Serv']) }}
        {!! $errors->first('precio_serv', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">service <b>precio_serv</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('tiempo_estimado') }}</label>
    <div>
        {{ Form::text('tiempo_estimado', $service->tiempo_estimado, ['class' => 'form-control' .
        ($errors->has('tiempo_estimado') ? ' is-invalid' : ''), 'placeholder' => 'Tiempo Estimado']) }}
        {!! $errors->first('tiempo_estimado', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">service <b>tiempo_estimado</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('estado_serv') }}</label>
    <div>
        {{ Form::text('estado_serv', $service->estado_serv, ['class' => 'form-control' .
        ($errors->has('estado_serv') ? ' is-invalid' : ''), 'placeholder' => 'Estado Serv']) }}
        {!! $errors->first('estado_serv', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">service <b>estado_serv</b> instruction.</small>
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
