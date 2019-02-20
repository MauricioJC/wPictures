@extends('layouts.app')
@section('content')
    <div class="container mt-3">
        <div class="card shadow">
            <h5 class="card-header text-center">Edit picture</h5>
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <img src="{{asset($picture->path)}}" 
                            class="img-fluid change-image mb-sm-3">
                    </div>
                    <div class="col-md-4">
                        {!! Form::model($picture, ['route' => ['picture.update', $picture->id], 
                            'method' => 'PUT', 'files' => true]) !!}
                            @include('picture.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection