
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_prod') }}</label>
    <div>
        {{ Form::text('id_prod', $inventary->id_prod, ['class' => 'form-control' .
        ($errors->has('id_prod') ? ' is-invalid' : ''), 'placeholder' => 'Id Prod']) }}
        {!! $errors->first('id_prod', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">inventary <b>id_prod</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fecha_inventario') }}</label>
    <div>
        {{ Form::text('fecha_inventario', $inventary->fecha_inventario, ['class' => 'form-control' .
        ($errors->has('fecha_inventario') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inventario']) }}
        {!! $errors->first('fecha_inventario', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">inventary <b>fecha_inventario</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('cantidad_existente') }}</label>
    <div>
        {{ Form::text('cantidad_existente', $inventary->cantidad_existente, ['class' => 'form-control' .
        ($errors->has('cantidad_existente') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad Existente']) }}
        {!! $errors->first('cantidad_existente', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">inventary <b>cantidad_existente</b> instruction.</small>
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
