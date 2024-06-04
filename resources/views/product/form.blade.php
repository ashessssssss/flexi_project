
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre') }}</label>
    <div>
        {{ Form::text('nombre', $product->nombre, ['class' => 'form-control' .
        ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>nombre</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('descripcion') }}</label>
    <div>
        {{ Form::text('descripcion', $product->descripcion, ['class' => 'form-control' .
        ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
        {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>descripcion</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('stock') }}</label>
    <div>
        {{ Form::text('stock', $product->stock, ['class' => 'form-control' .
        ($errors->has('stock') ? ' is-invalid' : ''), 'placeholder' => 'Stock']) }}
        {!! $errors->first('stock', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>stock</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('precio') }}</label>
    <div>
        {{ Form::text('precio', $product->precio, ['class' => 'form-control' .
        ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
        {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>precio</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_tipo_prod') }}</label>
    <div>
        {{ Form::text('id_tipo_prod', $product->id_tipo_prod, ['class' => 'form-control' .
        ($errors->has('id_tipo_prod') ? ' is-invalid' : ''), 'placeholder' => 'Id Tipo Prod']) }}
        {!! $errors->first('id_tipo_prod', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>id_tipo_prod</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_proveedor') }}</label>
    <div>
        {{ Form::text('id_proveedor', $product->id_proveedor, ['class' => 'form-control' .
        ($errors->has('id_proveedor') ? ' is-invalid' : ''), 'placeholder' => 'Id Proveedor']) }}
        {!! $errors->first('id_proveedor', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>id_proveedor</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('estado_prod') }}</label>
    <div>
        {{ Form::text('estado_prod', $product->estado_prod, ['class' => 'form-control' .
        ($errors->has('estado_prod') ? ' is-invalid' : ''), 'placeholder' => 'Estado Prod']) }}
        {!! $errors->first('estado_prod', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>estado_prod</b> instruction.</small>
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
