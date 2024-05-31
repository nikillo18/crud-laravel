<?php

namespace App\Http\Controllers;


use App\Models\student;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreStudentsRequest;
use App\Http\Requests\students;
use App\Http\Requests\UpdateStudentsRequest;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use App\Models\Log;


class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():view
    {
       /**  $todaysDate = date("m-d");
        $date = new DateTime();
        $date->format('d-Y');
        $students = Student::all();
        $birthdayStudents = [];
        
        foreach ($students as $student) {
            if ($student->nacimiento == $todaysDate) {
                $birthdayStudents[] = $student->nombre;
            }
        }
        
        if (!empty($birthdayStudents)) {
            $mensaje = "Hoy es el cumpleaños de:";
            foreach ($birthdayStudents as $nombre) {
                $mensaje .= "," . $nombre ;
            }
            return $mensaje;
        } else {
            return "No hay estudiantes que cumplan años hoy.";
        }*/

         return view('students.index', [
            'students' => student::latest()->paginate(20)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentsRequest $request): RedirectResponse
{
    $student = Student::create($request->all());

    // Registrar la acción en los logs
    Log::create([
        'user_id' => Auth::id(),
        'action' => 'create',
        'ip' => Request::ip(),
        'browser' => $_SERVER['HTTP_SEC_CH_UA'],
    ]);

    return redirect()->route('students.index')
        ->withSuccess('New student is added successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show( $id): View
    {
        $students = Student::Find($id);
        return view('students.show', [
            'students' => $students
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $students = Student::Find($id);
        return view('students.edit',compact("students"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentsRequest $request, $id): RedirectResponse
    {
        $student = Student::find($id);
        $student->update($request->all());
    
        Log::create([
            'user_id' => Auth::id(),
            'action' => 'update',
            'ip' => Request::ip(),
            'browser' => $_SERVER['HTTP_SEC_CH_UA'],
        ]);
    
        return redirect()->back()
            ->withSuccess('Student is updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
{
    $student = Student::find($id);
    $student->delete();

    Log::create([
        'user_id' => Auth::id(),
        'action' => 'delete',
        'ip' => Request::ip(),
        'browser' => $_SERVER['HTTP_SEC_CH_UA'],
    ]);

    return redirect()->route('students.index')
        ->withSuccess('Student is deleted successfully.');
}

}


