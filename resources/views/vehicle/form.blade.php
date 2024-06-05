
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_usuario') }}</label>
    <div>
        {{ Form::text('id_usuario', $vehicle->id_usuario, ['class' => 'form-control' .
        ($errors->has('id_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Id Usuario']) }}
        {!! $errors->first('id_usuario', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">vehicle <b>id_usuario</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('matricula') }}</label>
    <div>
        {{ Form::text('matricula', $vehicle->matricula, ['class' => 'form-control' .
        ($errors->has('matricula') ? ' is-invalid' : ''), 'placeholder' => 'Matricula']) }}
        {!! $errors->first('matricula', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">vehicle <b>matricula</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_marca') }}</label>
    <div>
        {{ Form::text('id_marca', $vehicle->id_marca, ['class' => 'form-control' .
        ($errors->has('id_marca') ? ' is-invalid' : ''), 'placeholder' => 'Id Marca']) }}
        {!! $errors->first('id_marca', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">vehicle <b>id_marca</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('modelo') }}</label>
    <div>
        {{ Form::text('modelo', $vehicle->modelo, ['class' => 'form-control' .
        ($errors->has('modelo') ? ' is-invalid' : ''), 'placeholder' => 'Modelo']) }}
        {!! $errors->first('modelo', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">vehicle <b>modelo</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('año_salida_vh') }}</label>
    <div>
        {{ Form::text('año_salida_vh', $vehicle->año_salida_vh, ['class' => 'form-control' .
        ($errors->has('año_salida_vh') ? ' is-invalid' : ''), 'placeholder' => 'Año Salida Vh']) }}
        {!! $errors->first('año_salida_vh', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">vehicle <b>año_salida_vh</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('color_vh') }}</label>
    <div>
        {{ Form::text('color_vh', $vehicle->color_vh, ['class' => 'form-control' .
        ($errors->has('color_vh') ? ' is-invalid' : ''), 'placeholder' => 'Color Vh']) }}
        {!! $errors->first('color_vh', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">vehicle <b>color_vh</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('kilometraje') }}</label>
    <div>
        {{ Form::text('kilometraje', $vehicle->kilometraje, ['class' => 'form-control' .
        ($errors->has('kilometraje') ? ' is-invalid' : ''), 'placeholder' => 'Kilometraje']) }}
        {!! $errors->first('kilometraje', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">vehicle <b>kilometraje</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('cilindros') }}</label>
    <div>
        {{ Form::text('cilindros', $vehicle->cilindros, ['class' => 'form-control' .
        ($errors->has('cilindros') ? ' is-invalid' : ''), 'placeholder' => 'Cilindros']) }}
        {!! $errors->first('cilindros', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">vehicle <b>cilindros</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_categoria') }}</label>
    <div>
        {{ Form::text('id_categoria', $vehicle->id_categoria, ['class' => 'form-control' .
        ($errors->has('id_categoria') ? ' is-invalid' : ''), 'placeholder' => 'Id Categoria']) }}
        {!! $errors->first('id_categoria', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">vehicle <b>id_categoria</b> instruction.</small>
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
