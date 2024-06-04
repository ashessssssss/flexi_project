
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nomb_tipo_serv') }}</label>
    <div>
        {{ Form::text('nomb_tipo_serv', $typeService->nomb_tipo_serv, ['class' => 'form-control' .
        ($errors->has('nomb_tipo_serv') ? ' is-invalid' : ''), 'placeholder' => 'Nomb Tipo Serv']) }}
        {!! $errors->first('nomb_tipo_serv', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">typeService <b>nomb_tipo_serv</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('desc_tipo_serv') }}</label>
    <div>
        {{ Form::text('desc_tipo_serv', $typeService->desc_tipo_serv, ['class' => 'form-control' .
        ($errors->has('desc_tipo_serv') ? ' is-invalid' : ''), 'placeholder' => 'Desc Tipo Serv']) }}
        {!! $errors->first('desc_tipo_serv', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">typeService <b>desc_tipo_serv</b> instruction.</small>
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
