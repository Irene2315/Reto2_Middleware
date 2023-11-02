<?php
 
namespace App\Http\Middleware;
 
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;
 
class AntesDeComprobar
{
    public function handle(Request $request, Closure $next): Response
    {
        Log::info("Antes de comprobar");
 
        return $next($request);
    }
}