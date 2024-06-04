
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nomb_tipo_prod') }}</label>
    <div>
        {{ Form::text('nomb_tipo_prod', $typeProduct->nomb_tipo_prod, ['class' => 'form-control' .
        ($errors->has('nomb_tipo_prod') ? ' is-invalid' : ''), 'placeholder' => 'Nomb Tipo Prod']) }}
        {!! $errors->first('nomb_tipo_prod', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">typeProduct <b>nomb_tipo_prod</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('descripcion') }}</label>
    <div>
        {{ Form::text('descripcion', $typeProduct->descripcion, ['class' => 'form-control' .
        ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
        {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">typeProduct <b>descripcion</b> instruction.</small>
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
