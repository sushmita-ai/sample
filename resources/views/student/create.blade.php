@extends('admin.layout')
@section('content')
    <div class="card">
        <div class="card-header">Create Student</div>
        <div class="card-body">

            <form action="{{ url('/admin/student') }}" method="post">
                {!! csrf_field() !!}
                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>Subject</label></br>
                <input type="text" name="subject" id="subject" class="form-control"></br>
                <label>Roll</label></br>
                <input type="text" name="roll" id="roll" class="form-control"></br>
                <lable>Select</lable></br>
                 <select  id="list" class= "form-control">Select</select>
            </br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script type="text/javascript">
            $('#list').select2({
                placeholder: "Select Student",
                ajax: {
                    url: '{{route('student.select')}}',
                    dataType: 'json',
                    delay:'5000',
                    processResults: function (data) {
                        return {
                            results: $.map(data, function (student) {
                                return {
                                    text: student.name,
                                    id: student.id
                                }
                            })
                        };
                    },
                    cache: true
                }
            });



    </script>
@endsection






