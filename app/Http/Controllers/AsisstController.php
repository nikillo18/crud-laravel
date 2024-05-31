<?php

namespace App\Http\Controllers;

use App\Models\Asisst;
use App\Models\Student;
use Illuminate\Http\Request;


class AsisstController extends Controller
{
    public function index()
    {
        return view('asissts.index');
    }

    public function search(Request $request)
    {
        $request->validate(['dni' => 'required|numeric']);
        $student = Student::where('dni', $request->dni)->first();

        if ($student) {
            return view('asissts.create', compact('student'));
        }

        return redirect()->back()->with('error', 'Estudiante no encontrado');
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'fecha' => 'required|date',
            'presente' => 'required|boolean',
        ]);

        $asisst = Asisst::create($request->all());

        if ($request->presente) {
            $student = Student::find($request->student_id);
            $student->incrementAsisst();
        }

        return redirect()->route('asissts.index')->with('success', 'Asistencia registrada correctamente');
    }

    public function getAsisstsByDate(Request $request)
    {
        $date = $request->input('date');
        $asissts = Asisst::where('fecha', $date)->with('student')->get();

        $students = $asissts->map(function ($asisst) {
            return $asisst->student;
        });

        return view('asissts.select-date', ['students' => $students]);
    }
}


