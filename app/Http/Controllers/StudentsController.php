<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Configuration;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreStudentsRequest;
use App\Http\Requests\UpdateStudentsRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use App\Models\Log;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('students.index', [
            'students' => Student::latest()->paginate(20)
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

        Log::create([
            'user_id' => Auth::id(),
            'action' => 'create',
            'ip' => Request::ip(),
            'browser' => $_SERVER['HTTP_SEC_CH_UA'] ?? null,
        ]);

        return redirect()->route('students.index')
            ->withSuccess('New student is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $student = Student::findOrFail($id);
        $status = $this->calculateStatus($student);
        return view('students.show', compact('student', 'status'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentsRequest $request, $id): RedirectResponse
    {
        $student = Student::findOrFail($id);
        $student->update($request->all());
    
        Log::create([
            'user_id' => Auth::id(),
            'action' => 'update',
            'ip' => Request::ip(),
            'browser' => $_SERVER['HTTP_SEC_CH_UA'] ?? null,
        ]);
    
        return redirect()->route('students.index')
            ->withSuccess('El estudiante se ha actualizado correctamente.');
    }

     

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $student = Student::findOrFail($id);
        $student->delete();

        Log::create([
            'user_id' => Auth::id(),
            'action' => 'delete',
            'ip' => Request::ip(),
            'browser' => $_SERVER['HTTP_SEC_CH_UA'] ?? null,
        ]);

        return redirect()->route('students.index')
            ->withSuccess('Student is deleted successfully.');
    }

    /**
     * Calculate the status of a student based on attendance.
     */
    public function calculateStatus(Student $student): string
    {
        $configuration = Configuration::first();
        if (!$configuration) {
            return 'Configuración no encontrada';
        }

        $totalClasses = $configuration->total_classes;
        $percentagePromotion = $configuration->percentage_promotion;
        $percentageRegular = $configuration->percentage_regular;

        $attendancePercentage = ($student->asisst / $totalClasses) * 100;

        if ($attendancePercentage >= $percentagePromotion) {
            return 'Promocionado';
        } elseif ($attendancePercentage >= $percentageRegular) {
            return 'Regular';
        } else {
            return 'Libre';
        }
    }
}


