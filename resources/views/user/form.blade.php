
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('name') }}</label>
    <div>
        {{ Form::text('name', $user->name, ['class' => 'form-control' .
        ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">user <b>name</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('gender') }}</label>
    <div>
        {{ Form::text('gender', $user->gender, ['class' => 'form-control' .
        ($errors->has('gender') ? ' is-invalid' : ''), 'placeholder' => 'Gender']) }}
        {!! $errors->first('gender', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">user <b>gender</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('image') }}</label>
    <div>
        {{ Form::text('image', $user->image, ['class' => 'form-control' .
        ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Image']) }}
        {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">user <b>image</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('phone') }}</label>
    <div>
        {{ Form::text('phone', $user->phone, ['class' => 'form-control' .
        ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => 'Phone']) }}
        {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">user <b>phone</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('email') }}</label>
    <div>
        {{ Form::text('email', $user->email, ['class' => 'form-control' .
        ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
        {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">user <b>email</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('birthdate') }}</label>
    <div>
        {{ Form::text('birthdate', $user->birthdate, ['class' => 'form-control' .
        ($errors->has('birthdate') ? ' is-invalid' : ''), 'placeholder' => 'Birthdate']) }}
        {!! $errors->first('birthdate', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">user <b>birthdate</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('role') }}</label>
    <div>
        {{ Form::text('role', $user->role, ['class' => 'form-control' .
        ($errors->has('role') ? ' is-invalid' : ''), 'placeholder' => 'Role']) }}
        {!! $errors->first('role', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">user <b>role</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('status') }}</label>
    <div>
        {{ Form::text('status', $user->status, ['class' => 'form-control' .
        ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
        {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">user <b>status</b> instruction.</small>
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
