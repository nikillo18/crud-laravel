<?php

namespace App\Http\Controllers;


use App\Models\student;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreStudentsRequest;
use App\Http\Requests\UpdateStudentsRequest;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('students.index', [
            'students' => student::latest()->paginate(10)
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
        student::create($request->all());
        return redirect()->route('students.index')
            ->withSuccess('new students is added successfully.');
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
        $students = Student::Find($id);
        $students->update($request->all());
        return redirect()->back()
            ->withSuccess('students is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id): RedirectResponse
    {
        $students = Student::Find($id);
        
        $students->delete();
        return redirect()->route('students.index')
            ->withSuccess('students is deleted successfully.');
    }
}

