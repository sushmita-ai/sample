@extends('admin.layout')
@section('content')
    <div class="card">
        <div class="card-header">Student</div>
        <div class="card-body">

            <div class="card-body">
                <h5 class="card-title">Name : {{ $student->name }}</h5>
                <p class="card-text">Subject : {{ $student->subject }}</p>
                <p class="card-text">Roll : {{ $student->roll }}</p>
            </div>

            </hr>

        </div>
    </div>
