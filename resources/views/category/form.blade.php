
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nomb_categoria') }}</label>
    <div>
        {{ Form::text('nomb_categoria', $category->nomb_categoria, ['class' => 'form-control' .
        ($errors->has('nomb_categoria') ? ' is-invalid' : ''), 'placeholder' => 'Nomb Categoria']) }}
        {!! $errors->first('nomb_categoria', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">category <b>nomb_categoria</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('desc_categoria') }}</label>
    <div>
        {{ Form::text('desc_categoria', $category->desc_categoria, ['class' => 'form-control' .
        ($errors->has('desc_categoria') ? ' is-invalid' : ''), 'placeholder' => 'Desc Categoria']) }}
        {!! $errors->first('desc_categoria', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">category <b>desc_categoria</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('estado_cat') }}</label>
    <div>
        {{ Form::text('estado_cat', $category->estado_cat, ['class' => 'form-control' .
        ($errors->has('estado_cat') ? ' is-invalid' : ''), 'placeholder' => 'Estado Cat']) }}
        {!! $errors->first('estado_cat', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">category <b>estado_cat</b> instruction.</small>
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
