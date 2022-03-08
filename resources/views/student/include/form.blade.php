{{--<div class="form-group">--}}
{{--    {!! Form::label('student_id', 'Student'); !!}--}}
{{--    {!! Form::select('student_id',['$student'],null,['class' => 'form-control','placeholder' => 'Select Student']); !!}--}}
{{--</div>--}}
<div class="form-group">
    {!! Form::label('student_id', 'Student'); !!}
    {!! Form::select('student_id',null, ['class' => 'form-control','placeholder'=>'Select Student']); !!}
</div>
<div class="form-group">
    {!! Form::label('name', 'Name'); !!}
    {!! Form::text('name',null, ['class' => 'form-control']); !!}
</div>
<div class="form-group">
    {!! Form::label('roll', 'Roll'); !!}
    {!! Form::number('roll',null, ['class' => 'form-control']); !!}
</div>

<div class="form-group">
    {!! Form::label('subject', 'Subject'); !!}
    {!! Form::text('subject',null, ['class' => 'form-control']); !!}

</div>

<div class="form-group">
    {!! Form::submit($button,['class' => 'btn btn-success']) !!}
    {!! Form::button('Reset',['type' => 'reset','class' => 'btn btn-danger']); !!}
</div>
