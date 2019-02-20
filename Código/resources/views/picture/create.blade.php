@extends('layouts.app')
@section('content')
    <div class="container mt-3">
        <div class="card shadow">
            <h5 class="card-header text-center">Register new picture</h5>
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <img src="{{asset('/images/default.png')}}" 
                            class="img-fluid change-image mb-sm-3">
                    </div>
                    <div class="col-md-4">
                        {!! Form::open(['route' => 'picture.store', 'files' => true]) !!}
                            <div class="custom-file">
                                {{Form::file('image',['class'=>'custom-file-input '
                                    .($errors->has('image')?'is-invalid':''),'accept'=>'image/*'])}}
                                {{Form::label('image','Choose file',['class'=>'custom-file-label'])}}
                                @if ($errors->has('image'))
                                    <div class="invalid-feedback text-right">
                                        {{ $errors->first('image') }}       
                                    </div>    
                                @endif
                            </div>
                            @include('picture.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection