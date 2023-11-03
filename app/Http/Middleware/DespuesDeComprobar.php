<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response; 
use Illuminate\Support\Facades\Log;

class DespuesDeComprobar
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        Log::info("Después de comprobar"); 

        return $response;
    }
}