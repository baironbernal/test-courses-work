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
                  <h1 class="card-title">Username: {{$user->name}}</h1>
                  <h4 class="card-subtitle mb-2 text-muted"><b>Email: </b>{{$user->email}}</h4>

                @role('admin')
                  <p class="card-text"><b>Role:</b> I am ADMINISTRATOR</p>
                @else
                    <p class="card-text"><b>Role:</b> I am not ADMINISTRATOR :(</p>
                @endrole
                  
                </div>
              </div>

        </div>
    </div>
</div>
@stop