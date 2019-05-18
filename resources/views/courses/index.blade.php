@extends('adminlte::page')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
                @if (session('status'))
                <div class="alert alert-warning" role="alert">
                    {{ session('status') }}
                </div>
                @endif
            <a class="btn btn-success btn-sm" href="{{url('admin/course/create')}}">Create</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Type Course:</th>
                        <th scope="col">Created By:  </th>
                        <th scope="col">Show  </th>
                        <th scope="col">Delete  </th>
                        
                    </tr>
                </thead>
                <tbody>
                    @if(isset($courses))
                    @foreach ($courses as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->duration}}</td>
                        <td>{{$item->typeCourse->name}}</td>                        
                        <td>{{$item->user->name}}</td>
                        <td>
                            <a href="{{url('admin/course/'.$item->id)}}">Show</a>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('course.destroy', $item->id) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        
                    </tr>
                    @endforeach
                    @else
                    <tr class="no-found">
                        <td colspan="8">No existe registros.</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop