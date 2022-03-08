@extends('admin.layout')
@section('content')
    <div class="card">
        <div class="card-header">Student</div>
        <div class="card-body">

            <form action="{{ url('/admin/student/' .$students->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"></br>
                <label>Subject</label></br>
                <input type="text" name="subject" id="subject" value="{{$students->subject}}" class="form-control"></br>
                <label>Roll</label></br>
                <input type="number" name="roll" id="roll" value="{{$students->roll}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>
@stop
