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

            @if (session('errors'))
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('course.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Name Course: </label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp"
                placeholder="Enter name" value="{{old('name') }}">
                    <small id="nameHelp" class="form-text text-muted">
                        Here add course
                    </small>
                </div>
                <div class="form-group">
                    <label>Duration: </label>
                    <input type="text" class="form-control" name="duration" id="duration" aria-describedby="durationHelp"
                        placeholder="Enter duration" value="{{old('duration') }}"> 
                    <small id="durationHelp" class="form-text text-muted">
                        Here add duration
                    </small>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Type Course:</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="type_course_id">
                        @if (isset($types_courses))
                            @foreach ($types_courses as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Send</button>
            </form>


        </div>
    </div>
</div>
@stop