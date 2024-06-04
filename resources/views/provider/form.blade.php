
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nomb_proveedor') }}</label>
    <div>
        {{ Form::text('nomb_proveedor', $provider->nomb_proveedor, ['class' => 'form-control' .
        ($errors->has('nomb_proveedor') ? ' is-invalid' : ''), 'placeholder' => 'Nomb Proveedor']) }}
        {!! $errors->first('nomb_proveedor', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">provider <b>nomb_proveedor</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('direccion_prov') }}</label>
    <div>
        {{ Form::text('direccion_prov', $provider->direccion_prov, ['class' => 'form-control' .
        ($errors->has('direccion_prov') ? ' is-invalid' : ''), 'placeholder' => 'Direccion Prov']) }}
        {!! $errors->first('direccion_prov', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">provider <b>direccion_prov</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('telefono_prov') }}</label>
    <div>
        {{ Form::text('telefono_prov', $provider->telefono_prov, ['class' => 'form-control' .
        ($errors->has('telefono_prov') ? ' is-invalid' : ''), 'placeholder' => 'Telefono Prov']) }}
        {!! $errors->first('telefono_prov', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">provider <b>telefono_prov</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('email') }}</label>
    <div>
        {{ Form::text('email', $provider->email, ['class' => 'form-control' .
        ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
        {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">provider <b>email</b> instruction.</small>
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
