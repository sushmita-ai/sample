<?php

namespace App\Modules\Student;
use App\Http\Requests\StudentRequest;
use App\Models\student;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class StudentServices
{

    protected $student;

    public function __construct(
        Student $student
    )
    {
        $this->student = $student;
    }



    public function create(array $data)
    {
        try {
            $data['visibility'] = (isset($data['visibility']) ?  $data['visibility'] : '')=='on' ? 'visible' : 'invisible';
            $data['status'] = (isset($data['status']) ?  $data['status'] : '')=='on' ? 'active' : 'in_active';
            $data['created_by']= Auth::user()->id;
            $student = $this->student->create($data);
            return $student;

        } catch (Exception $e) {
            return null;
        }
    }


    public function find($studentId)
    {
        try {
            return $this->student->find($studentId);
        } catch (Exception $e) {
            return null;
        }
    }
    public function get()
    {
        try {
            return $this->student->get();
        } catch (Exception $e) {
            return null;
        }
    }
    public function all($id)
    {
        try {
            return $this->student->all($id);
        } catch (Exception $e) {
            return null;
        }
    }


    public function update($studentId, array $data)
    {
        try {

            $data['visibility'] = (isset($data['visibility']) ?  $data['visibility'] : '')=='on' ? 'visible' : 'invisible';
            $data['status'] = (isset($data['status']) ?  $data['status'] : '')=='on' ? 'active' : 'in_active';
            $data['updated_by']= Auth::user()->id;
            $student= $this->student->find($studentId);

            $student = $student->update($data);


            return $student;
        } catch (Exception $e) {
            return false;
        }
    }
    public function delete($studentid)
    {
        try {

            $data['deleted_at']= Carbon::now();
            $student = $this->student->find($studentid);
            return $student = $student->update($data);
        } catch (Exception $e) {
            return false;
        }
    }
    public function getData()
    {
        $query = $this->student->query();
            return Datatables::of($query)
                ->addIndexColumn()
                ->addColumn('actions', function ($row) {
                    $action = '<a href="'.route("student.edit", $row->id).'" class="btn btn-success btn-sm">Edit</a> ';
                    $action .= '<a href="'.route("student.destroy", $row->id).'"><button data-rowid="' . $row->id . '" class="btn-btn-xs btn-danger btn-delete" onclick="return confirm(&quot;Confirm delete?&quot;)">Delete</button></a>';
                    return $action;

                })
                ->rawColumns(['visibility', 'status', 'created_by', 'updated_by','deleted_at','actions'])
                ->make(true);
        }

    public function getStudentList()
    {

        $data = [];

        $data =Student::select("id","name")
            ->when(request()->has('q'), function ($query) {
                $query->where('name','LIKE', request('q'));
            })
            ->get();
        return \Response::json($data);
    }







}
