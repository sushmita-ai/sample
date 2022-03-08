<?php

namespace App\Http\Controllers\Admin\Student;
use App\Modules\Student\StudentServices;
use App\Http\Requests\StudentRequest;
use App\Models\student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $student;

    function __construct(StudentServices $student)
    {
        $this->student = $student;
    }

    public function index()
    {

        $student = $this->student->get();
        return view('student.index', compact('student'));
    }

    public function getData()
    {

        $student = $this->student->getData();
        return $student;
    }

    public function create()
    {

        return view('student.create');
    }


    public function store(StudentRequest $request)
    {
        $this->student->create($request->all());
        return redirect('admin/student')->with('flash_message', 'Student Added!');

    }


    public function show()
    {
        $student = $this->student->get();
        return view('student.show', compact('student'));
    }


    public function edit($id)
    {
        $students = $this->student->find($id);
        return view('student.edit', compact('students'));
    }


    public function update(StudentRequest $request, $id)
    {
        $students = $this->student->find($id);
        $students->update($request->all());
        return redirect('/admin/student')->with('flash_message', 'student Updated!');

    }

    public function destroy($id)
    {
        $this->student->delete($id);
        return redirect()->route('student.index')->with('flash message', 'deleted successfully');

    }
    public function getStudentList()
    {
        $student = $this->student->getStudentList();
        return $student;
    }



}
