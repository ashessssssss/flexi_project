
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nomb_puesto') }}</label>
    <div>
        {{ Form::text('nomb_puesto', $position->nomb_puesto, ['class' => 'form-control' .
        ($errors->has('nomb_puesto') ? ' is-invalid' : ''), 'placeholder' => 'Nomb Puesto']) }}
        {!! $errors->first('nomb_puesto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">position <b>nomb_puesto</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('desc_puesto') }}</label>
    <div>
        {{ Form::text('desc_puesto', $position->desc_puesto, ['class' => 'form-control' .
        ($errors->has('desc_puesto') ? ' is-invalid' : ''), 'placeholder' => 'Desc Puesto']) }}
        {!! $errors->first('desc_puesto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">position <b>desc_puesto</b> instruction.</small>
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
