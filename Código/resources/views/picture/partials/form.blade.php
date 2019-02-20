<div class="form-group row mt-3">
    {{Form::label('title','Title',['class'=>'col-lg-4 text-lg-right'])}}
    <div class="col-lg-8">
        {{Form::text('title',null, ['class'=>
            'form-control form-control-sm '.($errors->has('title')?'is-invalid':'')])}}
        @if ($errors->has('title'))
            <div class="invalid-feedback">
                {{ $errors->first('title') }}        
            </div>    
        @endif
    </div>
</div>

<div class="form-group row">
    {{Form::label('tags','Tags',['class'=>'col-lg-4 text-lg-right'])}}
    <div class="col-lg-8">
        {{Form::text('tags',null, ['class'=>'form-control form-control-sm '
            .($errors->has('tags')?'is-invalid':'')])}}
        @if ($errors->has('tags'))
            <div class="invalid-feedback">
                {{ $errors->first('tags') }}        
            </div>    
        @endif
    </div>
</div>    

<div class="form-group row">
    {{Form::label('description','Description',['class'=>'col-lg-4 text-lg-right'])}}
    <div class="col-lg-8">
        {{Form::textarea('description',null,['class'=>'form-control '
            .($errors->has('description')?'is-invalid':''), 'rows'=>3])}}
        @if ($errors->has('description'))
            <div class="invalid-feedback">
                {{ $errors->first('description') }}        
            </div>    
        @endif
    </div>
</div>

<div class="form-group row">
    <div class="col-lg-8 offset-lg-4">
        {{Form::submit('Save',['class'=>'btn btn-primary btn-block'])}}
    </div>
</div>


