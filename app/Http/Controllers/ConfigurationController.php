<?php

namespace App\Http\Controllers;

use App\Models\Configuration;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ConfigurationController extends Controller
{
    public function index(): View
    {
        $configurations = Configuration::all();
        return view('configurations.index', compact('configurations'));
    }

    public function create(): View
    {
        return view('configurations.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'total_classes' => 'required|integer',
            'percentage_promotion' => 'required|integer',
            'percentage_regular' => 'required|integer',
        ]);

        Configuration::create($request->all());

        return redirect()->route('configurations.index')
            ->with('success', 'Configuración creada correctamente');
    }
}
