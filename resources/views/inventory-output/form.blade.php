
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_prod') }}</label>
    <div>
        {{ Form::text('id_prod', $inventoryOutput->id_prod, ['class' => 'form-control' .
        ($errors->has('id_prod') ? ' is-invalid' : ''), 'placeholder' => 'Id Prod']) }}
        {!! $errors->first('id_prod', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">inventoryOutput <b>id_prod</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fecha_salida') }}</label>
    <div>
        {{ Form::text('fecha_salida', $inventoryOutput->fecha_salida, ['class' => 'form-control' .
        ($errors->has('fecha_salida') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Salida']) }}
        {!! $errors->first('fecha_salida', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">inventoryOutput <b>fecha_salida</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('cantidad_salida') }}</label>
    <div>
        {{ Form::text('cantidad_salida', $inventoryOutput->cantidad_salida, ['class' => 'form-control' .
        ($errors->has('cantidad_salida') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad Salida']) }}
        {!! $errors->first('cantidad_salida', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">inventoryOutput <b>cantidad_salida</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('precio_unitario') }}</label>
    <div>
        {{ Form::text('precio_unitario', $inventoryOutput->precio_unitario, ['class' => 'form-control' .
        ($errors->has('precio_unitario') ? ' is-invalid' : ''), 'placeholder' => 'Precio Unitario']) }}
        {!! $errors->first('precio_unitario', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">inventoryOutput <b>precio_unitario</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('destino') }}</label>
    <div>
        {{ Form::text('destino', $inventoryOutput->destino, ['class' => 'form-control' .
        ($errors->has('destino') ? ' is-invalid' : ''), 'placeholder' => 'Destino']) }}
        {!! $errors->first('destino', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">inventoryOutput <b>destino</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('observaciones') }}</label>
    <div>
        {{ Form::text('observaciones', $inventoryOutput->observaciones, ['class' => 'form-control' .
        ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
        {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">inventoryOutput <b>observaciones</b> instruction.</small>
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
