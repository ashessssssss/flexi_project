
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nomb_marca') }}</label>
    <div>
        {{ Form::text('nomb_marca', $brand->nomb_marca, ['class' => 'form-control' .
        ($errors->has('nomb_marca') ? ' is-invalid' : ''), 'placeholder' => 'Nomb Marca']) }}
        {!! $errors->first('nomb_marca', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">brand <b>nomb_marca</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('pais_origen') }}</label>
    <div>
        {{ Form::text('pais_origen', $brand->pais_origen, ['class' => 'form-control' .
        ($errors->has('pais_origen') ? ' is-invalid' : ''), 'placeholder' => 'Pais Origen']) }}
        {!! $errors->first('pais_origen', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">brand <b>pais_origen</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('desc_marca') }}</label>
    <div>
        {{ Form::text('desc_marca', $brand->desc_marca, ['class' => 'form-control' .
        ($errors->has('desc_marca') ? ' is-invalid' : ''), 'placeholder' => 'Desc Marca']) }}
        {!! $errors->first('desc_marca', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">brand <b>desc_marca</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('estado') }}</label>
    <div>
        {{ Form::text('estado', $brand->estado, ['class' => 'form-control' .
        ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
        {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">brand <b>estado</b> instruction.</small>
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
