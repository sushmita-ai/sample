@extends('admin.layout')
@section('page-specific-styles')
    <link rel="stylesheet" href="{{ asset('demo/admin/DataTables/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/admin/DataTables/TableTools.min.css') }}"/>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <h2>Students</h2>
                    <div class="card-body">
                        <a href="{{ url('/admin/student/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table id="student" class="table table-hover" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Subject</th>
                                    <th>Roll</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
{{--                                @foreach($student as $item)--}}
{{--                                    <tr>--}}
{{--                                        <td>{{ $loop->iteration }}</td>--}}
{{--                                        <td>{{ $item->name }}</td>--}}
{{--                                        <td>{{ $item->subject }}</td>--}}
{{--                                        <td>{{ $item->roll }}</td>--}}
{{--                                        <td>--}}
{{--                                            <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>--}}
{{--                                            <form method="POST" action="{{ url('/student' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">--}}
{{--                                                {{ method_field('DELETE') }}--}}
{{--                                                {{ csrf_field() }}--}}
{{--                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>--}}
{{--                                            </form>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('demo/admin/DataTables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            // $('#student').DataTable();
            $('#student').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": '{{ route('student.ajax'),$type=null}}',
                "columns": [
                    { "data": "name" },
                    { "data": "subject" },
                    {"data":"roll"},
                    { "data": "actions"},

                ],
            });


        })
    </script>
@endsection
