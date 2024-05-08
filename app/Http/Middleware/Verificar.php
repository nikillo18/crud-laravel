<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Registro;

class Verificar
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $registros = new Registro();
        $ip = $request->ip();
        $registros->ip = $ip;
        $registros->save();


        /* DB::table('registros')->insert([
            'ip' => $ip,
        ]);*/

        return redirect()->route("students.index");
    }
}
