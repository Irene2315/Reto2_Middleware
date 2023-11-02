<?php
 
namespace App\Http\Middleware;
 
use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;
 
class DespuesDeComprobar 
{
    public function handle(Request $request, Closure $next): Response
    {
        Log::info("Despues de comprobar");
 
        return $next($request);
    }
}