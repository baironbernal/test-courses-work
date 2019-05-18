@extends('adminlte::page')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif            

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h1 class="card-title">{{$course->name}}</h1>
                  <h4 class="card-subtitle mb-2 text-muted"><b>Duration: </b>{{$course->duration}}</h4>
                  <p class="card-text"><b>Created:</b> :{{$course->user->name}}</p>
                  <p class="card-text"><b>Type course:</b> :{{$course->typeCourse->name}}</p>
                </div>
              </div>

        </div>
    </div>
</div>
@stop